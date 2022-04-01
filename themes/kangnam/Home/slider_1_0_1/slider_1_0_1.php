<?php
    $slide_array = array();
    if($field['slide_pc']):
        foreach($field['slide_pc'] as $key => $value):
            $slide_array[$key]['slide_pc'] = $value['url'];
            $slide_array[$key]['slide_pc_link'] = $value['description'];
            $slide_array[$key]['slide_pc_tt'] = $value['title'];
        endforeach;
    endif;
    
    if($field['slide_mb']):
        foreach($field['slide_mb'] as $key => $value):
            $slide_array[$key]['slide_mb'] = $value['url'];
        endforeach;
    endif;

    if($check == 0){
        include(locate_template("Module/Home/slider_1_0_1/css/slider_1_0_1_css.php")); 
    }
?>
    <section class="slider_1_0_1">
        <div class="slide_thumb2">
<?php
    foreach($slide_array as $key => $value):
        if($key == 0):
            echo'
                <a href="'.$value['slide_pc_link'].'" target="_blank" class="slider_1_0_1_item" rel="nofollow">
                    <picture>
                        <source srcset="'.$value['slide_mb'].'" media="(max-width: 480px)" alt="'.$value['slide_pc_tt'].'">
                        <img width="1522" height="627" src="'.$value['slide_pc'].'" alt="'.$value['slide_pc_tt'].'">
                    </picture>
                </a>
            ';
        endif;
    endforeach;
    // Get link
    echo '<script>if (window.screen.width > 700) { let img = []; let link = []; let alt = [];';

    foreach($slide_array as $key => $value):
        echo '
            img.push("'.$value['slide_pc'].'");
            link.push("'.$value['slide_pc_link'].'");
            alt.push("'.$value['slide_pc_tt'].'");
        ';
    endforeach;                        

    // add link to div
    echo '
        let pic = document.querySelector(".slider_1_0_1_item img");
        let lienKet = document.querySelector(".slider_1_0_1_item");
        let random;
        let runSlide = setInterval(function(){ 
            for(let i = 0; i < img.length; i++){
                random = Math.floor(Math.random() * img.length);
            }
            pic.setAttribute("src", img[random]);
            pic.setAttribute("alt", alt[random]);
            lienKet.setAttribute("href", link[random]);
        }, 10000);
        
        setTimeout(runSlide, 10000);
        console.log(lienKet);
    }</script>';
?> 
        </div>
        <div class="slider_scroll">
            <p>Cuộn<br> chuột</p>
            <div class="scroll-indicator"></div>
        </div>
    </section>