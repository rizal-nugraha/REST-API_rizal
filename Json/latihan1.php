<?php 

	
// 	$mahasiswa =[
// 		[
// 			"nama" => "Rizal",
// 			"nrp" => "183040081",
// 			"email" => "nugraha@mail"
// 		],
// 		[
// 			"nama" => "Nugraha",
// 			"nrp" => "183040000",
// 			"email" => "rizal@mail"
// 		],
// ];

	$dbh = new PDO('mysql:host=localhost;
					dbname=rest-api',
					'root',
					'');
	$db = $dbh->prepare('SELECT * FROM mahasiswa');
	$db->execute();
	$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

	$data = json_encode($mahasiswa);
	echo $data;

