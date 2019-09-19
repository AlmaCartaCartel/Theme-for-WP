<?php
/*
* Template name: Простая страница
*/
?>
<?php get_header(); ?>
            <section id="post" class="wrapper bg-img" data-bg="<?php echo the_post_thumbnail_url()?>">
				<div class="inner">
					<article class="box">
						<header>
							<h2><?php echo $post->post_title;?></h2>
							<p><?php echo $post->post_date;?></p>
						</header>
						<div class="content">
                            <?php echo $post->post_content;?>
                        </div>
					</article>
				</div>
            </section>
    <?php get_footer(); ?>