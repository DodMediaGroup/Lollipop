<?php

// Funcion para activar imagenes destacadas
add_theme_support('post-thumbnails');

// Funcion para cambiar numero de letras mostradas en el extracto del post
function longitud_excerpt($length) {
    return 25;
}
add_filter('excerpt_length', 'longitud_excerpt');

//Funcion para añadir form contact
function my_form_contact(){
	register_sidebar(
		array(
			'id'=>'form-contact',
			'name'=>'Formulario de contacto',
			'description'=>'Sidebar donde colocar el formulario de contacto',
			'before_widget'=>'',
			'after_widget'=>'',
		)
	);
}
add_action('widgets_init', 'my_form_contact');
?>