<?php

namespace AbstractFactory;

use AbstractFactory\Db\MySQL;
use AbstractFactory\Db\OracleSQL;
use AbstractFactory\Factory\MySqlFactory;
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

$postgreFactory = new PostgreFactory(new MySQL());
$serviceWithPostgreRepositories = new Service($postgreFactory);
$serviceWithPostgreRepositories->addRecord();
$serviceWithPostgreRepositories->addQueryBuilder();

$oracleFactory = new OracleFactory(new MySQL());
$serviceWithOracleRepositories = new Service($oracleFactory);
$serviceWithOracleRepositories->addRecord();
$serviceWithOracleRepositories->addQueryBuilder();