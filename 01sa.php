<?php

//Practice 4-01
$BMM = array(
	array(1,'Bulbasaur','Grass','Poision','Overgrow',45,49,49),
	array(2,'Ivysaur','Grass','Poision','Overgrow',60,62,63),
	array(3,'Venusaur','Grass','Poision','Overgrow',80,82,83),
	array(4,'Charmander','Fire','N/A','Blaze',39,52,43),
	array(5,'Charmeleon','Fire','N/A','Blaze',58,64,58),
	array(6,'Charizard','Fire','Flying','Blaze',78,84,78),
	array(7,'Squirtle','Water','N/A','Torrent',44,48,65),
	array(8,'Wartortle','Water','N/A','Torrent',59,63,80),
	array(9,'Blastoise','Water','N/A','Torrent',79,83,100),
	array(10,'Caterpie','Bug','N/A','Shield Dust',50,20,55),
);

//print the array
echo $BMM[0][0].":  ".$BMM[0][1].", :".$BMM[0][2].", :".$BMM[0][3].", :".$BMM[0][4].", :".$BMM[0][5].", :".$BMM[0][6].", :".$BMM[0][7].".<br>";
echo $BMM[1][0].":  ".$BMM[1][1].", :".$BMM[1][2].", :".$BMM[1][3].", :".$BMM[1][4].", :".$BMM[1][5].", :".$BMM[1][6].", :".$BMM[1][7].".<br>";
echo $BMM[2][0].":  ".$BMM[2][1].", :".$BMM[2][2].", :".$BMM[2][3].", :".$BMM[2][4].", :".$BMM[2][5].", :".$BMM[2][6].", :".$BMM[2][7].".<br>";
echo $BMM[3][0].":  ".$BMM[3][1].", :".$BMM[3][2].", :".$BMM[3][3].", :".$BMM[3][4].", :".$BMM[3][5].", :".$BMM[3][6].", :".$BMM[3][7].".<br>";
echo $BMM[4][0].":  ".$BMM[4][1].", :".$BMM[4][2].", :".$BMM[4][3].", :".$BMM[4][4].", :".$BMM[4][5].", :".$BMM[4][6].", :".$BMM[4][7].".<br>";
echo $BMM[5][0].":  ".$BMM[5][1].", :".$BMM[5][2].", :".$BMM[5][3].", :".$BMM[5][4].", :".$BMM[5][5].", :".$BMM[5][6].", :".$BMM[5][7].".<br>";
echo $BMM[6][0].":  ".$BMM[6][1].", :".$BMM[6][2].", :".$BMM[6][3].", :".$BMM[6][4].", :".$BMM[6][5].", :".$BMM[6][6].", :".$BMM[6][7].".<br>";
echo $BMM[7][0].":  ".$BMM[7][1].", :".$BMM[7][2].", :".$BMM[7][3].", :".$BMM[7][4].", :".$BMM[7][5].", :".$BMM[7][6].", :".$BMM[7][7].".<br>";
echo $BMM[8][0].":  ".$BMM[8][1].", :".$BMM[8][2].", :".$BMM[8][3].", :".$BMM[8][4].", :".$BMM[8][5].", :".$BMM[8][6].", :".$BMM[8][7].".<br>";
echo $BMM[9][0].":  ".$BMM[9][1].", :".$BMM[9][2].", :".$BMM[9][3].", :".$BMM[9][4].", :".$BMM[9][5].", :".$BMM[9][6].", :".$BMM[9][7].".<br>";

//echo the number of elements in a array
echo "<br>";
echo "Number of elements  - BMM:"."<br>".count($BMM);
echo "<br>";
echo "<br>";

//Declare variable $favorite and assign your favorite specie
$favorite = $BMM[7][1];

//echo the $favorite
echo "favorite Species: "."<br>".$favorite;
echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";

?>

<p>list of species:</p>

<?php

//Practice 4-02
$species = array('Bulbasaur','Ivysaur','Venusaur','Charmander','Charmeleon','Charizard','Squirtle','Wartortle','Blastoise','Caterpie');
foreach ($species as $specie) {
	echo "<li>" .$specie. "</li>";
	echo "<br>";
}

?>