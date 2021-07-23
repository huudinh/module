<?php 
    if($check == 0){
        include(locate_template("Module_v2/Header/header_6_0_0/css/header_6_0_0_css.php"));   
        
        add_action( 'theme_js', 'header_6_0_0_js' );
        function header_6_0_0_js(){
            echo '
                <script>
                    Element.prototype.hasClass = function(className) {
                        return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
                    };

                    const iconMenu = document.getElementById("toggle");
                    const bg = document.getElementById("menu-bg");
                    const menu = document.getElementById("headerMenu");
                    const icon = document.getElementsByClassName("menu-icon");


                    iconMenu.addEventListener("click", function(){
                        bg.classList.add("active");
                        menu.classList.add("active");
                    });
                    bg.addEventListener("click", function(){
                        bg.classList.remove("active");
                        menu.classList.remove("active");
                    });

                    var i;
                    for (i = 0; i < icon.length; i++) {
                        icon[i].addEventListener("click", function () {
                            this.classList.toggle("active");
                            var panel = this.nextElementSibling;
                            if (panel.style.display === "block") {
                                panel.style.display = "none";
                            } else {
                                panel.style.display = "block";
                            }
                        });
                    }

                    if (window.screen.width < 860) {
                    for ( const iconR of icon ){
                        iconR.addEventListener("click", function(){
                            if(iconR.hasClass("icon-plus")){
                                iconR.classList.add("icon-minus");
                                iconR.classList.remove("icon-plus");
                            }
                            else{
                                iconR.classList.remove("icon-minus");
                                iconR.classList.add("icon-plus");
                            }
                        });
                    }
                    }

                    window.onscroll = function(){ menuFix() };

                    var header = document.getElementById("header_6_0_0");
                    var sticky = header.offsetTop;

                    function menuFix() {
                        if (window.pageYOffset > sticky) {
                            header.classList.add("menufix");
                        } else {
                            header.classList.remove("menufix");
                        }
                    }

                    (function(){

                        var doc = document.documentElement;
                        var w = window;
                    
                        var prevScroll = w.scrollY || doc.scrollTop;
                        var curScroll;
                        var direction = 0;
                        var prevDirection = 0;
                        var header = document.getElementById("header_6_0_0");
                        var checkScroll = function() {
                        curScroll = w.scrollY || doc.scrollTop;
                        if (curScroll > prevScroll) { 
                            direction = 2;
                        }
                        else if (curScroll < prevScroll) { 
                            direction = 1;
                        }
                        if (direction !== prevDirection) {
                            toggleHeader(direction, curScroll);
                        }
                        prevScroll = curScroll;
                        };
                        var toggleHeader = function(direction, curScroll) {
                        if (direction === 2 && curScroll > 52) { 
                            header.classList.add("hide");
                            prevDirection = direction;
                        }
                        else if (direction === 1) {
                            header.classList.remove("hide");
                            prevDirection = direction;
                        }
                        };
                        window.addEventListener("scroll", checkScroll);
                        })();
                </script>            
            ';            
        }
    }
?> 
<?php include(locate_template('Module_v2/Popup/popup_search_1_0_0/popup_search_1_0_0.php')); ?>

<?php  
    foreach($page_json as $field): 
        if($field->acf_fc_layout == 'header'): 
        foreach($field->header_sub as $header_data): 
            if($header_data->acf_fc_layout == 'header_6_0_0'):

            $about = explode("\n",$header_data->about); 
            $col1 = explode("\n",$header_data->col1); 
            $col2 = explode("\n",$header_data->col2); 
            $menu = $header_data->id_header_6_0_0_sub1; ?>

