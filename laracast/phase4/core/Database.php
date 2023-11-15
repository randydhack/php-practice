<?php

namespace Core;

use PDO;

// Connect to a datbase and execute a query.
class Database
{

    public $connection;
    public $statement;
    public function __construct($config, $username = 'root', $password = '')
    {

        $dsn = 'mysql:' . http_build_query($config, '', ';'); // example.com?host=localhost&port=3306&dbname=myapp&charset=utf8mb4

        $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

    }

    public function query($query, $params = [])
    {

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function find() {
        return $this->statement->fetch();

    }

    public function findOrFail() {

        $res = $this->statement->fetch();

        if (!$res) {
            abort();
        } else {
            return $res;
        }
    }

    public function findAll() {
        return $this->statement->fetchAll();
    }
}
