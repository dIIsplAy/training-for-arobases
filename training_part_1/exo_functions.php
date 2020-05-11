<?php
//////////////////////////////////////////////////// -----<>----- \\EXO FONCTIONS UTILISATEURS //-----<>-----\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
// GLOBAL = PERMET DUTILISER UNE VARIABLE QUI EST DECLARER EN DEHORS DE LA FONCTION

function repondre_oui_non ($phrase) {
	while(true){
		$reponse = readline($phrase . " - (o)ui/(n)on : ");
		if ($reponse === "o"){
			return true;
		}elseif ($reponse === "n"){
			return false;
		}
	}
}
// function demande_creneau($phrase = 'veulliez entrer un creneau'){
// 	echo $phrase ."\n";
// 	while(true){
// 		$ouverture = (int)readline('heure d\'ouverture');
// 		if($ouverture >= 0 && $ouverture <= 23){
// 		break;
// 	}
// }
// 	while(true){
// 		$fermeture = (int)readline('heure de fermeture');
// 		if($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture){
// 		break;
// 	}
// }
// return [$ouverture, $fermeture];
// }

// function demander_creneaux($phrase = 'veulliez entrez vos créneaux'){
// 	$creneaux =[];
// 	$continuer = true;

// 	while($continuer){
// 		$creneaux[] = demande_creneau();
// 		$continuer = repondre_oui_non('Voulez vous continuer');
// 	}
// 	return $creneaux;
// }

// function demo (string $param){
// 	var_dump($param);

// }

// demo(1.2);
// echo 1.2 . "bonjou";



// $resultat = repondre_oui_non('voulez vous continuer?');
// $creneau = demande_creneau();
// $creneau2 = demande_creneau('veulliez entrer votre creneau');
// $crenaux = demander_creneaux('Entrez vos créneaux');
// var_dump($creneau, $creneau2);

/////////////////////////// EXO 1
// $nom = 'doe';
// function bonjour($prenom = null){
	// global $nom;
	// if($prenom == null){
		// return 'bonjour';
			// }
	// return "Bonjour ".$prenom." ".$nom."";
	
// }
// echo bonjour('jean');

//////////////////////////////////////////////////// -----<>----- \\EXO FONCTIONS //-----<>-----\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

/////////////////////////// EXO 1

// & = définie que les deux variables sont associé a la même variable
// ARRAY_PUSH = ajoute les nouvelles valeurs en tableaux
// ARRAY_REVERSE = inverse lodre du tableau
// SORT = met les valeur du tabelau du plsu petit au plus grand
// $notes = [10, 20, 13];
// $notes2 = &$notes;
// $notes2[] = 10;
// var_dump($notes, $notes2);
// $notes[] = 16;
// array_push($notes, 14, 15);
// $notes_reverse = array_reverse($notes);
// $sort_notes = sort($notes);
// print_r($notes);
// print_r($notes_reverse);

//EXO FILTRE INSULTE 

// $insultes = ['merde','con'];
// $phrase = 'sale con de merde';
// $asterisques= [];
//METHOD 1
// foreach($insultes as $insulte){
	// $asterisque[] = substr($insulte, 0,1) . str_repeat('*', strlen($insulte));
// }
// $phrase = str_replace($insultes, $asterisque, $phrase);
//METHOD 2
// foreach($insultes as $insulte){
	// $replace = str_repeat('*', strlen($insulte));
	// $phrase = str_replace($insulte, $replace , $phrase);
// }
// echo $phrase;



// EXO PALYNDROME FUNCTION

// while(true){
// $mots = 'kayake';
	// if($mots === ''){
		// exit('fin du programme');
		// }
	// $reverse = strtolower(strrev($mots));
	// if(strtolower($mots) === $reverse){
		// echo " ".$mots." est un playndrome";
		// exit('finis');
		// }else {
		// echo " ".$mots." est un pas playndrome";
		// exit('pasbien');
		// }
	
// }

/////////////////////////// EXO 2
// $notes = [10, 20, 13];
// ARRAY_SUM = aditionne les valeurs dun tableau
// $total = array_sum($notes);
// var_dump($notes);

// COUNT =  COMPTE LES ELEMENT DU TABLEAU
// $nombre_notes = count($notes);
// var_dump($nombre_notes);

// ROUND =  arrondi le chiffre aux nombre souhaiter
// echo " vous avez ".round($total / $nombre_notes, 2)." de moyenne";


////////////////////// EXO 3
// $mots = 'Kayak';
// $reverse = strtolower(strrev($mots));
// if(strtolower($mots) === $reverse){
	// echo"palyndrome";	
// }else{
// echo"not palyndrome";

// }