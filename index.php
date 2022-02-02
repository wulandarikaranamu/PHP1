<?php 

// membuat array dengan cara lama
$benda = array("meja","buku","pulpen","komputer");
echo "<br>";
	var_dump($benda);
			echo "<br>";
					print_r($benda);
 
							echo "<br>";
// membuat array dengan cara baru
$hari = ["senin","selasa","rabu"];
   echo "<br>";
		var_dump($hari);
				echo "<br>";
					print_r($hari);
 							echo "<br>";


// cara menambah 1 elemen kedalam array
				print_r($hari);
			$hari [] = "kamis";
		echo "<br>";
	print_r($hari);

echo "<br>";
// cara menampilkan 1 elemen
$hari = ["senin","selasa","rabu"];
	echo "<br>";
		echo $hari[2];

echo "<br>";
// array dapat menampung elemen yang berbeda type data
			$arr1 = ["bisa",145, True];
					print_r($arr1);

 ?>