<?php
/**
 * @package WordPress
 * @subpackage Clean
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e( 'Эта статья защищена паролем. Введите пароль, чтобы посмотреть комментарии.', 'clean' ); ?></p>

	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments()) : ?>



<div class="comments-title" style="float:right;"><?php comments_number( __( 'Нет комментариев', 'clean' ),  __( 'Один комментарий', 'clean' ), __( '% Комментариев', 'clean' ) );?> </div>
<div style="clear:both"></div>
	<ol class="commentlist" itemscope="" itemtype="http://schema.org/UserComments">
	<?php wp_list_comments( array(
			'reply_text' => __( 'Ответить', 'clean' ),
			'callback' => 'inspiration_comment'
		)); ?>
	</ol>
	<div class="navigation">
		<div class="alignleftcom"><?php previous_comments_link() ?></div>
		<div class="alignrightcom"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
	<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
<div id="respond">
	<div id="postcomment" class="comments-title"><?php comment_form_title( __( 'Оставьте свой комментарий или вопрос', 'inspiration' ), __( 'Оставьте комментарий к %s', 'inspiration' ) ); ?></div>
<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p class="logged-in"><?php _e( 'Вы должны', 'clean' ); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e( 'войти', 'clean' ); ?>  </a> <?php _e( 'чтобы комментировать статью.', 'clean' ); ?>
</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
<p class="logged-in"><?php _e( 'Вы вошли как', 'clean' ); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e( 'Выйти из этого аккаунта', 'clean' ); ?>"><?php _e( 'Выйти', 'clean' ); ?> &raquo;</a></p>
<?php else : ?>


<div>
<label class="comment-field" for="author"><small><?php _e( 'Имя', 'clean' ); ?> <?php if ($req) echo __( '(обязательно)', 'clean' ); ?></small></label>
	<input class="commenting_input" type="text" name="author" id="author"  value="<?php echo $comment_author; ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
</div>

<div>
<label for="email" class="comment-field"><small><?php _e( 'Емаил (не будет опубликован)', 'clean' ); ?> <?php if ($req) echo __( '(обязательно)', 'clean' ); ?></small></label>
<input class="commenting_input" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
</div>

<div>
<label class="comment-field" for="url"><small><?php _e( 'Адрес Вашего сайта', 'clean' ); ?></small></label>
<input class="commenting_input" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" />
</div>

<?php endif; ?>
<div>

<div>
	<label for="comment" class="comment-field">Комментарий</label><textarea class="commenting_textarea" name="comment" id="comment" rows="4" tabindex="4" ></textarea></div>
</div>

<div>
	<input class="header_button" name="submit" type="submit" id="submit" tabindex="5" value="<?php _e( 'Добавить комментарий', 'clean' ); ?>" />
<?php comment_id_fields(); ?>
</div>

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>