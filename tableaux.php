<?php

//EXO 1:

/*$array = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre");
var_dump($array);*/


//EXO 2:

/*$array = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre");
echo $array[3];*/


//EXO 3:

/*$array = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre");
echo $array[5];*/

//EXO 4:

/*$array = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Julien", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre");
var_dump($array);*/


//EXO 5:

//Créer un tableau associatif avec comme index le numéro des departements des Hauts France et leurs noms

/*$array = array(
    'Aisne'    => 02,
    'Nord'  => 59,
    'Oise'  => 60,
    'Pas-de-Calais' => 62,
    'Somme' => 80
);
var_dump($array);*/

//EXO 6:

/*$array = array(
    'Aisne'    => 02,
    'Nord'  => 59,
    'Oise'  => 60,
    'Pas-de-Calais' => 62,
    'Somme' => 80
);
var_dump($array['Nord']);*/

//EXO 7:

//Avec le tableau de l'exercice 5 ajouter la ligne avec le departement de Reins

/*$arrayName = array(
					02 => "Aisne" ,
					59 => "Nord" ,
					60=> "Oise",
					62 =>"Pas-de-Calais",
					80 =>"Somme",
				);
$arrayName[] = array(
	 51 => "Rince");
print_r($arrayName);*/

//EXO 8:

//Avec le tableau de l'exercice 1 et une boucle afficher toute les valeurs de ce tableau
 
/* $array=array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre");
         
        for($i=0;$i<count($array); $i++) { 
            echo "Le $i c'est le mois de $array[$i] "; 
        } */

//EXO 9:

// Avec le tableau de l'exercice 5, afficher toute les valeurs de se tableaux avec leurs clefs.

/*$array = array(
    'Aisne'    => 02,
    'Nord'  => 59,
    'Oise'  => 60,
    'Pas-de-Calais' => 62,
    'Somme' => 80
);
print_r($array);*/



//EXO 10:

// Avec le tableau 5 afficher toute les valeurs de ce tableau ainsi que les clefs associés cela pourra etre par exemple de la forme : "Departement" $nomdudepartement + ""


/*$array=array("Aisne[02]", "Nord[59]", "Oise[60]", "Pas-de-Calais[62]", "Somme[80]");
	for($i=0;$i<count($array); $i++) { 
            echo "Le departement $array[$i]"; 
        }*/
?>