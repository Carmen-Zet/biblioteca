<?php

namespace Config;

use CodeIgniter\Database\Config;

class Database extends Config
{
    public \$default = [
        'DSN'      => '',
        'hostname' => 'localhost',        // Cambiar por el host de tu base de datos
        'username' => 'root',       // Cambiar por tu usuario de base de datos
        'password' => 'Maria123',    // Cambiar por tu contrase�a de base de datos
        'database' => 'biblioteca',       // Nombre de tu base de datos
        'DBDriver' => 'MySQLi',
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug'  => (ENVIRONMENT !== 'production'),
        'charset'  => 'utf8',
        'DBCollat' => 'utf8_general_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port'     => 3306,
    ];
}
?>
