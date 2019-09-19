<?php get_header(); ?>
<?php $int = 1?>
<section id="banner" class="bg-img" data-bg="<?php echo get_stylesheet_directory_uri().'/images/banner.jpg'?>">
    <div class="inner">
        <header>
            <h1><?php echo get_bloginfo(description);?></h1>
        </header>
    </div>
    <a href="#<?php echo $int?>" class="more">Learn More</a>
</section>


<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post();?>
        <section id="<?php echo $int?>" class="wrapper post bg-img" data-bg="<?php echo the_post_thumbnail_url()?>">
            <div class="inner">
                <article class="box">
                    <header>
                        <h2><?php echo the_title(); ?></h2>
                        <p><?php echo the_time('j F Y');?></p>
                    </header>
                    <div class="content">
                        <p>
                            <?php echo the_content()?>
                        </p>
                    </div>
                    <footer>
                        <a href="<?php echo the_permalink()?>" class="button alt">Learn More</a>
                    </footer>
                </article>
            </div>
            <?php 
                $count_posts = wp_count_posts();
                $count = $count_posts->publish;
                if($count == $int){
                   echo '';
                }else{
                    $int++;
                ?>
                 <a href="#<?php echo $int ?>" class="more">Learn More</a>
               <?php 
                    };
                ?>
            
        </section>
    <?php endwhile; ?>
<?php endif;?>
<?php get_footer(); ?>