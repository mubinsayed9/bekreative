<?php

$priority = 0;

new \Kirki\Field\Typography(
	[
		'settings'    => 'primary_font',
		'label'       => esc_html__( 'Primary Font', 'nicex' ),
		'section'     => 'fonts_setting',
		'priority' => $priority++,
		'default'     => [
			'font-family'     => 'Open Sans',
			'variant'         => 'regular',
		],
		'output'      => [
			[
				'choice' => 'font-family',
				'element' => ':root',
				'property' => '--font-primary',
				'context' => array( 'editor', 'front' ),
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'secondary_font',
		'label'       => esc_html__( 'Secondary Font', 'nicex' ),
		'section'     => 'fonts_setting',
		'priority' => $priority++,
		'default'     => [
			'font-family'     => 'Assistant',
			'subsets' => [ 'latin' ],
		],
		'output'      => [
			[
				'choice' => 'font-family',
				'element' => ':root',
				'property' => '--font-heading',
				'context' => array( 'editor', 'front' ),
			],
		],
	]
);