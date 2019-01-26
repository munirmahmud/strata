<?php
if ( !defined( 'FW' ) )
	die( 'Forbidden' );

$style = $atts[ 'portfolios_style' ];
?>

<?php if ( $style == 'portfolio-1' ): ?>
	<div class="row text-center">
		<div class="isotope-nav" data-isotope-nav="isotope">
			<ul>
				<?php
				if ( !is_tax() ) {
					$terms_filter	 = get_terms( 'fw-portfolio-category' );
					$count			 = count( $terms_filter );
					if ( $count > 0 ) {
						echo '<li><a href="#" class="active" data-filter="*">All</a></li>';

						foreach ( (array)$terms_filter as $term ) {
							?>
							<li><a href="#" data-filter=".<?php echo esc_html( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li>
							<?php
						}
					}
				}
				?>

			</ul>
		</div>
	</div>

	<div id="isotope" class="isotope">
		<?php
		$args	 = array( 'post_type' => 'fw-portfolio', 'posts_per_page' => -1 );
		$loop	 = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();

			$post_id	 = get_the_ID();
			$terms		 = wp_get_post_terms( $post_id, 'fw-portfolio-category' );
			$term_cat	 = array();

			foreach ( $terms as $term ) {
				$term_cat[] = $term->slug;
			}
			$term_cat_list	 = implode( ' ', $term_cat );
			?>


			<div class="col-sm-3 <?php echo esc_attr( $term_cat_list ); ?> isotope-item">
				<div class="grid">
					<figure class="effect-oscar">
						<?php the_post_thumbnail( array( 275, 250 ) ); ?>
						<figcaption>
							<h3><?php echo the_title(); ?></h3>
							<a class="link icon-pentagon" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
							<?php $image_url		 = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="<?php echo esc_url( $image_url ); ?>"><i class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->
		<?php endwhile; ?>
	</div>

<?php elseif ( $style == 'portfolio-2' ): ?>
	<?php
	$argss	 = array( 'post_type' => 'fw-portfolio', 'posts_per_page' => -1 );
	$loops	 = new WP_Query( $argss );
	while ( $loops->have_posts() ) : $loops->the_post();
		?>
		<div class="col-sm-3 portfolio-static-item">
			<div class="grid">
				<figure class="effect-oscar">
					<?php the_post_thumbnail( array( 275, 250 ) ); ?>
					<figcaption>
						<a class="link icon-pentagon" href="<?php the_permalink(); ?>">
							<?php esc_html_e('Read More','strata'); ?>

						</a>
						<?php $image_url	 = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>

					</figcaption>
				</figure>
				<div class="portfolio-static-desc">
					<h3><?php echo the_title(); ?></h3>
					<span>
						<?php
						$post_id	 = get_the_ID();
						$terms		 = wp_get_post_terms( $post_id, 'fw-portfolio-category' );
						$term_cat	 = array();

						foreach ( $terms as $term ) {
							$term_cat[] = $term->name;
						}
						$cat_name = implode( ' ', $term_cat );
						?>
						<a href="<?php echo the_permalink(); ?>"><?php echo esc_html( $cat_name ); ?> 
						</a>
					</span>
				</div>
			</div><!--/ grid end -->
		</div><!--/ item 1 end -->
	<?php endwhile; ?>
<?php endif; ?>

