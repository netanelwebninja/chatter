<?php
/**
 * Chatter configuration
 */

return [
	'api' => [
		'route_prefix' => 'chatter',

		'route_middleware' => ''
	],

	'chat' => [
		'group_max_users' => 100
	],

	'realtime' => [
		'enable' => true,
		'pusher' => [
			'key' => env('PUSHER_APP_KEY', ''),
			'secret' => env('PUSHER_APP_SECRET', ''),
			'app_id' => env('PUSHER_APP_ID', ''),
			'options' => [
				'cluster' => env('PUSHER_CLUSTER', 'eu'),
				'encrypted' => true
			]
		]
	]
];