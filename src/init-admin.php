<?php

use Brisum\Lib\ObjectManager;

ObjectManager::getInstance()->create(
    'Brisum\Wordpress\ThemeOptions\Admin\Page\OptionsManager',
    [
        'assetsDir' => THEME_DIR . 'vendor/brisum/wordpress-module-theme-options/src/assets/',
        'assetsUrl' => THEME_URI . '/vendor/brisum/wordpress-module-theme-options/src/assets/',
    ]
);
