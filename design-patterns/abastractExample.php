<?php
abstract class AbstractDatabase{
    abstract function getConnection();
}

abstract class AbstractDatabaseFactory{
    abstract function create();
}
class MySql extends AbstractDatabase{
    function getConnection()
    {
        echo "Mysql connection is ok";
    }
}
class postgreSql extends AbstractDatabase{
    function getConnection()
    {
        echo "postgreSql connection is ok";
    }
}

class SqlServer extends AbstractDatabase{
    function getConnection()
    {
        echo "SqlServer connection is ok";
    }
}

class MySqlFactory extends AbstractDatabaseFactory{
    function create(){
        return new MySql();
    }
}

class postgreSqlServerFactory extends AbstractDatabaseFactory{
    function create(){
        return new postgreSql();
    }
}

class SqlServerFactory extends AbstractDatabaseFactory{
    function create(){
        return new Sqlserver();
    }
}

class DataBaseFactory{
    function getMySqlEngine(){
        return new MysqlFactory();
    }
    function getPostgreSqlEngine(){
        return new postgreSqlServerFactory();
    }
    function SqlServerEngine(){
        return new SqlServerFactory();
    }
}

$df = new DataBaseFactory();
$mysqlFactory = $df->getMySqlEngine();
$mysql = $mysqlFactory->create();
$mysql->getConnection();