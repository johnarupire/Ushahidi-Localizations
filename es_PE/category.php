<?php
	$lang = array(
	'category_color' => array(
		'length' => 'El campo color debe tener 6 caracteres de largo.',
		'required' => 'El campo color es obligatorio.',
	),
	'category_description' => array(
		'required' => 'El campo descripción es obligatorio.',
	),
	'category_image' => array(
		'size' => 'Por favor asegúrese que los tamaños de carga de imágenes están limitados a 50KB.',
		'type' => 'El campo imagen parece no contener una imagen válida.Los únicos formatos aceptados son .jpg, .png y .gif.',
		'valid' => 'El campo imagen parece no contener un archivo válido',
	),
	'category_title' => array(
		'length' => 'El campo título debe tener por lo menos 3 y no mas de 80 caracteres de largo.',
		'required' => 'El campo título es obligatorio.',
	),
	'parent_id' => array(
		'exists' => 'La categoría padre no existe.',
		'numeric' => 'El campo de categoría supeorior debe ser un número.',
		'required' => 'El campo de categoría superior es obligatorio.',
		'same' => 'La categoría y la categoría superior no pueden ser iguales.',
	));
?>
