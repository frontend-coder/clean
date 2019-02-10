	</div>
	<footer id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
<?php if(carbon_get_theme_option('footer_copyright')){?>
					<p>&copy; <?php echo carbon_get_theme_option('footer_copyright'); ?> <br>
  <?php } ?>
						Создано
<?php if(carbon_get_theme_option('footer_copyright_linka')){?>
						<a href="<?php echo carbon_get_theme_option('footer_copyright_linka'); ?>" target="_blank">
 <?php } ?>
<?php if(carbon_get_theme_option('footer_copyright_linkancor')){?>
					<?php echo carbon_get_theme_option('footer_copyright_linkancor'); ?>
<?php } ?>
					</a></p>
				</div>
			</div>
		</div>
	</footer>
 <?php wp_footer(); ?>
	</body>
</html>