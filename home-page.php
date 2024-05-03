<?php
/**
 * Template Name: Home page
 * The main template file
 **/
get_header(); ?>

<!-- home page slider -->
<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
					<?php
						// Loop through each slider page
						for ( $i = 1; $i <= 3; $i ++ ) {
							// Get slider page settings
							$page_id     = get_theme_mod( 'set_slider_page' . $i );
							$button_text = get_theme_mod( 'set_slider_button_text' . $i );
							$button_url  = get_theme_mod( 'set_slider_url' . $i );

							// Output carousel item
							$active_class = $i === 1 ? 'active' : ''; // Add 'active' class to the first item
							?>
                            <div class="carousel-item <?php echo $active_class; ?>">
								<?php if ( $page_id ) : ?>

									<?php echo get_the_post_thumbnail( $page_id, 'large', array(
										'class' => 'single-homepage-slider',
										'alt'   => get_the_title( $page_id )
									) ); ?>

									<?php if ( $button_text && $button_url ) : ?>
                                        <div class="carousel-caption">
                                            <h5><?php echo esc_html( get_the_title( $page_id ) ); ?></h5>
                                            <p><?php echo esc_html( get_the_excerpt( $page_id ) ); ?></p>
                                            <a href="<?php echo esc_url( $button_url ); ?>"
                                               class="btn btn-primary"><?php echo esc_html( $button_text ); ?></a>
                                        </div>
									<?php endif; ?>
								<?php endif; ?>
                            </div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<section class="slider">

                <div id="mainSlider" class="carousel slide mb-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
						<?php
						// Loop through each slider page
						for ( $i = 1; $i <= 3; $i ++ ) {
							// Get slider page settings
							$page_id     = get_theme_mod( 'set_slider_page' . $i );
							$button_text = get_theme_mod( 'set_slider_button_text' . $i );
							$button_url  = get_theme_mod( 'set_slider_url' . $i );

							// Output carousel item
							$active_class = $i === 1 ? 'active' : ''; // Add 'active' class to the first item
							?>
                            <div class="carousel-item <?php echo $active_class; ?>">
								<?php if ( $page_id ) : ?>

									<?php echo get_the_post_thumbnail( $page_id, 'large', array(
										'class' => 'single-homepage-slider',
										'alt'   => get_the_title( $page_id )
									) ); ?>

									<?php if ( $button_text && $button_url ) : ?>
                                        <div class="carousel-caption">
                                            <h5><?php echo esc_html( get_the_title( $page_id ) ); ?></h5>
                                            <p><?php echo esc_html( get_the_excerpt( $page_id ) ); ?></p>
                                            <a href="<?php echo esc_url( $button_url ); ?>"
                                               class="btn btn-primary"><?php echo esc_html( $button_text ); ?></a>
                                        </div>
									<?php endif; ?>
								<?php endif; ?>
                            </div>
						<?php } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"><?php _e( 'Previous', 'mexclusive21' ); ?></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#mainSlider"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"><?php _e( 'Next', 'mexclusive21' ); ?></span>
                    </button>
                </div>
            </section>
	</div>
</div>
	<!-- end home page slider -->
	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<?php
						$popular_limit  = get_theme_mod( 'set_popular_max_num', 4 );
						$popular_col    = get_theme_mod( 'set_popular_max_col', 4 );
						$arrivals_limit = get_theme_mod( 'set_new_arrivals_max_num', 4 );
						$arrivals_col   = get_theme_mod( 'set_new_arrivals_max_col', 4 );

						?>
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text"><?php _e('Our', 'mexclusive21');?></span><?php _e(' Products', 'mexclusive21'); ?></h3>
						<p><?php echo wp_kses_post(get_theme_mod('set_shop_descripton', __('This is sample desctiption for Our products in homepage.', 'mexclusive21'))); ?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="text-center">
					<div class="single-product-itetm">
					<?php echo do_shortcode( '[products limit=" ' . $popular_limit . ' " columns="' . $popular_col . '" orderby="popularity"]' ); ?>
					</div>
				</div>
				<!--<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>-->
				<!--<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>-->
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- Deal of the week -->
	<?php if ( class_exists( 'WooCommerce' ) ): ?>
				<?php
				$showdeal = get_theme_mod( 'set_deal_show', 0 );
				$deal     = get_theme_mod( 'set_deal' );
				$currency = get_woocommerce_currency_symbol();
				$regular  = get_post_meta( $deal, '_regular_price', 'true' );
				$sale     = get_post_meta( $deal, '_sale_price', 'true' );

				if ( $showdeal == 1 && ( ! empty( $deal ) ) ) :
					$discount_percentage = absint( 100 - ( $sale / $regular ) * 100 );
					?>
	<section class="cart-banner pt-100 pb-100">
    <div class="container">
        <div class="row clearfix">
            <!-- Image Column -->
            <div class="image-column col-lg-6">
                <div class="image">
                    <div class="price-box">
                      
                        <div class="inner-price bg-primary">
                        
                            <span class="price">
                                <strong><?php echo '- ' . $discount_percentage . '%'; ?></strong> <br> <?php _e( 'now!', 'mexclusive2.1' ); ?> 
                            </span>
                        </div>
                    </div>
                    <?php echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid rounded' ) ); ?>
                </div>
            </div>

            <div class="content-column col-lg-6">
                <h3><span class="orange-text">Deal</span> of the week</h3>
                <h4>Hikan Strawberry</h4>
                <div class="text">Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique! Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit voluptatem accusantium</div>
                <!-- Countdown Timer -->
                <div class="time-counter">
                    <div class="time-countdown clearfix" data-countdown="2020/2/01">
                        <div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div>
                        <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>
                        <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>
                        <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div>
                    </div>
                </div>
                <a href="cart.html" class="cart-btn mt-3 bg-primary"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>
    <!-- end cart banner section -->

	
	

	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<!--<h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>-->
			
<?php

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',
    'meta_key'       => '_price'
);

