<?php

use php8fw\Router;

Router::add('^admin/?$', ['controller' => 'Main', 'action' => 'index', 'admin_prefix' => 'admin']);
Router::add('^admin/(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['admin_prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
//набор символов с ключем контроллер и экшен
Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');

