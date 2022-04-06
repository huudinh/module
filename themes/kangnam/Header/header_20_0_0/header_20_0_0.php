<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Header/header_20_0_0';
    if($check == 0){
      include(locate_template("Module/Header/header_20_0_0/css/header_20_0_0_css.php"));  

      $js_inline .= '
        <script>
            Element.prototype.hasClass = function (className) {
                return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
            };
        
            const iconMenu = document.getElementById("icon-menu");
            const menuShow = document.getElementById("menu-show");
            const bgShow = document.getElementById("bg-menu");
            const iconSubMenu = document.getElementsByClassName("header_20_0_0__box__item");
            const iconRight = document.getElementsByClassName("menu-icon");
            const menuSub = document.getElementsByClassName("menuSub");
        
            var i;
            for (i = 0; i < iconSubMenu.length; i++) {
                iconSubMenu[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                });
            }
        
            if (window.screen.width < 1050) {
                for (const iconR of iconRight) {
                    iconR.addEventListener("click", function () {
                        if (iconR.hasClass("icon-angle-down")) {
                            iconR.classList.add("icon-angle-up");
                            iconR.classList.remove("icon-angle-down");
                        }
                        else {
                            iconR.classList.remove("icon-angle-up");
                            iconR.classList.add("icon-angle-down");
                        }
                    });
                }
            }
        
            iconMenu.addEventListener("click", function () {
                iconMenu.classList.add("hid");
                menuShow.classList.add("active");
                bgShow.classList.add("active");
            });
        
            bgShow.addEventListener("click", function () {
                bgShow.classList.remove("active");
                menuShow.classList.remove("active");
            });
            for (const menuS of menuSub) {
                menuS.addEventListener("mouseover", mouseOver);
                function mouseOver() {
                    document.getElementById("icon-menu").innerHTML = "☰";
                }
            }
            
            </script>
            ';
            
    }
