<?php

require __DIR__ . '/../../app/db.php';

function selectAllItems() {
	$pdo = new PDO(DSN, USER, PASS);
	$query = "SELECT * FROM item";
	$res = $pdo->query($query);
	return $res->fetchALL();
}