<?php
return array(
    'router' => array(
        'routes' => array(
            'book' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/book[/][:action][/:id]',
					'constraints' => array(
						'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
						'id' => '[0-9]+',
					),
                    'defaults' => array(
                        'controller' => 'BookList\Controller\Book',
                        'action'     => 'index',
                    ),
                ),
            ),
		),
	),
    'controllers' => array(
        'invokables' => array(
            'BookList\Controller\Book' => 'BookList\Controller\BookController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

);
