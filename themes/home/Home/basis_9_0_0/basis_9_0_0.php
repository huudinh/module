<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Home/basis_9_0_0'; 
    if($check == 0){
        include(locate_template("Module/Home/basis_9_0_0/css/basis_9_0_0_css.php"));           
    }
?> 

<section class="basis_9_0_0 load">
    <div class="container">
        <div class="basis_9_0_0__box">
        <?php 
        $data=explode("\n",$field['title2']);
            echo'
            <div class="basis_9_0_0__title">
                <p class="basis_9_0_0_tt"> '.$data[0].'</p>
                <p class="basis_9_0_0_cn">'.$data[1].'</p>
                <p class="basis_9_0_0_tp">
                '.$data[2].'</p>
            </div>';
        ?>
        </div>
    </div>
</section>