<header class="header_6_0_0" id="header_6_0_0">
    <div class="header_6_0_0_box">
        <div class="header_6_0_0_box_top">
            <div class="header_6_0_0_box_top__new">
                <div class="header_6_0_0_box_top__newlabel"><?php echo $about[0]; ?></div>
                <div class="header_6_0_0_box_top__newlabel lb1"><?php echo $about[1]; ?></div>
            </div>
        </div>

        <div class="header_6_0_0_box_1">

            <div class="container">
                <div class="header_6_0_0_box_1_left">
                    <?php 
                        $postid = get_the_ID();
                        if ($postid == '81752'):
                            echo '
                                <h1 class="header_6_0_0_box_1__logo">
                                    <a href="/">
                                        <img  src="'.$path.'/images/logo.png" alt="Nha Khoa Paris">
                                    </a>
                                </h1>
                            ';
                        else:
                            echo '
                                <div class="header_6_0_0_box_1__logo">
                                    <a href="/">
                                        <img  src="'.$path.'/images/logo.png" alt="Nha Khoa Paris">
                                    </a>
                                </div>
                            ';                      
                        endif;
                        ?>
                </div>
                <div class="header_6_0_0_box_1_right">
                    <div class="header_6_0_0_box_1__address">
                        <ul>
                            <li><?php echo $col1[0]; ?></li>
                            <li><b><?php echo $col1[1]; ?></b></li>
                        </ul>
                    </div>
                    <div class="header_6_0_0_box_1__call popup_caller">
                        <ul>
                            <li><?php echo $col2[0]; ?></li>
                            <li><b><?php echo $col2[1]; ?></b></li>
                        </ul>
                    </div>
                    <div class="header_6_0_0_box_1__regtv">
                        <a rel ="nofollow" class="header_6_0_0_box_1__regtv btnnktv">Đặt Lịch Hẹn</a>
                    </div>
                    <div class="header_6_0_0_box_1__search">
                        <button class="header_6_0_0_box_1__button modal-btn" data-modal="search">
                        <img  src="https://nhakhoaparis.vn/wp-content/uploads/2021/04/search.png" alt="icon search">
                    </button>
                    </div>
                </div>

                <div class="iconMid siteHeaderNav" id="toggle"><i class="icon-menu"></i>≡</div>
                <a href="#" class="iconMid header_6_0_0_box_1__siteHeaderCall header_6_0_0_box_1__btnnkhotline">
                    <div style="float: left;" class="icon-callmb popup_caller">
                        
                    </div>
                    <div class="modal-btn icon_search_mb" data-modal="search">
                        <button class="header_6_0_0_box_1__button">
                            <img  src="https://nhakhoaparis.vn/wp-content/uploads/2021/04/search.png" alt="icon search">
                        </button>
                    </div>

                </a>
            </div>
        </div>

        <div class="header_6_0_0_box_2" id="headerMenu">
            <div class="container">
                <a href="/" class="header_6_0_0_box_2__logosb"><img width="160" height="59" src="<?php echo $path; ?>/images/logo.png" alt="Nha Khoa Paris"></a>
                <ul class="header_6_0_0_box_2__menu">
                    <!-- <li class="header_6_0_0_box_2__menu__menuSub icon-homes">
                        <a href="https://nhakhoaparis.vn/" class="header_6_0_0_box_2__menu__title arr icon-home icon-home1"></a>
                        <a href="#" class="header_6_0_0_box_2__menu__title arr icon-home commit_box icon-home2 popup_call"></a>
                    </li> -->

                <?php foreach($menu as $key => $value):
                        $menuc1 = explode("\n", $value->title);
                        $menuc2 = explode("&nbsp;", $value->col1);

                        if($value->acf_fc_layout == 'menu_don'): ?>

                            <li class="header_6_0_0_box_2__menu__menuSub">
                                <a rel="<?php echo $menuc1[3] ?>" href="<?php echo $menuc1[1] ?>" class="header_6_0_0_box_2__menu__title arr"><?php echo $menuc1[0] ?></a>
                            </li>

                        <?php endif;
                        if($value->acf_fc_layout == 'menu_sub_full'): ?>

                            <li class="header_6_0_0_box_2__menu__menuSub">
                                <a rel="<?php echo $menuc1[3] ?>" href="<?php echo $menuc1[1] ?>" class="header_6_0_0_box_2__menu__title arr"><?php echo $menuc1[0] ?></a>
                                <i class="icon-plus menu-icon">✛</i>
                                <div class="header_6_0_0_box_2__menu__menuSubBox">
                                    <div class="box">
                                        <div class="row">
                                            <?php $so_cot = $menuc1[2]; 

                                                if ($so_cot == ''):
                                                    $so_cot = '1';
                                                endif;

                                                if($so_cot == 1):
                                                    $i = 12;
                                                    for($j = 0; $j < 1; $j++){
                                                        echo'
                                                            <div class="col-lg-'.$i.'">
                                                                '.$menuc2[$j].'
                                                            </div>
                                                        ';
                                                    }
                                                elseif($so_cot == 2):
                                                    $i = 6;
                                                    for($j = 0; $j < 2; $j++){
                                                        echo'
                                                            <div class="col-lg-'.$i.'">
                                                                '.$menuc2[$j].'
                                                            </div>
                                                        ';
                                                    }
        
                                                elseif($so_cot == 3):
                                                    $i = 4;
                                                    for($j = 0; $j < 3; $j++){
                                                        echo'
                                                            <div class="col-lg-'.$i.'">
                                                                '.$menuc2[$j].'
                                                            </div>
                                                            ';
                                                    }
                                                elseif($so_cot == 4):
                                                    $i = 3;
                                                    for($j = 0; $j < 4; $j++){
                                                        echo'
                                                            <div class="col-lg-'.$i.'">
                                                                '.$menuc2[$j].'
                                                            </div>
                                                        ';
                                                    }
                                                endif;
                                            
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </li>

                        <?php endif; endforeach; ?> 

                </ul>
                <!-- <div class="header_6_0_0_box_2__social"> -->
                    <?php
                        // echo ' 
                        //     <a  rel='.$about[6].' target="_blank" href="'.$about[2].'" class="face"></a>
                        //     <a rel='.$about[6].' target="_blank" href="'.$about[3].'" class="youtu"></a>
                        // ';
                    ?>
                    
                <!-- </div> -->
            </div>
        </div>

        <div class="header_6_0_0_box_3" id="menu-bg"></div>
    </div>
</header>

<?php endif; endforeach; ?>
<?php endif; endforeach; ?>






