<?php
/**
 * @Author: Administrator
 * @Date:   2016-04-18 20:52:22
 * @Last Modified by:   Administrator
 * @Last Modified time: 2016-04-18 20:58:17
 */
require "./vendor/autoload.php";

$app_id = '198770';
$app_key = '7f7428767e9ab95642f1';
$app_secret = '9f852d1fd7076144415d';
$options = [
    'encrypted' => true
];
$pusher = new Pusher( $app_key, $app_secret, $app_id );

$data['message'] = 'hello world';
$pusher->trigger('test_channel', 'my_event', $data);
