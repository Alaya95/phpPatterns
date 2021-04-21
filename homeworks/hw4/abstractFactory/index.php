<?php

namespace AbstractFactory;

use AbstractFactory\Db\MySQL;
use AbstractFactory\Db\OracleSQL;
use AbstractFactory\Db\PostgreSQL;
use AbstractFactory\Factory\MySqlFactory;
use AbstractFactory\Factory\OracleFactory;
use AbstractFactory\Factory\PostgreFactory;
use AbstractFactory\Service\Service;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^AbstractFactory/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$mysqlFactory = new MySqlFactory(new MySQL());
// Создаем сервис, который использует репозитории, передаем ему фабрику,
// чтоб сервис мог сам попросить фабрику создать нужные репозитории.
$serviceWithMysqlRepositories = new Service($mysqlFactory);
// Выполняем действия
$serviceWithMysqlRepositories->addRecord();
$serviceWithMysqlRepositories->addQueryBuilder();

$postgreFactory = new PostgreFactory(new PostgreSQL());
$serviceWithPostgreRepositories = new Service($postgreFactory);
$serviceWithPostgreRepositories->addRecord();
$serviceWithPostgreRepositories->addQueryBuilder();

$oracleFactory = new OracleFactory(new OracleSQL());
$serviceWithOracleRepositories = new Service($oracleFactory);
$serviceWithOracleRepositories->addRecord();
$serviceWithOracleRepositories->addQueryBuilder();