$products_query = new WP_Query( $args );

if ( $products_query->have_posts() ) :
    $lowest_price_product = $products_query->posts[0];
    $lowest_price = get_post_meta( $lowest_price_product->ID, '_price', true );

    // Loop through each product to find the one with the lowest price
    while ( $products_query->have_posts() ) : $products_query->the_post();
        $product_price = get_post_meta( get_the_ID(), '_price', true );
        if ( $product_price < $lowest_price ) {
            $lowest_price = $product_price;
            $lowest_price_product = $post;
        }
    endwhile;

    // Get the product category for the lowest price product
    $product_categories = wp_get_post_terms( $lowest_price_product->ID, 'product_cat' );

    if ( ! empty( $product_categories ) ) {
        // Display category name with lowest price products
        echo '<h3>' . __('Category with', 'mexclusive21') . ' <span class="orange-text">' . __('lowest price...', 'mexclusive21') . '</span></h3> ' . $product_categories[0]->name;
    }
endif;

// Restore original post data
wp_reset_postdata();


?>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">    
                    <h3><span class="orange-text">Our</span> News</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'order'          => 'DESC',
                'orderby'        => 'date'
            );

            $latest_posts = new WP_Query( $args );

            if ( $latest_posts->have_posts() ) :
                while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="<?php the_permalink(); ?>"><div class="latest-news-bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div></a>
                            <div class="news-text-box">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> <?php the_author(); ?></span>
                                    <span class="date"><i class="fas fa-calendar"></i> <?php echo get_the_date(); ?></span>
                                    <span class="reading-time"><i class="fa fa-clock"></i> <?php display_reading_time();?></span>
                                    <i class="fa fa-eye"></i> 
                    <?php
                        $views = mexclusive2_display_post_views();
                        printf(
                            $views );
                    ?>
                                </p>
                                <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="boxed-btn bg-primary"><?php _e('View More', 'mexclusive21');?></a>
            </div>
        </div>
    </div>
</div>

	<!-- end latest news -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 10, // Change this number to adjust the number of posts to display
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                            <div class="single-logo-item">
                                <?php
                                // Check if the post has a featured image
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumbnail');
                                }
                                the_title();
                                ?>
                            </div>
                            </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

	<?php get_footer(); ?>
	<!-- end logo carousel -->
