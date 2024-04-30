<?php get_header(); ?>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	
	

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="breadcrumb-text">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	
	<!-- single article section -->
	<?php if ( have_posts() ):
								while ( have_posts() ):the_post(); ?>
	<div class="mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="single-article-section">
						<div class="single-article-text">
						<?php if (has_post_thumbnail()) {?>
							<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo the_title();?>">
						<?php }?>
							
							<?php the_content(); ?>
						</div>

						

						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<?php endwhile; endif; ?>		
	<!-- end single article section -->

	<!-- logo carousel -->
	
	<!-- end logo carousel -->

	<!-- footer -->
	<?php get_footer(); ?>