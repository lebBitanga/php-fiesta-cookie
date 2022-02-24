<?php

$BMM = array(

	array(1, "Bulbasaur", "Grass", "Poison","Overgrow", 45, 49, 49),
	array(2, "Ivysaur", "Grass", "Poison","Overgrow", 60, 62, 63),
	array(3, "Venusaur", "Grass", "Poison","Overgrow", 80, 82, 83),
	array(4, "Charmander", "Fire", "N/A", "Blaze", 39, 52, 43),
	array(5, "Charmeleon", "Fire", "N/A", "Blaze", 58, 64, 58),
	array(6, "Charizard", "Fire", "Flying", "Blaze", 78, 84, 78),
	array(7, "Squirtle", "Water", "N/A", "Torrent", 44, 48, 65),
	array(8, "Wartortle", "Water", "N/A", "Torrent", 59, 63, 80),
	array(9, "Blastoise", "Water", "N/A", "Torrent", 79, 83, 100),
	array(10, "Caterpie", "Bug", "N/A", "Shield Dust", 50, 20, 25),
);

#function1
function hp_sum($arr){
	
	$sum  = 0;

	for($i = 0; $i < 10; $i++){
		$sum = $sum + $arr[$i][5];
	}

	return $sum;
}

#sample for function1
echo hp_sum($BMM)." :sum of all hp";
echo "<br>";


#function2
function ave_attack($arr){
	
	$sum  = 0;
	$ave = 0;

	for($i = 0; $i < 10; $i++){
		$sum = $sum + $arr[$i][6];
	}

	return $sum / count($arr);
}

#sample for function2
echo ave_attack($BMM). " :average of all attack";

?>
