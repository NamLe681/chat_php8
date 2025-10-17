<?php

// Tạo alias cho các class Swoole
if (!class_exists('swoole_table') && class_exists('Swoole\Table')) {
    class_alias('Swoole\Table', 'swoole_table');
}

if (!class_exists('swoole_http_server') && class_exists('Swoole\Http\Server')) {
    class_alias('Swoole\Http\Server', 'swoole_http_server');
}

if (!class_exists('swoole_websocket_server') && class_exists('Swoole\WebSocket\Server')) {
    class_alias('Swoole\WebSocket\Server', 'swoole_websocket_server');
}

if (!class_exists('swoole_server') && class_exists('Swoole\Server')) {
    class_alias('Swoole\Server', 'swoole_server');
}
