<?php
    include(locate_template("Module/Post/post_1_0_0/css/post_1_0_0_css.php"));
?>

<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <!-- Breadcrumb -->
            <?php get_template_part('Module/Post/breadcrumb_1_0_0/breadcrumb_1_0_0'); ?>
            
            <!-- Post Main -->
            <div class="post_1_0_0">		
                    <!-- Banner quang cao -->
                    <?php get_template_part('Module/module_advPost'); ?>
                    
                    <h1 class="post_1_0_0__title"><?php the_title(); ?></h1>

                    <?php echo do_shortcode("[post_social_1_0_0]") ?>
                    <?php include(locate_template('Module/Post/post_author_1_0_0/post_author_1_0_0.php')); ?>
                    <?php 
                        $sapo = get_field('sapo',$post->ID);
                        if($sapo != ''){
                        echo '<div class="sapo">'.$sapo.'</div>';
                        }
                    ?>

                    <div class="post_1_0_0__detail scroll_check">
                        <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>

                    <br/>
                    <?php include(locate_template('options/comment/myComment.php')); ?>

                    <!-- Banner quang cao -->
                    <?php get_template_part('Module/module_advPost'); ?>

                    <!-- Form đăng ký -->
                    <?php include(locate_template('Module/Post/regist_1_0_0/regist_1_0_0.php')); ?>
                    
                    <?php get_template_part('Module/Post/post_new_other_2_0_0/post_new_other_2_0_0'); ?>
            </div>


        </div>
        <div class="col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>


