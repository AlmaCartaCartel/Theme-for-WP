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
						<footer>
							<ul class="actions">
								<li>
                                    <?php $previous_post = get_adjacent_post();?>
                                    <a href="<?php echo get_permalink( $previous_post ); ?>" class="button alt icon fa-chevron-left">
                                        <span class="label">Previous</span>
                                    </a>
                                </li>
								<li>
                                    <?php $next_post = get_adjacent_post( true, '', false);?>
                                    <a href="<?php echo get_permalink( $next_post ); ?>" class="button alt icon fa-chevron-right">
                                        <span class="label">Next</span>
                                    </a>
                                </li>
							</ul>
						</footer>
					</article>
				</div>
            </section>
    <?php get_footer(); ?>