<?php 

add_action( 'wp_enqueue_scripts', function () {
	// подключаем файл стилей темы


	wp_enqueue_style( 'libs', get_template_directory_uri() . '/assets/css/libs.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css' );
	wp_enqueue_style( 'media-styles', get_template_directory_uri() . '/assets/css/media.min.css' );

    // <script src="./js/libs.min.js"></script>
    // <script src="./js/main.js"></script>

	// подключаем js файл темы
	// wp_deregister_script( 'jquery-core' );
	// wp_register_script( 'jquery-core', get_template_directory_uri() . '/assets/js/libs.min.js', true);
	// wp_enqueue_script( 'jquery' , true);

	wp_enqueue_script( 'libs', get_template_directory_uri() .'/assets/js/libs.min.js', array(), '1.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array('libs'), '1.0', true );
});


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}

?>