<?php

class DbConnection
{
    public static function connect()
    {
        define('DB_SERVERNAME', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_NAME', 'social-platform');

        $connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // CHECK CONTROL FOR ERROR
        if ($connection && $connection->connect_error) {
            echo "Connection failed: " . $connection->connect_error;
            die;
        }

        return $connection;
    }

    public static function disconnect($connection)
    {
        $connection->close();
    }
}
