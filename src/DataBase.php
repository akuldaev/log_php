<?php

class DataBase extends Logger
{
    private $conn;
    private static $_instance;
    private $host = db_host;
    private $username = db_user;
    private $password = db_passwd;
    private $database = db_name;

    public static function getInstance()
    {
        if(!self::$_instance)
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    private function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username,
            $this->password, $this->database);

        if(mysqli_connect_error())
        {
            trigger_error("Невозможно установить соединение: " . mysqli_connect_error(), E_USER_ERROR);
        }
    }

    private function __clone(){}

    public function getConnection() {
        return $this->conn;
    }

    static function putinDB($msg) {
        $db = self::getInstance();
        $mysqli = $db->getConnection();
        $sql = "INSERT INTO messages (log_msg) VALUES ('$msg')";
        $mysqli->query($sql);
        if ($mysqli->query($sql) === TRUE) {
            echo "New record created successfully \n";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }

    }


}