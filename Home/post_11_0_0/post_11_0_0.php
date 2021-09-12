<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Post/post_6_0_0';

	if($check == 0){
		$css_inline .= '
        <style>
            @font-face {
                font-family: "Barlow";
                src: url(fonts/Barlow.ttf);
            }
            .post_6_0_0__mainTitle h2 {
                font-family: Barlow;
            }
            
            .post_6_0_0__mainNote::before {
                font-family: "fontello";
                font-style: normal;
                font-weight: 400;
                speak: none;
                display: inline-block;
                text-decoration: inherit;
                width: 1em;
                margin-right: .2em;
                text-align: center;
                font-variant: normal;
                text-transform: none;
                line-height: 1em;
                margin-left: .2em;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            
            .post_6_0_0 {
                background: #F1F1F4;
                padding: 30px 0;
            }
            .post_6_0_0__box {
                display: flex;
                flex-wrap: wrap;
            }
            .post_6_0_0__menu {
                width: 20%;
                background: #fff;
                margin-right: 30px;
            }
            .post_6_0_0__menu .accordion ul {
                margin: 0;
            }
            .post_6_0_0__menu .accordion ul li {
                padding: 0;
            }
            .post_6_0_0__menu .accordion ul li span {
                background: none;
                color: #323232;
                font-weight: 600;
                padding-left: 60px;
            }
            .post_6_0_0__menu .accordion ul li span::after {
                color: #EF800A;
            }
            .post_6_0_0__menu .accordion ul li ul {
                background: #E7E7E9;
                padding: 10px 0 10px 65px;
            }
            .post_6_0_0__menu .accordion ul li ul li {
                padding: 5px 0;
                font-size: 14px;
            }
            .post_6_0_0__main {
                width: 60%;
                border-right: 1px solid #B6BEBF;
                background: #fff;
                padding-top: 10px;
            }
            .post_6_0_0__main p {
                padding: 0 20px;
            }
            .post_6_0_0__main .info {
                padding: 0 20px;
            }
            .post_6_0_0__mainTitle {
                padding: 20px;
            }
            .post_6_0_0__mainTitle h2 {
                font-size: 35px;
                line-height: 1.2;
                color: #03746e;
                margin: 0;
            }
            .post_6_0_0__mainTitle.color {
                padding-bottom: 20px;
            }
            .post_6_0_0__mainTitle.color h2 {
                color: #303030;
            }
            .post_6_0_0__mainSocial {
                padding: 20px;
                display: flex;
                justify-content: space-between;
            }
            .post_6_0_0__mainSocial span {
                color: #273030;
                font-style: italic;
            }
            .post_6_0_0__mainSocial .social a {
                color: #EF800A;
                margin: 0 10px;
            }
            .post_6_0_0__main .sapo {
                padding: 0 20px;
                font-weight: 600;
                color: #323232;
            }
            .post_6_0_0__mainImg {
                padding: 30px 20px;
                text-align: center;
            }
            .post_6_0_0__mainImg p {
                font-style: italic;
            }
            .post_6_0_0__mainNote {
                background: #D9EAE9;
                padding: 20px;
                padding-left: 50px;
                font-weight: 600;
                color: #03746e;
                position: relative;
            }
            .post_6_0_0__mainNote::before {
                content: "\e94c";
                position: absolute;
                color: #EF800A;
                left: 20px;
                top: 22px;
            }
            .post_6_0_0__mainPost {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                margin-top: 20px;
                padding: 0 20px;
            }
            .post_6_0_0__mainPost .item {
                width: 23%;
                text-align: center;
                background: #F1F1F4;
                display: block;
                margin: 0px 5px 20px 5px;
                padding: 10px;
            }
            .post_6_0_0__mainPost .item .pic img {
                width: 100%;
            }
            .post_6_0_0__mainPost .item .text {
                font-weight: 600;
                font-size: 12px;
            }
            .post_6_0_0__mainPost .itemStep {
                width: 23%;
                text-align: center;
                background: #F1F1F4;
                display: block;
                margin: 0px 5px 20px 5px;
            }
            .post_6_0_0__mainPost .itemStep p {
                background: #03746e;
                margin: 0;
                color: #fff;
                font-weight: 600;
                padding: 5px 0;
                text-align: center;
                font-size: 12px;
            }
            .post_6_0_0__mainPost .itemStep img {
                width: 100%;
            }
            .post_6_0_0__mainPost .itemStep span {
                padding: 5px 0 10px;
                display: block;
                font-size: 12px;
                font-weight: 600;
                color: #323232;
            }
            .post_6_0_0__mainDetail {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: center;
                margin: 20px 0;
                padding: 0 20px;
            }
            .post_6_0_0__mainDetail .pic {
                width: 40%;
                padding-right: 10px;
            }
            .post_6_0_0__mainDetail .pic img {
                width: 100%;
            }
            .post_6_0_0__mainDetail .text {
                padding-left: 10px;
                width: 60%;
            }
            .post_6_0_0__mainDetail .text ul {
                list-style: none;
                padding: 0;
                padding-left: 30px;
                margin: 0;
            }
            .post_6_0_0__mainDetail .text ul li {
                padding: 10px 0;
                color: #323232;
            }
            .post_6_0_0__mainRegist {
                background: #03746E;
                padding: 20px;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: center;
                color: #fff;
            }
            .post_6_0_0__mainRegist .text {
                font-style: italic;
                width: 70%;
            }
            .post_6_0_0__mainRegist .registButton {
                width: 30%;
                text-align: right;
            }
            .post_6_0_0__mainRegist .registButton a {
                background: #EF800A;
                color: #fff;
                padding: 10px 20px;
                text-transform: uppercase;
                font-weight: bold;
                color: #fff;
                transition: all 0.4s;
            }
            .post_6_0_0__mainRegist .registButton a:hover {
                background: #EED59F;
                color: #323232;
                transition: all 0.4s;
            }
            .post_6_0_0__mainLK {
                padding: 30px 20px;
                padding-left: 40px;
                font-weight: 600;
                color: #323232;
            }
            .post_6_0_0__mainLK p {
                position: relative;
            }
            .post_6_0_0__mainLK p::before {
                content: "";
                position: absolute;
                left: -20px;
                top: 0;
                width: 3px;
                height: 100%;
                background: #EF800A;
            }
            .post_6_0_0__mainPrice {
                padding: 0 20px;
                margin-bottom: 40px;
            }
            .post_6_0_0__mainPrice #customers {
                border-collapse: collapse;
                width: 100%;
            }
            .post_6_0_0__mainPrice #customers td, .post_6_0_0__mainPrice #customers th {
                border: 1px solid #333;
                padding: 8px;
            }
            .post_6_0_0__mainPrice #customers th {
                padding: 5px 8px;
                text-align: left;
                background-color: #37A89E;
                color: white;
            }
            .post_6_0_0__mainPrice #customers th:last-child {
                text-align: center;
            }
            .post_6_0_0__mainPrice #customers td {
                padding: 5px 8px;
            }
            .post_6_0_0__mainPrice #customers td:last-child {
                text-align: center;
            }
            .post_6_0_0__mainBanner {
                text-align: center;
                padding: 40px 0 20px;
            }
            .post_6_0_0__mainImgTS {
                padding-bottom: 30px;
            }
            .post_6_0_0__mainImgTS .color {
                text-align: center;
            }
            .post_6_0_0__mainImgTS .mainTS {
                width: 60%;
                margin: 0 auto;
                position: relative;
            }
            .post_6_0_0__mainImgTS .mainTS .owl-nav .owl-prev {
                position: absolute;
                left: -40px;
                top: calc(50% - 60px);
                background: none;
            }
            .post_6_0_0__mainImgTS .mainTS .owl-nav .owl-prev span {
                font-size: 40px;
                color: #333;
            }
            .post_6_0_0__mainImgTS .mainTS .owl-nav .owl-next {
                position: absolute;
                right: -40px;
                top: calc(50% - 60px);
                background: none;
            }
            .post_6_0_0__mainImgTS .mainTS .owl-nav .owl-next span {
                font-size: 40px;
                color: #333;
            }
            .post_6_0_0__mainImgTS .mainTS .owl-dots {
                display: none;
            }
            .post_6_0_0__mainImgTS .mainTS .item .text {
                display: flex;
                justify-content: space-around;
                margin: 10px 0;
            }
            .post_6_0_0__mainImgTS .mainTS .item .text span {
                font-weight: 600;
                text-transform: uppercase;
                color: #333;
                font-size: 14px;
            }
            .post_6_0_0__mainImgTS .regist {
                text-align: center;
            }
            .post_6_0_0__mainImgTS .regist a {
                background: #EF810A;
                color: #fff;
                text-transform: uppercase;
                font-weight: 600;
                padding: 10px 25px;
            }
            .post_6_0_0__mainComment {
                text-align: center;
            }
            .post_6_0_0__mainComment .color {
                text-align: center;
            }
            .post_6_0_0__sticky {
                width: 15%;
                padding-left: 30px;
            }
            .post_6_0_0__sticky.sticky {
                position: fixed;
                top: 100px;
                right: 67px;
            }
            .post_6_0_0__sticky p {
                color: #737374;
                font-weight: 600;
                position: relative;
            }
            .post_6_0_0__sticky p::before {
                content: "";
                position: absolute;
                left: -31px;
                top: 0;
                width: 3px;
                height: 100px;
                background: #ef800a;
            }
            .post_6_0_0__sticky ul {
                padding: 0;
                list-style: none;
                margin: 0;
                position: relative;
            }
            .post_6_0_0__sticky ul::before {
                content: "";
                position: absolute;
                left: -31px;
                top: 0;
                width: 3px;
                height: 100%;
                background: #ef800a;
            }
            .post_6_0_0__sticky ul li {
                padding: 5px 0;
                font-size: 14px;
            }
            .post_6_0_0__sticky ul li a.active {
                color: #EF810A;
            }
            
            @media (max-width: 1440px) {
                .post_6_0_0__sticky.sticky {
                right: 43px;
                }
            }
            @media (max-width: 1366px) {
                .post_6_0_0__sticky.sticky {
                right: 38px;
                }
            }
            @media (max-width: 1280px) {
                .post_6_0_0__sticky.sticky {
                right: 35px;
                }
            }
            @media (max-width: 1024px) {
                .post_6_0_0__menu {
                margin-right: 10px;
                }
                .post_6_0_0__menu .accordion ul li span {
                padding-left: 30px;
                font-size: 12px;
                }
                .post_6_0_0__menu .accordion ul li ul {
                padding-left: 40px;
                }
                .post_6_0_0__menu .accordion ul li ul li {
                font-size: 12px;
                }
                .post_6_0_0__mainTitle h2 {
                font-size: 30px;
                }
                .post_6_0_0__main .sapo {
                font-size: 12px;
                }
                .post_6_0_0__mainImg img {
                width: 100%;
                }
                .post_6_0_0__mainNote {
                font-size: 12px;
                }
                .post_6_0_0__main p {
                font-size: 12px;
                }
                .post_6_0_0__mainPost .item .text {
                font-size: 10px;
                }
                .post_6_0_0__mainDetail .text ul li {
                font-size: 12px;
                }
                .post_6_0_0__mainRegist .text {
                font-size: 12px;
                }
                .post_6_0_0__mainRegist .registButton a {
                font-size: 12px;
                }
                .post_6_0_0__mainPrice #customers th, .post_6_0_0__mainPrice #customers td {
                font-size: 12px;
                }
                .post_6_0_0__mainBanner img {
                width: 100%;
                }
                .post_6_0_0__mainImgTS .regist a {
                font-size: 12px;
                }
                .post_6_0_0__mainComment img {
                width: 100%;
                }
                .post_6_0_0__sticky {
                padding-left: 10px;
                }
                .post_6_0_0__sticky p::before {
                left: -12px;
                }
                .post_6_0_0__sticky ul::before {
                left: -12px;
                }
                .post_6_0_0__sticky ul li {
                font-size: 12px;
                }
                .post_6_0_0__sticky.sticky {
                right: 42px;
                }
            }
            @media (max-width: 812px) {
                .post_6_0_0 {
                padding-top: 60px;
                }
                .post_6_0_0__menu .accordion ul li ul {
                padding-left: 10px;
                }
                .post_6_0_0__mainPost .item {
                width: 22%;
                }
                .post_6_0_0__mainPost .itemStep {
                width: 22%;
                }
                .post_6_0_0__mainRegist .registButton a {
                font-size: 10px;
                }
                .post_6_0_0__sticky.sticky {
                right: 28px;
                }
            }
            @media (max-width: 414px) {
                .post_6_0_0 {
                padding-top: 10px;
                }
                .post_6_0_0__menu {
                display: none;
                }
                .post_6_0_0__sticky {
                display: none;
                }
                .post_6_0_0__main {
                width: 100%;
                }
                .post_6_0_0__mainTitle {
                padding: 10px;
                }
                .post_6_0_0__mainTitle h2 {
                font-size: 24px;
                }
                .post_6_0_0__mainTitle.color {
                padding-bottom: 10px;
                }
                .post_6_0_0__main p {
                padding: 0 10px;
                }
                .post_6_0_0__main .info img {
                    width: 100%;
                }
                .post_6_0_0__mainPost {
                padding: 0 10px;
                }
                .post_6_0_0__mainPost .item {
                padding: 0;
                width: 47%;
                }
                .post_6_0_0__mainPost .itemStep {
                width: 47%;
                }
                .post_6_0_0__mainPost .itemStep span {
                font-size: 10px;
                }
                .post_6_0_0__mainPost .itemStep p {
                font-size: 10px;
                }
                .post_6_0_0__mainDetail {
                padding: 0 10px;
                }
                .post_6_0_0__mainDetail .text ul {
                padding-left: 0;
                }
                .post_6_0_0__mainRegist {
                padding: 20px 10px;
                }
                .post_6_0_0__mainRegist .text {
                width: 100%;
                }
                .post_6_0_0__mainRegist .registButton {
                width: 100%;
                text-align: center;
                margin-top: 10px;
                }
                .post_6_0_0__mainLK {
                padding: 20px 10px;
                }
                .post_6_0_0__mainLK p::before {
                left: 0;
                }
                .post_6_0_0__mainPrice {
                padding: 0 10px;
                }
                .post_6_0_0__mainBanner {
                padding: 20px;
                }
                .post_6_0_0__mainImgTS .mainTS {
                width: 80%;
                }
                .post_6_0_0__mainImgTS .mainTS .item .text span {
                font-size: 10px;
                }
                .post_6_0_0__mainSocial span {
                font-size: 12px;
                }
            }
            @media (max-width: 360px) {
                .post_6_0_0__mainPost .item {
                width: 46%;
                }
                .post_6_0_0__mainPost .itemStep {
                width: 46%;
                }
                .post_6_0_0__mainDetail .pic {
                width: 100%;
                }
                .post_6_0_0__mainDetail .text {
                width: 100%;
                padding-left: 0;
                }
            }
        </style>
        ';
        add_action('wp_footer', 'post_6_0_0');
        function post_6_0_0(){ 
			echo '
				<script>
				function onScroll(s){var t=$(document).scrollTop();$(".post_6_0_0__sticky a").each(function(){var s=$(this),o=$(s.attr("href"));o.position().top-70<=t&&o.position().top-50+o.height()>t?($(".post_6_0_0__sticky a").removeClass("active"),s.addClass("active")):s.removeClass("active")})}$(".mainTS.owl-carousel").owlCarousel({loop:!1,margin:20,items:1,lazyLoad:!0,nav:!0,responsive:{0:{items:1},414:{items:1},768:{items:1},1024:{items:1}}}),jQuery(document).scroll(function(){scoll_top=jQuery(document).scrollTop(),scoll_top>=200?jQuery(".post_6_0_0__sticky").addClass("sticky"):jQuery(".post_6_0_0__sticky").removeClass("sticky")}),$(document).on("scroll",onScroll),$(".post_6_0_0__sticky a").on("click",function(s){if(""!==this.hash){s.preventDefault();var t=this.hash;return $("html, body").animate({scrollTop:$(t).offset().top-70},900),!1}}),$(window).scroll(function(){$(".run").each(function(){$(this).offset().top<$(window).scrollTop()+600&&$(this).addClass("runslide")})}),$(".post_6_0_0__sticky a").click(function(){$(this).hasClass("active")?$(this).removeClass("active"):($(".post_6_0_0__sticky a.active").removeClass("active"),$(this).addClass("active"))});
				</script>
			';           
		};	
	}
    $fields = $field['post_info'];
