<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);


//nombre de mots dans le dico
count($dico);
echo count($dico).'</br>';// réponse: 336532

//nombre de mots à 15 caractères
$nbCaracteres = array();

foreach ($dico as $mots) {
	
	if (strlen($mots) == 15) {
		array_push($nbCaracteres, $mots);
	}
}

echo count($nbCaracteres).'</br>';// réponse : 12298

//mots avec un "w"
$lettre_w = array();

foreach ($dico as $mots) {
	
	if (strpos($mots, "w") !== false) {
		array_push($lettre_w, $mots);
	}
}

echo count($lettre_w).'</br>';// réponse : 537 

//mots qui finissent par "q"
$lettre_q = array();

foreach ($dico as $mots) {
	
	if (substr($mots, -1) == "q") {
		array_push($lettre_q, $mots);
	}
}

echo count($lettre_q).'</br>';// réponse : 8

?>