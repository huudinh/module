<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Header/header_15_0_0'; 
    if($check == 0){
        $css_inline .= "  
        <style>
            .header_15_0_0{
                position: fixed;
                z-index: 9;
                width: 100%;
                top: 0;
                background:#fff;
            }
            a {
                text-decoration: none;
            }

            .header_15_0_0_box1 {
                display: flex;
                align-items: center;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box1 {
                    margin-top: 10px;
                    justify-content: space-between;
                }
            }

            .header_15_0_0_box1-logo {
                display: none;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box1-logo {
                    display: block;
                    width: 100%;
                    text-align: center;
                }
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box1-logo img {
                    max-width: 100%;
                    width: 220px;
                }
            }

            @media (max-width: 414px) {
                .header_15_0_0_box1-logo img {
                    width: 200px;
                }
            }

            @media (max-width: 360px) {
                .header_15_0_0_box1-logo img {
                    width: 170px;
                }
            }

            .header_15_0_0_box1-Control {
                display: none;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box1-Control {
                    display: flex;
                }
            }

            .header_15_0_0_box1-Control,
            .header_15_0_0_box1-Nav {
                width: 85px;
            }

            .header_15_0_0_box1-sp,
            .header_15_0_0_box1-dv {
                width: 24%;
            }

            @media (max-width: 1024px) {

                .header_15_0_0_box1-sp,
                .header_15_0_0_box1-dv {
                    display: none;
                }
            }

            .header_15_0_0_box1-ht {
                width: 60%;
                text-align: center;
                color: #fff;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box1-ht {
                    display: none;
                }
            }

            .header_15_0_0_box1-dv {
                display: flex;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box1-dv {
                    display: none;
                }
            }

            .header_15_0_0_box1-Nav {
                display: none;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box1-Nav {
                    display: block;
                }
            }

            .header_15_0_0_box1-call {
                padding-top: 5px;
            }

            .header_15_0_0_box1-call img {
                vertical-align: bottom;
                width: 100%;
            }

            .header_15_0_0_box1-search {
                background-color: #0f7762;
                margin-top: 5px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                width: 35px;
                justify-content: center;
            }

            .header_15_0_0_box1-searchMB {
                background: #067970;
                color: #fff;
                display: inline-block;
                border-radius: 100%;
                font-size: 13px;
                padding: 8px 10px;
                display: none;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box1-searchMB {
                    display: block;
                }
            }

            .header_15_0_0_box1-mapMB {
                display: none;
            }

            .header_15_0_0_box1-mapMB #Layer_1 {
                fill: #fff;
                width: 14px;
                height: 14px;
            }

            .header_15_0_0_box1-mapMB a {
                background: #067970;
                color: #fff;
                display: block;
                padding: 5px 8px;
                font-size: 16px;
                border-radius: 5px;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box1-mapMB {
                    display: block;
                    margin-left: 10px;
                }
            }

            .header_15_0_0_box1-Nav {
                color: #1D8371;
                font-size: 35px;
            }

            @media (max-width: 414px) {
                .header_15_0_0_box1-Nav {
                    font-size: 30px;
                }
            }

            .header_15_0_0_boxTop {
                border-top: 5px solid #0f7762;
                background: url($path/images/boxtop-bg.png) center bottom no-repeat;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_boxTop {
                    border-top: none;
                    background: #fff;
                }
            }

            .header_15_0_0_box2 {
                display: flex;
                align-items: center;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2 {
                    display: none;
                    width: 270px;
                    background: #fff;
                    position: fixed;
                    height: 100%;
                    left: 0;
                    top: 0;
                    z-index: 3;
                    overflow: auto;
                    padding-bottom: 20px;
                    padding-top: 20px;
                }
            }

            .header_15_0_0_box2.show {
                display: block;
            }

            .header_15_0_0_box2-logo {
                width: 25%;
            }

            .header_15_0_0_box2-logo img {
                width: 95%;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2-logo img {
                    width: 100%;
                    padding: 0 30px;
                }
            }

            @media (max-width: 414px) {
                .header_15_0_0_box2-logo img {
                    padding: 0 20px;
                }
            }

            .header_15_0_0_box2__menu {
                width: 75%;
                display: inherit;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2__menu {
                    width: 100%;
                }
            }

            .header_15_0_0_box2__menu a {
                font-size: 14px;
                padding: 35px 18px 30px;
                margin: 0;
                text-align: center;
                text-transform: uppercase;
                font-weight: 600;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2__menu a {
                    padding: 0 15px;
                }
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2__menu-hover {
                    padding: 10px 0 10px;
                    position: relative;
                    border-top: 1px solid rgba(0, 0, 0, 0.1);
                }
            }

            .header_15_0_0_box2__menu-hover a {
                position: relative;
            }

            .header_15_0_0_box2__menu-hover .arr::before {
                position: absolute;
                bottom: 29px;
                right: 5px;
                text-align: center;
                color: #f16749;
                content: '⌵';
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2__menu-hover .arr::before {
                    display: none !important;
                }
            }

            .header_15_0_0_box2__menu-hover:hover .arr::before,
            .header_15_0_0_box2__menu-hover:hover .header_15_0_0_box2__menu-content {
                display: block;
            }

            .header_15_0_0_box2__menu-hover:hover>a {
                color: #e3a261;
            }

            .header_15_0_0_box2__menu-content {
                padding-top: 30px;
                display: none;
                position: absolute;
                width: 80%;
                right: 16px;
                top: 60px;
                background: #0E7661;
                color: #fff;
                border-radius: 8px;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2__menu-content {
                    position: initial;
                    width: 100%;
                    border-radius: 0;
                    top: auto;
                    right: auto;
                    margin-top: 10px;
                    padding-top: 0;
                }
            }

            .header_15_0_0_box2__menu-content ul {
                list-style: none;
                padding: 0;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2__menu-content ul {
                    padding: 0px;
                    margin: -2px;
                }
            }

            .header_15_0_0_box2__menu-content ul li {
                border-bottom: 1px dotted #ccc;
                margin: 0;
                padding: 4px 0;
                font-size: 13px;
                position: relative;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2__menu-content ul li {
                    border-bottom: none;
                    background-color: #017d73;
                    padding: 8px 0px;
                    margin: 4px 0;
                }
            }

            .header_15_0_0_box2__menu-content ul li:last-child {
                border-bottom: none;
            }

            .header_15_0_0_box2__menu-content a {
                color: #fff;
                transition: 0.1s;
                padding: 0;
                text-transform: none;
                font-weight: 400;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2__menu-content a {
                    padding: 0 15px;
                }
            }

            .header_15_0_0_box2__menu-content a:hover {
                color: #DCAF47;
            }

            .header_15_0_0_box2__menu-content h4 {
                color: #fff;
                font-size: 15px;
                padding: 5px 0;
                text-transform: uppercase;
                border-bottom: 1px dotted #d5b67c;
                position: relative;
                margin-bottom: 10px;
                margin-top: -32px;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2__menu-content h4 {
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-left: 12px;
                    border-bottom: transparent;
                    color: #e5c992;
                }
            }

            .header_15_0_0_box2__menu-content p {
                margin-top: 10px;
            }

            .header_15_0_0_box2__menu-content .row {
                padding: 15px 25px;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2__menu .menu-icon {
                    display: block;
                    position: absolute;
                    right: 0px;
                    top: 0px;
                    color: #666;
                    padding: 10px;
                    text-align: right;
                    width: 100%;
                    height: 100%;
                }
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2__menu .icon-plus::before {
                    content: '+';
                    position: absolute;
                    right: 10px;
                }

                .header_15_0_0_box2__menu .icon-plus.active::before {
                    content: '-';
                }
            }

            .header_15_0_0_box2 ul {
                padding-left: 0;
            }

            .header_15_0_0_box2 ul li {
                list-style: none;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2__address {
                    display: none;
                }
            }

            .header_15_0_0_box2__address select {
                padding: 5px 0;
                margin-bottom: 0;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2 .row>div {
                    padding-left: 0;
                    padding-right: 0;
                }
            }

            .header_15_0_0_box2-tv {
                display: none;
            }

            @media (max-width: 1024px) {
                .header_15_0_0_box2-tv {
                    display: block;
                    text-align: center;
                    margin-top: 30px;
                }
            }

            .header_15_0_0_box2-tv a {
                background: #067670;
                color: #fff;
                padding: 10px 20px;
                text-transform: uppercase;
                font-weight: 500;
            }

            .header_15_0_0_box3 {
                background: rgba(0, 0, 0, 0.6);
                width: 100%;
                height: 100%;
                content: '';
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                z-index: 2;
                animation: opac 0.4s;
            }

            .header_15_0_0_box3.act {
                display: block;
            }

            /*# sourceMappingURL=header_15_0_0.css.map */
        </style>         
        ";

         $js_inline .= '
                <script>
                    const iconMenu=document.getElementById("toggle"),menus=document.getElementsByClassName("header_15_0_0_box2"),headerMenu=document.getElementById("headerMenu"),menuBg=document.getElementsByClassName("header_15_0_0_box3"),iconSubMenu=document.getElementsByClassName("menu-icon");var i;for(i=0;i<iconSubMenu.length;i++)iconSubMenu[i].addEventListener("click",(function(){this.classList.toggle("active");var panel=this.nextElementSibling;"block"===panel.style.display?panel.style.display="none":panel.style.display="block"}));Element.prototype.hasClass=function(className){return this.className&&new RegExp("(^|\s)"+className+"(\s|$)").test(this.className)},iconMenu.addEventListener("click",(function(){for(const bg of menuBg)bg.hasClass("act")?bg.classList.remove("act"):bg.classList.add("act")}));for(const bg of menuBg)bg.addEventListener("click",(function(){bg.classList.remove("act"),headerMenu.classList.toggle("show"),iconMenu.hasClass("on")&&iconMenu.classList.remove("on")}));iconMenu.addEventListener("click",(function(){iconMenu.classList.toggle("on")})),iconMenu.addEventListener("click",(function(){for(const menu of menus)menu.classList.toggle("show")}));
                </script>
            ';           
        
    }
