<?php
/**
 * Copyright (c) 2015 Xavier Beurois
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 */

namespace OCA\ocDownloader\AppInfo;

$Application = new Application();
$Application->registerRoutes($this, array(
    'routes' => [
        // IndexController
        ['name' => 'index#add', 'url' => '/', 'verb' => 'GET'],
        ['name' => 'index#add', 'url' => '/add', 'verb' => 'GET'],
        ['name' => 'index#actives', 'url' => '/actives', 'verb' => 'GET'],
        ['name' => 'index#waitings', 'url' => '/waitings', 'verb' => 'GET'],
        ['name' => 'index#stopped', 'url' => '/stopped', 'verb' => 'GET'],
        ['name' => 'index#history', 'url' => '/history', 'verb' => 'GET'],
        
        // HttpDownloaderController
        ['name' => 'httpdownloader#add', 'url' => '/httpdownloaderadd', 'verb' => 'POST'],
        
        // DownloaderQueueController
        ['name' => 'downloaderqueue#get', 'url' => '/downloadergetqueue', 'verb' => 'POST']
    ]
));