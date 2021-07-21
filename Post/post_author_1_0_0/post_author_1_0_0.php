<?php
	include(locate_template("Module_v2/Post/post_author_1_0_0/css/post_author_1_0_0_css.php"));
?>

<div class="post_author_1_0_0">
    <ul class="post_author_1_0_0__navg">
        <li class="post_author_1_0_0__Date">
            <div class="post_author_1_0_0__iconDate"></div>
            <p><?php echo get_the_time('d/m/Y') ?></p>
        </li>
        <li class="post_author_1_0_0__Person">
            <div class="symp"> *</div>
            <div class="post_author_1_0_0__iconPerson"></div>
            <p>Tác giả:<a href="#"> <?php echo get_the_author() ?></a></p>
        </li>
        <li class="post_author_1_0_0__Doctor">
            <div class="symp"> *</div>
            <div class="post_author_1_0_0__iconDoctor"></div>
            <p>Tham vấn y khoa: <a href="#"> Chuyên gia Nha Khoa Paris</a></p>
        </li>
        <li class="post_author_1_0_0__View">
            <div class="symp"> *</div>
            <div class="post_author_1_0_0__iconview"></div>
            <?php
                $pageview = get_post_meta(get_the_ID(),'pageview',true);
                if($pageview =="") $pageview ="0";
                $pageview = (int)$pageview +1;
                update_post_meta( get_the_ID(), 'pageview', $pageview );
            ?>
            <p><?php echo $pageview ?> lượt xem</p>
        </li>
    </ul>
</div>