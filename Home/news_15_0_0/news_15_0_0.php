<?php
    $slide_array = array();
    if($field['slide_pc']):
        foreach($field['slide_pc'] as $key => $value):
            $slide_array[$key]['slide_pc'] = $value['url'];
        endforeach;
    endif;
    
    if($field['slide_mb']):
        foreach($field['slide_mb'] as $key => $value):
            $slide_array[$key]['slide_mb'] = $value['url'];
        endforeach;
    endif;

    if($check == 0){
        $css_inline .= '
        <style>
            .slider_1_0_3 .owl-prev::before, .slider_1_0_3 .owl-next::before {
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
                -moz-osx-font-smoothing: grayscale; }

                .slider_1_0_3 {
                margin-top:0;
                position: relative;
                z-index: 0; }
                .slider_1_0_3 .container {
                    margin: 0 auto; }
                .slider_1_0_3 .aligncenter {
                    margin: 0; }
                .slider_1_0_3 .owl-dots {
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    position: absolute;
                    bottom: 20px;
                    left: 0; }
                .slider_1_0_3 .owl-prev, .slider_1_0_3 .owl-next {
                    height: 100%;
                    display: flex;
                    align-items: center;
                    position: absolute;
                    top: 0; }
                    .slider_1_0_3 .owl-prev::before, .slider_1_0_3 .owl-next::before {
                    display: block;
                    font-size: 25px;
                    color: #003e7d; }
                    .slider_1_0_3 .owl-prev span, .slider_1_0_3 .owl-next span {
                    display: none; }
                .slider_1_0_3 .owl-theme .owl-prev, .slider_1_0_3 .owl-theme .owl-next {
                    background: rgba(126, 43, 43, 0) !important;
                    margin: 0 !important; }
                    .slider_1_0_3 .owl-theme .owl-prev:hover, .slider_1_0_3 .owl-theme .owl-next:hover {
                    background: rgba(210, 203, 216, 0.6) !important;
                    color: #fff !important; }
                .slider_1_0_3 .owl-theme .owl-dots .owl-dot span {
                    width: 14px;
                    height: 14px; }
                .slider_1_0_3 .owl-theme .owl-dots .owl-dot.active span {
                    background: #869791 !important; }
                .slider_1_0_3 .owl-theme .owl-dots .owl-dot:hover span {
                    background: #fff !important; }
                .slider_1_0_3 .owl-prev {
                    left: 2%;
                    background: red; }
                    .slider_1_0_3 .owl-prev::before {
                    content: "\e889"; }
                .slider_1_0_3 .owl-next {
                    right: 2%; }
                    .slider_1_0_3 .owl-next::before {
                    content: "\e88a"; }

                @media (max-width: 1440px) {
                .slider_1_0_3 .carousel-item img {
                    max-width: 100%; } }
                @media (max-width: 1024px) {
                .slider_1_0_3 {
                    margin-top: 0;
                    padding: 0 ; } }
                @media (max-width: 414px) {
                .slider_1_0_3 {
                    margin-top: 65px;
                    padding: 0px; }
                    .slider_1_0_3 .owl-dots {
                    display: none; }
                    .slider_1_0_3 .owl-prev {
                    left: 0; }
                    .slider_1_0_3 .owl-next {
                    right: 0; } }

                /*# sourceMappingURL=slider_1_0_3.css.map */

        </style>
        ';
        add_action('wp_footer', 'slider_1_0_3');
        function slider_1_0_3(){ 
            echo '
                <script>
                $(".slider_1_0_3_owl").owlCarousel({loop:!0,margin:0,items:1,nav:!0,lazyLoad:!0});
                </script>
            ';           
        };
    }
?>

<section class="slider_1_0_3">
    <div class="owl-carousel owl-theme slider_1_0_3_owl">
        <?php
            foreach($slide_array as $key => $value):
                echo'
                    <div class="slider_1_0_3_item">
                        <picture>
                            <source media="(min-width:600px)" srcset="'.$value['slide_pc'].'">
                            <img src="'.$value['slide_mb'].'" alt="">
                        </picture>
                    </div>
                ';
            endforeach;
        ?> 
    </div>
</section>



