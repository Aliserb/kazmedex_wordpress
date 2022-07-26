<?php

function carbon_lang_prefix() {
	$prefix = '';
	if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
		return $prefix;
	}
	$prefix = '_' . ICL_LANGUAGE_CODE;
	return $prefix;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'kazmedex_carbon' );
function kazmedex_carbon() {

	// баннер
	Container::make( 'post_meta', 'Баннер' )
		->show_on_template( array('page.php'))
		->add_fields( array(
			Field::make( 'image', 'banner-img', 'Изображение' )
			->set_value_type( 'url' ),
			Field::make('text', 'banner-title', 'Заголовок'),
			Field::make('text', 'banner-item-1', 'Текст')
			-> set_width(25),
			Field::make('text', 'banner-item-2', 'Текст')
			-> set_width(25),
			Field::make('text', 'banner-item-3', 'Текст')
			-> set_width(25),
			Field::make('text', 'banner-item-4', 'Текст')
			-> set_width(25),
	));
	// баннер

	// о нас
	Container::make( 'post_meta', 'О нас' )
		->show_on_template( array('page.php'))
		->add_fields( array(
			Field::make( 'image', 'about-img', 'Изображение' )
			->set_value_type( 'url' ),
			Field::make('text', 'about-title', 'Заголовок'),
			Field::make('rich_text', 'about-text', 'Текст')
	));
	// о нас

    // как работает консалтинг
	Container::make( 'post_meta', 'Как работает консалтинг' )
		->show_on_template( array('page.php'))
		->add_fields( array(
			Field::make( 'image', 'consulting-image-1', 'Изображение' )
			->set_value_type( 'url' )
			-> set_width(30),
			Field::make( 'image', 'consulting-image-2', 'Изображение' )
			->set_value_type( 'url' )
			-> set_width(30),
			Field::make( 'image', 'consulting-image-3', 'Изображение' )
			->set_value_type( 'url' )
			-> set_width(30),
			Field::make('image', 'consulting-item-icon-1', 'иконка')
			->set_value_type( 'url' ),
			Field::make('text', 'consulting-item-title-1', 'Заголовок'),
			Field::make('text', 'consulting-item-desc-1', 'Описание'),
			Field::make('image', 'consulting-item-icon-2', 'иконка')
			->set_value_type( 'url' ),
			Field::make('text', 'consulting-item-title-2', 'Заголовок'),
			Field::make('text', 'consulting-item-desc-2', 'Описание'),
			Field::make('image', 'consulting-item-icon-3', 'иконка')
			->set_value_type( 'url' ),
			Field::make('text', 'consulting-item-title-3', 'Заголовок'),
			Field::make('text', 'consulting-item-desc-3', 'Описание'),
	));
	// как работает консальтинг

	// О нас говорят
	Container::make( 'post_meta', 'О нас говорят' )
		->show_on_template( array('page.php'))
		->add_fields( array(
			Field::make('complex', 'slider', 'добавить в слайдер')
			->add_fields('text', 'Изображение', array(
				Field::make( 'image', 'slider-image', 'Изображение' )
				->set_value_type( 'url' ),
			))
	));
	// О нас говорят

	// Наши гарантии
	Container::make( 'post_meta', 'Наши гарантии' )
		->show_on_template( array('page.php'))
		->add_fields( array(
			Field::make('complex', 'warranty', 'Гарантия')
			->add_fields('text', 'Гарантия', array(
				Field::make( 'image', 'warranty-icon', 'Иконка' )
				->set_value_type( 'url' )
				-> set_width(30),
				Field::make('text', 'warranty-title', 'Заголовок')
				-> set_width(30),
				Field::make('textarea', 'warranty-desc', 'Описание гарантии')
				-> set_width(30),
			))
	));
	// Наши гарантии

	// Наши услуги
	Container::make( 'post_meta', 'Наши услуги' )
		->show_on_template( array('page.php'))
		->add_fields( array(
			Field::make( 'image', 'services-image-1', 'Изображение' )
			->set_value_type( 'url' )
			-> set_width(30),
			Field::make('textarea', 'services-desc-1', 'Описание')
			-> set_width(70),

			Field::make( 'image', 'services-image-2', 'Изображение' )
			->set_value_type( 'url' )
			-> set_width(30),
			Field::make('textarea', 'services-desc-2', 'Описание')
			-> set_width(70),

			Field::make( 'image', 'services-image-3', 'Изображение' )
			->set_value_type( 'url' )
			-> set_width(30),
			Field::make('textarea', 'services-desc-3', 'Описание')
			-> set_width(70),

			Field::make( 'image', 'services-image-4', 'Изображение' )
			->set_value_type( 'url' )
			-> set_width(30),
			Field::make('textarea', 'services-desc-4', 'Описание')
			-> set_width(70),

			Field::make( 'image', 'services-image-5', 'Изображение' )
			->set_value_type( 'url' )
			-> set_width(30),
			Field::make('textarea', 'services-desc-5', 'Описание')
			-> set_width(70),

			Field::make( 'image', 'services-image-6', 'Изображение' )
			->set_value_type( 'url' )
			-> set_width(30),
			Field::make('textarea', 'services-desc-6', 'Описание')
			-> set_width(70),

			Field::make( 'image', 'services-image-7', 'Изображение' )
			->set_value_type( 'url' )
			-> set_width(30),
			Field::make('textarea', 'services-desc-7', 'Описание')
			-> set_width(70),

			Field::make( 'image', 'services-image-8', 'Изображение' )
			->set_value_type( 'url' )
			-> set_width(30),
			Field::make('textarea', 'services-desc-8', 'Описание')
			-> set_width(70),
	));
	// Наши услуги
}

?>