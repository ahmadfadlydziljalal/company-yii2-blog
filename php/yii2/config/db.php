<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=${DB_HOST};dbname=${DB_NAME}',
    'username' => '${DB_ROOT_USER}',
    'password' => '${DB_ROOT_PASSWORD}',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
