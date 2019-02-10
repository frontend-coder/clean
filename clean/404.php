<?php
get_header();
?>

 <div id="fh5co-portfolio fh5co-error">
     <div class="container">
       <div class="row">
      <h1 class="page-title"><?php esc_html_e( 'Извините! Запрошенной страницы еще не размещено.', 'clean' ); ?></h1>
                   <?php
                     get_search_form();
                     the_widget( 'WP_Widget_Recent_Posts' );
                    ?>
                       <div class="widget widget_categories">
                           <h2 class="widget-title"><?php esc_html_e( 'Самые популярные рубрики', 'clean' ); ?></h2>
                           <ul>
                               <?php
                               wp_list_categories( array(
                                   'orderby'    => 'count',
                                   'order'      => 'DESC',
                                   'show_count' => 1,
                                   'title_li'   => '',
                                   'number'     => 10,
                               ) );
                               ?>
                           </ul>
                       </div><!-- .widget -->


    </div>
   </div>
</div>
<?php
get_footer(); ?>