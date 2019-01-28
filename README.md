
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

##Как активировать тему Wordpress

Необходимо отредактировать файл style.css, он находится в корне темы
Создать и разместить в корне темы скриншот темы, его размер - 1200 х 900


##Как активировать возможность выбора типов постов

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

##Как разделить файлы на логические части для подключения стилей и скриптов

Необходимо проанализировать файлы .php с челью разделить их, исходя из логическически завершенного значения. Разделение файлов выполняеся в индивыидуальном порядке.

##Как подключить стили css к теме

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


















**жирный текст**
*курсив*
***жирный курсив***



```
code block
```