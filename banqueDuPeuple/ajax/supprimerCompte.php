<?php
	require_once '../models/bd.php';
	$connect=getConnection();
	$sql="DELETE FROM compte WHERE id='".$_GET['id']."'";
	$resultat=$connect->exec($sql);
	echo $resultat;