?>

<div class="post_6_0_0">
    <div class="post_6_0_0__box">
        <div class="post_6_0_0__menu">
            
            <!-- Sidebar -->
            <?php get_template_part('Module/Sidebar/sidebar_3_1_0/content-sidebar_3_1_0'); ?>

        </div>
        <div class="post_6_0_0__main">

            <?php get_template_part('Module/Post/breadcrumb_1_0_3/breadcrumb_1_0_3'); ?>

            <div class="post_6_0_0__mainTitle">
                <h2><?php echo get_the_title(); ?> </h2>
            </div>
            <div class="post_6_0_0__mainSocial">
                <span><?php the_date('d-m-Y');?></span>
                <div class="social">
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-chat-1"></i></a>
                    <a href="#"><i class="icon-share"></i></a>
                    <a href="#"><i class="icon-youtube-play"></i></a>
                </div>
            </div>

            <div class="info">
                <?php echo get_the_content(); ?>
            </div>

            <?php
                foreach($fields as $key => $value):
                    if( $value['acf_fc_layout'] == 'post_info_box1' ):
                        $data1 = $value['title'];
                        echo '
                            <div class="post_6_0_0__mainTitle color" id="h'.$key.'">
                                <h2>'.$data1.'</h2>
                            </div>
                        ';
                    endif;
                    if( $value['acf_fc_layout'] == 'post_info_box4' ):
                        $data = $value['note_post'];
                        echo '
                            <div class="post_6_0_0__mainNote">
                                '.$data.'
                            </div>
                            ';
                    endif;
                    if( $value['acf_fc_layout'] == 'post_info_box5' ):
                        $data = $value['the_p'];
                        echo '
                            <p>'.$data.'</p>
                        ';
                    endif;
                    if( $value['acf_fc_layout'] == 'post_info_box6' ):
                        echo '
                            <div class="post_6_0_0__mainPost">
                        ';
                        $row = $value['list_post'];
                        foreach($row as $key => $value1):
                            $data1 = explode("\n",  $value1['post_detail']);
                            echo '
                                <a href="'.$data1[2].'" class="item">
                                    <div class="pic">
                                        <img class="img-lazy" data-src="'.$data1[1].'" alt="">
                                    </div>
                                    <div class="text">'.$data1[0].'</div>
                                </a>
                            ';
                        endforeach;
                        echo '</div>';
                    endif;
                    if( $value['acf_fc_layout'] == 'post_info_box7' ):
                        $data = $value['img_cn'];
                        $data1 = $value['detail_cn'];
                        echo '
                            <div class="post_6_0_0__mainDetail">
                                <div class="pic">
                                    <img class="img-lazy" data-src="'.$data.'" alt="">
                                </div>
                                <div class="text">
                                    '.$data1.'
                                </div>
                            </div>
                        ';
                    endif;
                    if( $value['acf_fc_layout'] == 'post_info_box8' ):
                        $data1 = explode("\n",  $value['regist']);
                        echo '
                            <div class="post_6_0_0__mainRegist">
                                <div class="text">
                                    '.$data1[0].'
                                </div>
                                <div class="registButton">
                                    <a href="#" class="'.$data1[2].'">'.$data1[1].'</a>
                                </div>
                            </div>
                        ';
                    endif;
                    if( $value['acf_fc_layout'] == 'post_info_box9' ):
                        $data1 = $value['lk_post'];
                        echo '
                            <div class="post_6_0_0__mainLK">
                                <p>'.$data1.'</p>
                            </div>
                        ';
                    endif;
                    if( $value['acf_fc_layout'] == 'post_info_box10' ):
                        echo '
                            <div class="post_6_0_0__mainPost">
                        ';
                        $row = $value['list_qt'];
                        foreach($row as $key => $value1):
                            $data1 = explode("\n",  $value1['detail_qt']);
                            echo '
                                <div class="itemStep">
                                    <p>'.$data1[0].'</p>
                                    <img class="img-lazy" data-src="'.$data1[1].'" alt="">
                                    <span>'.$data1[2].'</span>
                                </div>
                            ';
                        endforeach;
                        echo '</div>';
                    endif;
                    if( $value['acf_fc_layout'] == 'post_info_box11' ):
                        $data = explode("\n",  $value['title_col']);
                        echo '
                            <div class="post_6_0_0__mainPrice">
                            <table id="customers">
                            <tr>
                                <th>'.$data[0].'</th>
                                <th>'.$data[1].'</th>
                            </tr>
                        ';
                        $row = $value['table_price'];
                        foreach($row as $key => $value1):
                            $data1 = explode("\n",  $value1['detail_table']);
                            echo '
                                <tr>
                                    <td>'.$data1[0].'</td>
                                    <td>'.$data1[1].'</td>
                                </tr>
                            ';
                        endforeach;
                        echo '</table></div>';
                    endif;
                    if( $value['acf_fc_layout'] == 'post_info_box12' ):
                        $data1 = explode("\n",  $value['banner']);
                        echo '
                            <div class="post_6_0_0__mainBanner">
                                <a href="'.$data1[1].'">
                                    <img class="img-lazy" data-src="'.$data1[0].'" alt="">
                                </a>
                            </div>
                        ';
                    endif;
                    if( $value['acf_fc_layout'] == 'post_info_box13' ):
                        $data = $value['link_view_img'];
                        echo '
                            <div class="post_6_0_0__mainImgTS">
                            <div class="owl-carousel owl-theme mainTS">
                        ';
                        $row = $value['img_bf'];
                        foreach($row as $key => $value1):
                            $data1 = explode("\n",  $value1['img_bf_detail']);
                            echo '
                                <div class="item">
                                    <div class="pic">
                                        <img class="owl-lazy" data-src="'.$data1[0].'" alt="">
                                    </div>
                                    <div class="text">
                                        <span>Trước</span>
                                        <span>Sau</span>
                                    </div>
                                </div>
                            ';
                        endforeach;
                        echo '
                                </div>
                                <div class="regist">
                                    <a href="'.$data.'">
                                        Xem tất cả
                                    </a>
                                </div>
                            </div>
                        ';
                    endif;
                endforeach;
            ?>

            
            <!-- Comment FB -->
            <div class="post_6_0_0__mainComment">
                <div class="post_6_0_0__mainTitle color" id="h6">
                    <h2>Hỏi đáp Bác sĩ vấn đề của bạn</h2>
                </div>
                <img class="img-lazy" data-src="<?php echo $path; ?>/images/post-fb.jpg" alt="">
            </div>

        </div>

        <div class="post_6_0_0__sticky">
            <p>Nội dung</p>

            <ul>
                <?php
                    foreach($fields as $key => $value):
                        if( $value['acf_fc_layout'] == 'post_info_box1' ):
                            $data1 = $value['title'];
                            if($key == 1):
                                $active = 'active';
                            else:
                                $active = '';
                            endif;

                            echo '
                                <li><a href="#h'.$key.'" class="'.$active.'">'.$data1.'</a></li>
                            ';
                        endif;
                    endforeach;
                ?>
            </ul>

        </div>
    </div>
</div>