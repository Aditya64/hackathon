<?php


class Connection{

    /**
     * Connect to database
     */
    public function Connect(){

        require_once('Config.php');

        //connect to database
        $Conn = new mysqli(SERVERNAME, USER, PASSWORD, DBNAME);

        return $Conn;
    }


}

?>