<?php
require_once 'bd.php';

function getClients(){
    $connect=getConnection();

    $sql="SELECT * FROM client";
    return $connect -> query($sql) -> fetchAll();
}