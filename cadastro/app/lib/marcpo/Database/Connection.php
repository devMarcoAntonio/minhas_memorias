<?php 

    namespace marcpo\Database;

    abstract class Connection
    {
        private static $conn;

        public function getConn()
        {
            if(!self::$conn){
                self::$conn = new PDO('mysql: host=localhost; dbname=video_login', 'root', '');

                return self::$conn;
            }
        }
    }