?> 
<header class="header_15_0_0">
    <div class="header_15_0_0_boxTop">
        <div class="container">
            <div class="header_15_0_0_box1">
                <div id="toggle" class="header_15_0_0_box1-Nav">☰</div>
                <div class="header_15_0_0_box1-logo">
                    <a href="/">
                        <img src="<?php echo $path ?>/images/logo.png" alt="">
                    </a>
                </div>
                <div class="header_15_0_0_box1-Control">
                    <div class="header_15_0_0_box1-searchMB">
                        <a class="modal-btn" data-modal="search">
                            <img style="width:16px" src="<?php echo $path ?>/images/search-2.svg">
                        </a>
                    </div>
                    <div class="header_15_0_0_box1-mapMB">
                        <a href="#chi-nhanh">
                            <svg id="Layer_1" enable-background="new 0 0 512 512" height="15" viewBox="0 0 512 512"
                                width="15" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path class="header_15_0_0-box1-map"
                                        d="m407.579 87.677c-31.073-53.624-86.265-86.385-147.64-87.637-2.62-.054-5.257-.054-7.878 0-61.374 1.252-116.566 34.013-147.64 87.637-31.762 54.812-32.631 120.652-2.325 176.123l126.963 232.387c.057.103.114.206.173.308 5.586 9.709 15.593 15.505 26.77 15.505 11.176 0 21.183-5.797 26.768-15.505.059-.102.116-.205.173-.308l126.963-232.387c30.304-55.471 29.435-121.311-2.327-176.123zm-151.579 144.323c-39.701 0-72-32.299-72-72s32.299-72 72-72 72 32.299 72 72-32.298 72-72 72z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="header_15_0_0_box1-sp">
                </div>
                <div class="header_15_0_0_box1-ht">
                    HỆ THỐNG THẨM MỸ UY TÍN TOÀN QUỐC
                </div>
                <div class="header_15_0_0_box1-dv">
                    <div class="header_15_0_0_box1-call">
                        <a href class="bvda_call">
                            <img src="<?php echo $path ?>/images/boxtop-call.png">
                        </a>
                    </div>
                    <div class="header_15_0_0_box1-search">
                        <a class="modal-btn" data-modal="search">
                            <img src="<?php echo $path ?>/images/search.svg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header_15_0_0_box2" id="headerMenu">
            <a href="/" class="header_15_0_0_box2-logo">
                <img src="<?php echo $path ?>/images/logo.png">
            </a>
            <ul class="header_15_0_0_box2__menu">
                <?php
                    foreach( $field as $key2 => $value):  
                        foreach( $value as $key3 => $list):
                            $main_tt = explode("\n",  $list["title"]);
                            if( $list['acf_fc_layout'] == 'menu_don' ):
                                echo '
                                    <li class="header_15_0_0_box2__menu-content">
                                        <a href="'.$main_tt[1].'" class="header_15_0_0_box2__menu__title">
                                            '.$main_tt[0].'
                                        </a>  
                                    </li>
                                ';
                            elseif( $list['acf_fc_layout'] == 'menu_sub' ):
                                echo '
                                    <li class="header_15_0_0_box2__menu-hover">
                                        <a href="'.$main_tt[1].'" class="arr">
                                            '.$main_tt[0].'
                                        </a>
                                        <i class="menu-icon icon-plus"></i>
                                        <div class="header_15_0_0_box2__menu-content">
                                        <article class="row">
                                            <div class="col-xl-12">
                                                '.$list["col1"].'
                                            </div>
                                        </article>
                                    </div>  
                                    </li>
                                ';
                            elseif ( $list['acf_fc_layout'] == 'menu_sub_full' ):
                                $main_tt = explode("\n",  $list["title"]);
                                echo '
                                    <li class="header_15_0_0_box2__menu-hover">
                                        <a href="'.$main_tt[1].'" class="arr">'.$main_tt[0].'</a> 
                                            <i class="menu-icon icon-plus"></i>
                                            <div class="header_15_0_0_box2__menu-content">
                                                <div class="row">
                                ';
                                $so_cot = $main_tt[2];
                                if ($so_cot == ''):
                                    $so_cot = '1';
                                endif;
                                
                                $main_ct = explode("&nbsp;",  $list["col1"]);
                                if($so_cot == '1'):
                                    $i = 12;
                                    for($j = 0; $j < 1; $j++){
                                        echo'
                                            <div class="col-xl-'.$i.' ">
                                                '.$main_ct[$j].'
                                            </div>
                                        ';
                                    }                                   
                                elseif($so_cot == '2'):
                                    $i = 6;
                                    for($j = 0; $j < 2; $j++){
                                        echo'
                                            <div class="  col-xl-'.$i.'">
                                                '.$main_ct[$j].'
                                            </div>
                                        ';
                                    }

                                elseif($so_cot == '3'):
                                    $i = 4;
                                    for($j = 0; $j < 3; $j++){
                                        echo'
                                            <div class="col-xl-'.$i.'">
                                                '.$main_ct[$j].'
                                            </div>
                                        ';
                                    }
                                elseif($so_cot == '4'):
                                    $i = 3;
                                    for($j = 0; $j < 4; $j++){
                                        echo'
                                            <div class="col-xl-'.$i.'">
                                                '.$main_ct[$j].'
                                            </div>
                                        ';
                                    }
                                elseif($so_cot == 'auto'):
                                    echo'
                                        '.$list["col1"].'                                                
                                    ';
                                endif;
                                echo'
                                            </div>
                                        </div>
                                    </li>
                                ';

                            endif;
                        endforeach;
                    endforeach;
                ?>
            </ul>
            <div class="header_15_0_0_box2__address">
                <select id="url" onchange="urlHandler(this.value)" >
                    <option selected>CHỌN CHI NHÁNH</option>
                    <?php 
                        $rows = $field["header_place"];
                        $place_url_array = array();
                        foreach($rows as $row):
                            $place_city = $row['place_city'];
                            $place_url = $row['place_url'];
                            array_push($place_url_array, $place_url);
                            echo '<option value="'.$place_url.'">'.$place_city.'</option>';
                        endforeach;
                    ?>
                </select>
            </div>
            <script>
                <?php if (
                    is_page(2328) || 
                    is_page(3415) || 
                    is_page(3448) ||  
                    is_page(3411) ||  
                    is_page(3411) ||  
                    is_page(2328) ||  
                    is_page(3405) ||  
                    is_page(3407) ||  
                    is_page(3444)  
                ):?>
                    document.getElementById("url").value = window.location.href;
                <?php endif; ?>
                function urlHandler(value) {                               
                    window.location.assign(`${value}`);
                }
            </script>
            <div class="header_15_0_0_box2-tv">
                <a class="popup_regist_2_0_1_clickPopup bvda_tv">Tư vấn miễn phí</a>
            </div>
        </div>
    </div>
    <div class="header_15_0_0_box3"></div>
</header>


