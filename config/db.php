<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=flyideaapp.net.cn;dbname=oj',
    'username' => 'user',
    'password' => 'winthegame',
    'charset' => 'utf8',
    'on afterOpen' => function($event) {
        // $event->sender refers to the DB connection
        $event->sender->createCommand("SET NAMES UTF8")->execute();
    }
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
