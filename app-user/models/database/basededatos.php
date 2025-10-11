<?php
namespace App\Models\Databases;

use mysqli;

class GrupoAvanzadaDB
{
    private $hostDb = "localhost";
    private $nameDb = "";
    private $userDb = "";
    private $pwdDb = "";
    private $conexDb = null;

    private $isSqlSelect = false;

    public function __construct()
    {
        $this->conexDb = new mysqli(
            $this->hostDb,
            $this->userDb,
            $this->pwdDb,
            $this->nameDb
        );
        if ($this->conexDb->connect_error) {
            die("". $this->conexDb->connect_error);
        }
    }

     public function setIsSqlSelect($bool)
    {
        $this->isSqlSelect = $bool;
    }

    public function execSQL($sql, ...$bindParam){
        //return $this->conexDb->query($sql);
        $prp = $this->conexDb->prepare($sql);
        if(!empty($bindParam)){
            $prp->$bindParam($bindParam);
        }
        if (!$this->isSqlSelect) {
            return $prp->execute();
        }
        $prp->execute();
        return $prp->get_result();
    }    

    public function closeDB(){
        $this->conexDb->close();
    }
}