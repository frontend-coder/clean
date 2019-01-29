
## Посадка бесплатного HTML шаблона на CMS WordPress

Выполняю ручную посадку бесплатного минималистичного шаблона Clean, испрользую базовый стартовый шаблон, его сгенерировал с помощью сервиса
underscores.me, и c использованием фрейворка Unyson.

Clean Free Website Template HTML - директория, в ней размещен HTML шаблон, который будет посажен на CMS WordPress
clean - в этот каталог будет заливаться тема WordPress в процессе посадки

Этот шаблон станет примером моих возможностей в сфере посадки и верстки минималистичных шаблонов для простых сайтов, работающих на базе CMS WordPress.

## Связаться по вопросам верстки:

* [facebook](https://www.facebook.com/frontendercode)
* [github](https://github.com/frontend-coder)
* [skype:webrabcom](href="skype:webrabcom")
* [telegram](https://t.me/frontendcoder)

## Портфолио
* [Портфолио](https://frontend-coder.github.io)


# Краткая инструкция по посадке простого HTML шаблона на WordPress

## Как активировать тему Wordpress

Необходимо отредактировать файл style.css, он находится в корне темы
Создать и разместить в корне темы скриншот темы, его размер - 1200 х 900


## Как активировать возможность выбора типов постов

Вставьте нижеразмещенный код в файл function.php следующий код

```
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video' ) );
```
Типы постов, которые поддерживаются WordPress

```
aside - Typically styled without a title. Similar to a Facebook note update.
gallery - A gallery of images. Post will likely contain a gallery shortcode and will have image attachments.
link - A link to another site. Themes may wish to use the first <a href=””> tag in the post content as the external link for that post. An alternative approach could be if the post consists only of a URL, then that will be the URL and the title (post_title) will be the name attached to the anchor for it.
image - A single image. The first <img /> tag in the post could be considered the image. Alternatively, if the post consists only of a URL, that will be the image URL and the title of the post (post_title) will be the title attribute for the image.
quote - A quotation. Probably will contain a blockquote holding the quote content. Alternatively, the quote may be just the content, with the source/author being the title.
status - A short status update, similar to a Twitter status update.
video - A single video or video playlist. The first <video /> tag or object/embed in the post content could be considered the video. Alternatively, if the post consists only of a URL, that will be the video URL. May also contain the video as an attachment to the post, if video support is enabled on the blog (like via a plugin).
audio - An audio file or playlist. Could be used for Podcasting.
chat - A chat transcript, like so:

```

## Как разделить файлы на логические части для подключения стилей и скриптов

Необходимо проанализировать файлы .php с челью разделить их, исходя из логическически завершенного значения. Разделение файлов выполняеся в индивыидуальном порядке.

## Как подключить стили css к теме

### Код в functions.php

```
function clean_scripts() {
wp_enqueue_style( 'clean-style', get_stylesheet_uri() );
wp_enqueue_style( 'clean-google-font1', 'http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' );
wp_enqueue_style( 'clean-google-font2', 'http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,500' );
wp_enqueue_style( 'clean-animate-style', get_template_directory_uri() . '/assets/css/animate.css' );
wp_enqueue_style( 'clean-icomoon-style', get_template_directory_uri() . '/assets/css/icomoon.css' );
wp_enqueue_style( 'clean-simplelineicons-style', get_template_directory_uri() . '/assets/css/simple-line-icons.css' );
wp_enqueue_style( 'clean-oun-style', get_template_directory_uri() . '/assets/css/style.css' );

wp_enqueue_script( 'clean-modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', array(), '', false );

wp_deregister_script( 'jquery');
wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(),'',true);
wp_enqueue_script( 'jquery');

wp_enqueue_script( 'clean-easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), '', true );
wp_enqueue_script( 'clean-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );
wp_enqueue_script( 'clean-waypoints-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), '', true );
wp_enqueue_script( 'clean-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'clean_scripts' );
```

```
функция function clean_scripts()
вешается на событие, поэтому нужно быть внимательным
add_action( 'wp_enqueue_scripts', 'clean_scripts' );
```

### Код в файл header.php

```
 <?php wp_head(); ?>
</head>
```

### Код в файл footer.php

```
<?php wp_footer(); ?>
</body>
```
### Код в файл index.php

```
<?php get_header(); ?>

<?php get_footer(); ?>
```

Все подключение стилей и скриптов в ручной верстке необходимо удалить.

## Подключение и активация меню в теме

### Активация меню в файле index.php

Код верстки в  index.php

```
<ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="index.html"><span>Home <span class="border"></span></span></a></li>
 		<li><a href="right-sidebar.html"><span>Right Sidebar <span class="border"></span></span></a></li>
			<li><a href="left-sidebar.html"><span>Left Sidebar <span class="border"></span></span></a></li>
</ul>
```

заменить на следующий:

```
<?php
	wp_nav_menu( array(
	'theme_location' => 'menu-1',
	'menu_id'        => '',
	'menu_class'        => 'nav navbar-nav navbar-right',
	));
?>
```

### Активация меню в файле functions.php

```
// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
'menu-1' => esc_html__( 'Primary', 'clean' ),
));
```

### Стилизация активного пункта меню

Необходимо в css повесить стили оформления активного пункта меню на класс .current-menu-item

Пример

```
#fh5co-header > .navbar li.current-menu-item a,
#fh5co-header > .navbar li.active a {
  background: none !important;
  color: #e32929;
}
```

Если идет ручная верстка необходимо предусмотеть изначально появление класса .current-menu-item и правильно его оформить

```
<ul class="nav navbar-nav navbar-right">
	<li class="current-menu-item"><a href="index.html"> Главная </a> </li>
</ul>
```

## Вывод постов из категории на главной страницы

### Как настроить цикл вывода постов на главаной страницы сайта

Создать страницу front-page.php на основе index.php. Цикл вывода цитат

Если это главная страница сайта и существует в кастомайзере параметр clean_home_category,
выбор рубрики записей, из которой будет выводится посты, то выполнять вывод постов на главную страницу сайта.

Взять записи из категории clean_home_category и вывести:
взять все существующие миниатюры если их нет грузить изображение из указаного источника.
если нет миниатюры нужно грузить изображения из указаного источника, который записуется в переменную $img_url
при желании адрес можно вводить через кастомайзер

```
<?php if( is_front_page() && get_theme_mod('clean_home_category') ): ?>

   <div id="fh5co-portfolio">

        <?php $query = new WP_Query( array(
            'category_name' => get_theme_mod('clean_home_category'),
        ) ); ?>

        <?php if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) :
         $query->the_post(); ?>
            <?php
            if( has_post_thumbnail() ){
                $img_url = get_the_post_thumbnail_url();
            }else{
                $img_url = 'https://picsum.photos/1280/864';
            }
            ?>

            <div class="fh5co-portfolio-item <?php if( $i % 2 == 0 ) echo 'fh5co-img-right'; ?>">
                <div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php echo $img_url; ?>);"></div>
                <div class="fh5co-portfolio-description">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(''); ?>
                    <p><a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Читать далее', 'clean'); ?></a></p>
                </div>
            </div>

        <?php $i++; endwhile; ?>
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>
   <?php endif; ?>
        <!-- end is_front_page() && get_theme_mod('clean_home_category') ): -->
```

### Как создать поле ввода через кастомайзер

Открыть файл inc/customizer.php

```
// Theme Custom Customizer
    $wp_customize->add_section('clean_theme_options', array(
        'title' => __('Вывод постов на главной странице', 'clean'),
        'priority' => 10,
    ));
    $wp_customize->add_setting('clean_home_category', array(
        'default' => '',
        //'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
        'clean_home_category',
        array(
            'label' => __('Отображение постов категории на главной странице', 'clean'),
            'section' => 'clean_theme_options',
            'type' => 'text',
        )
    );
// End Theme Custom Customizer
```

Чтобы вывести записанное в поле ввода в кастомайзере с помощью переменной clean_home_category

```
<?php $query = new WP_Query( array(
            'category_name' => get_theme_mod('clean_home_category'),
        ) ); ?>
```

### Вывести текст через кастомайзер

```
// Theme Custom Customizer
    $wp_customize->add_section('clean_theme_descr', array(
        'title' => __('Вывод описания сайта в шапке сайта', 'clean'),
        'priority' => 9,
    ));
    $wp_customize->add_setting('clean_descr_page', array(
        'default' => '',
        //'transport'=>'postMessage',
    ));
    $wp_customize->add_control(
        'clean_descr_page',
        array(
            'label' => __('Введите описание сайта для вывода в шапке сайта', 'clean'),
            'section' => 'clean_theme_descr',
            'type' => 'text',
        )
    );
// End Theme Custom Customizer
```

### Вывести текст на сайте

Чтобы введенный текст в кастомайзере вывести на сайт нужно вставить такой код в нужное место файла

```
	<p class=""><?php echo get_theme_mod('clean_descr_page'); ?></p>
```


## Cоздание страницы категорий

Создать файл category.php на основе html-шаблона. Его необходимо посадить на движок. Если используется underscores,
возможно использовать файл archive.php.

Самый важный цикл
```
    <div id="fh5co-portfolio">

        <?php if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post(); ?>

            <?php get_template_part('template-parts/content', 'preview'); ?>

            <?php $i++; endwhile; ?>
            <?php the_posts_pagination( array(
                'end_size' => 1,
                'mid_size' => 1,
                'type' => 'list',
            ) ); ?>
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
```

Шаблон вывода блока с контектом нужно настраивать в отдельном каталоге template-parts.
Создать файл content-preview.php, поместить в него кусок кода, который отвечает за вывод одного блока, который
и будет становиться частью цикла: вывод миниатюры, заголовка поста. цитаты или контента, ссылки читать далее.

```
  <?php get_template_part('template-parts/content', 'preview'); ?>
```
## Cоздание страницы одиночного поста

Взять за основу зазметку одиночной записи, он обычно имеет название single.html. На основе страницы
category.php и single.html создать файл single.php, из первого взять подключение шапки и подвала,
из другого файла взять разметку контентной части поста и боковой панели.

Закомитить блок кода для сайдбара, на его месте установить код подключения sidebar

```
<?php get_sidebar(); ?>
```

Закомитить блок с кодом, который отвечает за вывод текста поста. Вместо кода поставить подобно этому:

```
     <?php  while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('template-parts/content', get_post_format()); ?>
        <?php endwhile; ?>

```

Стандартный тип поста выводится с помощью шаблона template-parts/content.php

```
Стандартный             -  content.php
Заметка                 -  content-aside.php
Галерея                 -  content-gallery.php
Ссылка                  -  content-link.php
Изображение             -  content-image.php
Цитата                  -  content-quote.php
Статус                  -  content-status.php
Видео                   -  content-video.php
Аудио                   -  content-audio.php
Чат                     -  content-chat.php

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video', 'quote' ) );
```
## Подключение виджетов в сайдбаре

Регистрация виджета для блога

```
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'clean' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'clean' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
```

Подключение самого виджета в любом файле темы

```
<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
```














**жирный текст**
*курсив*
***жирный курсив***



```
code block
```