?>
<?php get_template_part('Module/Popup/popup_search_1_0_0/popup_search_1_0_0'); ?>
<header class="header_20_0_0" id="header_20_0_0">
    <div class="container">
        <div class="header_20_0_0__box">
            <div class="header_20_0_0__box__section2">
                <?php
                    $postId = get_the_ID();
                    if($postId == 155879){
                        $div = 'h1';
                    } else {
                        $div = 'div';
                    }
                    echo '
                        <'.$div.' class="header_20_0_0__boxLogo">
                            <a href="/">
                                <img width="135" height="38" src="'.$path.'/images/logo-kangnam.png" alt="logo kangnam">
                            </a>
                        </'.$div.'>
                    ';
                ?>
                <div class="iconMidd header_20_0_0__boxNav" id="icon-menu">☰</div>
            </div>
            <div class="header_20_0_0__box__section header_20_0_0__boxMain" id="menu-show">
                <a href="#page1" class="header_20_0_0__box__item-logosb">
                    <img width="195" height="85" src="<?php echo $path ?>/images/logosb.svg" alt="Kangnam">
                </a>
                <ul class="menu">
                    <?php
            foreach( $field as $key2 => $value): 
                $j=1;
                foreach( $value as $key3 => $list):
                    $main_tt = explode("\n",  $list["titlePC"]);
                    if( $list['acf_fc_layout'] == 'menu_donPC' ):
                        echo '
                        ';
                    elseif( $list['acf_fc_layout'] == 'menu_subPC' ):
                        echo '
                        ';
                    elseif ( $list['acf_fc_layout'] == 'menu_sub_fullPC' ):
                        $main_tt = explode("\n",  $list["titlePC"]);
                        $main_ct = explode("&nbsp;",  $list["col1pc"]);
                        echo '
                            <li class="menuSub">
                                <a href="'.$main_tt[1].'" class="header_20_0_0__box__item arr">'.$main_tt[0].'</a> 
                                <div class="menuSubBox">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <p>
                                                <img width="340" height="221" class="no-lazy" src="'.$main_tt[2].'" alt="'.$main_tt[0].'">
                                            </p>
                                        </div>
                                        <div class="col-xl-4">
                                            '.$main_ct[0].'
                                        </div>
                                        <div class="col-xl-4">
                                            '.$main_ct[1].'
                                        </div>
                                    </div>
                                </div>
                            </li>
                        ';
                    endif;
                    $j++;
                endforeach;
            endforeach;
        ?>
                </ul>
            </div>
            <div class="header_20_0_0__task modal-btn" data-modal="search">
                <a class="header_20_0_0__boxSearch" >
                    <i class="icon-search-2">
                        <img width="20" height="20" src="<?php echo $path ?>/images/search.svg" alt="Search">
                    </i>
                </a>
            </div>
            <div class="header_20_0_0__box-bg" id="bg-menu">
            </div>
        </div>

    </div>
    <!-- <div class="header_20_0_0__box-all" id="boxall-menu">
        <div class="container">
            <div class="row"> -->
                <?php

                // foreach( $field as $key2 => $value): 
                //     foreach( $value as $key3 => $list):
                //         if( ($list['acf_fc_layout'] == 'menu_sub') || ($list['acf_fc_layout'] == 'menu_sub_full')):
                //             $hd_tt = explode("\n",$list['hd_title']);
                //             if($hd_tt):
                //                 echo '
                //                     <div class="col-xl-3">
                //                         <div class="header_20_0_0__box-allTitle">'.$hd_tt[0].'</div>
                //                 ';

                //                 if( $list['acf_fc_layout'] == 'menu_don' ):
                //                     echo '
                //                         <li class="menuSub">
                //                             <a href="'.$main_tt[1].'" >'.$main_tt[0].'</a> 
                //                         </li>
                //                     ';
                //                 elseif( $list['acf_fc_layout'] == 'menu_sub' ):
                //                     echo '
                //                         <li class="menuSub active">
                //                             <a href="'.$main_tt[1].'">'.$main_tt[0].'<i class="menu-icon icon-angle-down icon-pc">⌵</i><i class="menu-icon icon-angle-down icon-mb">₊</i><i class="menu-icon icon-angle-down icon-mb upd">₋</i></a>
                //                             '.$list["col1"].'
                //                         </li>
                //                     ';
                //                 elseif ( $list['acf_fc_layout'] == 'menu_sub_full' ):
                //                     echo '
                //                         <ul>
                //                     ';
                //                     foreach( $list as $key4 => $list_menu):
                //                         foreach( $list_menu as $key5 => $list_menu2):
                //                             $titlesig = explode("\n",  $list_menu2["titlesig"]);
                //                             $main_tt2 = explode("\n",  $list_menu2["title2"]);
                //                             if($list_menu2['acf_fc_layout'] == 'menu_don_sub'):
                //                                 echo'
                //                                     <li><a href="'.$titlesig[1].'" '.$titlesig[2].' >'.$titlesig[0].'</a></li>
                //                                 ';
                //                             elseif( $list_menu2['acf_fc_layout'] == 'menu_da_cap_sub' ):
                //                                 echo $list_menu2['col1'];
                //                             endif;
                //                         endforeach;
                //                     endforeach;
                //                     echo'
                //                         </ul>
                //                     ';
                //                 endif;
                //                 echo '
                //                     </div>
                //                 ';
                //             endif;
                //         endif;
                            
                //     endforeach;
                // endforeach;
                // end menu chuan       

        // Lay menu poup theo menu chinh
        // foreach( $field as $key2 => $value): 
        //   $j=1;
        //   foreach( $value as $key3 => $list):
        //       $main_tt = explode("\n",  $list["titlePC"]);
        //       if( $list['acf_fc_layout'] == 'menu_donPC' ):
        //           echo '
        //           ';
        //       elseif( $list['acf_fc_layout'] == 'menu_subPC' ):
        //           echo '
        //           ';
        //       elseif ( $list['acf_fc_layout'] == 'menu_sub_fullPC' ):
        //           $main_ct = explode("&nbsp;",  $list["col1pc"]);
        //           echo '
        //               <div class="col-xl-3">
        //             <h4>'.$main_tt[0].'</h4>
        //             '.$main_ct[1].'
        //             '.$main_ct[2].'
        //           ';
                  
        //           echo'
        //             </div>
        //           ';
        //       endif;
        //       $j++;
        //   endforeach;
        // endforeach;
    ?>
            <!-- </div>
        </div> -->
    <!-- </div> -->
</header>

<?php
  echo $js_inline;
?>