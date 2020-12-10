<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BTW
 */

get_header();
?>
	
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="page-wrapper">
				<div class="page-content" style="text-align:">
					<div class="">
					<h1 class="page-title">Page Not Found</h1>
					<form action="<?php echo get_site_url();?>" method="post">
                        <label for="search"> 
                        </label>
                            <input type="submit" class="btn custom-btn" id=”searchsubmit” value="Back to HOME"/>
                        </form>
					</div>
					

				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
