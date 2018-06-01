<?php
/**
 * Template Name: Clean Page
 * This template will only display the content you entered in the page editor
 */
?>
 
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
	<?php
			$mypod = pods('selecttimes');
            echo $mypod->display( 'user1' );
		?>
			<article>
				<?php
					//Output template of the same name as Pod, if such a template exists.
					$temp = $pods->template($pod_name);
					if ( isset($temp)  ) {
						echo $temp;
					}
				?>
			</article><!-- #post -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php wp_footer(); ?>
</body>
</html>
