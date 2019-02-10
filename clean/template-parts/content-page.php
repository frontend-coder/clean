<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Clean
 */

?>
<?php
if( has_post_thumbnail() ){
the_post_thumbnail();
}
?>
<img src="<?php echo  $img_url; ?>" alt="<?php echo $imgAlt; ?>">


								 <?php the_content(); ?>