<?php
session_start();

function db_connect(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="simple-full-stack-app";
    try{
        $conn=new mysqli($servername,$username,$password,$dbname);
    }
    catch(Exception $e){
       die($e->getMessage());
    }
    finally{
        return $conn;
    }
}