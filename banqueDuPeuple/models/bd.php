<?php

function getConnection(){

    $host='localhost';
    $user='root';
    $password='';
    $dbname='banque';
    $dsn="mysql:host=$host;dbname=$dbname";
    try{
        $bd=new PDO($dsn,$user,$password);

    }catch (Exception $ex){
        die('error:'.$ex->getMessage());

    }
    return $bd;
}