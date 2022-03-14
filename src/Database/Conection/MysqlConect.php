<?php

namespace App\Database\Conection;


class MysqlConect
{
    public function __construct(
        private  $host = 'localhost',
        private $user ='root',
        private $pass = '',
        private $db_name ='php2bettatest',
        private $port= 3309,
    ) {
    }
   

    private function getConect()
    {
        return mysqli_connect($this->host, $this->user, $this->pass, $this->db_name, $this->port);
    }
    public function getQuery($string): array
    {
        if (!$this->getConect()) {
            echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
            exit;
        } elseif ($this->getConect()) {
            $returnArr = [];
            $queri = mysqli_query($this->getConect(), $string);
            while ($result = mysqli_fetch_assoc($queri)) {
                array_push($returnArr, $result);
            }
            return $returnArr;
        }
    }
    public function add ($string) {
        if (!$this->getConect()) {
            echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
            exit;
        } elseif ($this->getConect()) {
            echo "allok";
            mysqli_query($this->getConect(), $string);
        }
    }
}
