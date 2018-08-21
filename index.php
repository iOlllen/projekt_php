<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>





<?php 

// $nazwa_zmiennej = "tekst przykładowy";
// $nazwa_zmiennej_dwa = "tekst drugi"; 
// $Nazwa_zmiennej = "tekst przykładowy dwa";
// $Nazwa_zmiennej_dwa = "tekst drugi dwa";

// $suma = $nazwa_zmiennej . $Nazwa_zmiennej;
// $typ_zmiennej_a = gettype($nazwa_zmiennej);

// //zmienna zaczyna się od _ albo od znaku tekstowego!


// // define(argument1,argument2);
// define("adres_url", "local_host");

// $number = 4;

// // var_dump($nazwa_zmiennej);

// // print $number;

// $dec = 1;
// var_dump($dec);

// $neg = -1;
// var_dump($neg);


// $hexa = 0x1A;
// var_dump($hexa);

// $octa = 0123;
// var_dump($octa);


// $miasto1 = "Wrocław";
// $miasto2 = "Kraków";
// $miasto3 = "KatoKato";
// $miasto4 = "SOSNOWIEC";

// $miasta = array("Wrocław","Kraków","KatoKato","SOSNOWIEC");

// $miasta[0] = "Wrocław Waclav";
// $miasta[1] = "Kraków bez Lecha";
// $miasta[2] = "Kato nie Lizbona";
// $miasta[3] = "wciąż SOSNOWIEC";
// // tablice asocjacyjne




// var_dump($miasta);

// $ludzie = array("Albert"=>24,"Józef"=>78);
// // echo $ludzie["Albert"];

// $ludzie["Albert"] = 45;
// $ludzie["Józef"] = 45;

// var_dump($ludzie);

// $budynek_ulica = array(
// 	"Weglokoks" => "Mickiewicza 29",
// 	 "Inny" => "inny adres"
// );

// // var_dump($budynek_ulica);
// echo $budynek_ulica["Weglokoks"];

// TABLICA WIELOWYMIAROWA


// $ludzie = array(
// 	array(
// 		"Imie" => "Zbyszek",
// 		"wiek" => 34,
// 	),
// 	array(
// 		"Imie"=>"Alojzy",
// 		"wiek"=>102,
// 	),
// 	array(
// 		"Imie" => "Maria",
// 		"wiek" => 55,
// 	),
// 	array(
// 		"Imie"=>"Jacek",
// 		"wiek"=>33,
// 	),
// 	array(
// 		"Imie" => "Wojtek",
// 		"wiek" => 45,
// 	),
// 	array(
// 		"Imie"=>"MICHAŁ",
// 		"wiek"=>12,
// 	)
// );


// echo "Pan " . $ludzie[0]["Imie"] . " ma lat " . $ludzie[0]["wiek"];





// $budynki = array(
// 	'Weglokoks' => array(
// 		'ilosc_sal' => 234,
// 		'pietra' => 14
// 	),
// 	'Supersam' => array(
// 		'ilosc_sal' => 45,
// 		'pietra' => 3
// 	)
// );


// // wypisanie wartosci elementu ilosc_sal w elemencie 1 o nazwie weglokoks
// echo ($budynki["Weglokoks"]['ilosc_sal']);


// $samochody = array(
// 	'Volkswagen' => array(
// 		'ilosc_kol' => 4,
// 		'rodzaj' => "polo"
// 	),
// 	'Opel' => array(
// 		'ilosc_kol' => 4,
// 		'rodzaj' => "corsa"
// 	),
// 	'Audi' => array(
// 		'ilosc_kol' => 4,
// 		'rodzaj' => "Q6"
// 	),
// 	'Volvo' => array(
// 		'ilosc_kol' => 4,
// 		'rodzaj' => "i30"
// 	)
// );



// echo ($samochody['Audi']['rodzaj']);



// $x = 10;
// $y = 20;
// $x = $x + $y;
// to poniżej to jest ten sam zapis
// $x += $y;



//$x = $x * $y;
//$x *= $y


// dzielenie bez reszty
// $x = $x / $y;
//$x /= $y;

//dzielenie z reszta
//$x = $x % $y;
//$x %= $y;

// echo $x;

// $d = 20;
// $b = 10;


// // porównanie wartości
// var_dump($d == $b);

// //porównanie wartośći oraz typów zmiennych
// var_dump($d ===$b);

// //element różny od drugiego - zaprzeczenie (wartości)
// var_dump($d != $b);

// //element różny od drugiego - zaprzeczenie (wartości oraz typy)
// var_dump($d !== $b);
// var_dump($d > $b);
// var_dump($d < $b);
// var_dump($d <= $b);
// var_dump($d >= $b);



//	inkrementacja
// $x = $x + $x;

//	post-inkrementacja
// $x++;

//	pre-inkrementacja
// --$x;

//	dekrementacja
// $x = $x - $x;

//	post-dekrementacja
// $x--;

//	pre-dekrementacja
// --$x;

// $str = "teskt1";
// $str_two = "tekst2";

// $str = $str . $str_two;
// echo $str . "<br>";

// $str .= $str_two;
// echo $str . "<br>";


// // instrukcje warunkowe

// // jeżeli (warunek){
// // 	wykonuje sie wewnatrz wszystko
// // }

// $zmienna = "asda";

// if ($zmienna != "asdaa"){
// 	echo "test";
// }


//pominięcie błędów @

// @$zmienna;

// if (@$zmienna != 'warunek_k' ) {

// };

// if(@$zmienna){
// 	echo "zmienna istnieje";
// }else{
// 	echo "zmienna nie istnieje";
// };


// $budynki = array(
// 	'Weglokoks' => array(
// 		'ilosc_sal' => 234,
// 		'pietra' => 14,
// 		'wybudowano' => true
// 	),
// 	'Supersam' => array(
// 		'ilosc_sal' => 45,
// 		'pietra' => 3,
// 		'wybudowano' => false
// 	)
// );


// if ($budynki['Weglokoks']['wybudowano'] == true) {
// 	echo "Ilość pięter" . $budynki['Weglokoks']['pietra'] . "<br>";
// 	echo "Ilość sal" . $budynki['Weglokoks']['ilosc_sal'] . "<br>";}
// else{
// 	echo "NIESTETY, NIE MA TAKIEGO BUDYNKU ALBO JEST W BUDOWIE!";
// }

// if ($budynki['Weglokoks']['pietra'] < 6) {
// 		echo "budynek ma malo pieter";
// }else{
// 	echo "normal duzo pieter";
// }

// echo ($budynki['Weglokoks']['pietra'] < 6) ? 'budynek malo pieter' : 'budynek ma duzo pieter' ;

// $obiekty = array(
// 	'budynki' => array(
// 		array(
// 			'nazwa' => "Węglokoks",
// 			'pietra' => 14,
// 		),
// 		array(
// 			'nazwa' => "THAI MASALA",
// 			'pietra' => 4,
// 		)
// 	),
// 		'galerie' => array(
// 		array(
// 			'nazwa' => "Katowicka",
// 			'pietra' => 3,
// 		),
// 		array(
// 			'nazwa' => "SUPERSAM",
// 			'pietra' => 2,
// 		)
// 	)
// );

// $b = 0;
// echo $obiekty['budynki'][$b]['nazwa'] . "<br>";

// $b++;

// echo $obiekty['budynki'][$b]['nazwa'] . "<br>";




// //rosnąco
// sort();

// //malejaco

// rsort();


//tablice asocjacyjne
// $ludzie = array("Albert"=>12,"Józef"=>21,"Grażyna"=>31,"Marek"=>41);


// // rosnąco po nazwie/kluczu np. "Albert"
// ksort();

// //malejąco po nazwiekluczu
// krsort();

// //rosnąco po wartości
// asort();

// //malejąco po wartości
// arsort();

// arsort($ludzie);
// var_dump($ludzie);


// PĘTLE

/* for (deklaracja zmiennej licznikowej;
 warunek podczas którego pętla się wykonuje;
  wzrost lub zmniejszanie się zmiennej licznikowej) {
 
 }
*/


/* Si = 0;
while ($i <= 10) {
	echo "test" . "<br>";
	#i++;
}
*//*

$i = 0;
do{
	echo $i;
	$i++;
} while ($i <= 10);
*/
/*
foreach ($tablica as $element_tablicy) {
	echo $element_tablicy;
}
foreach ($tablica as $klucz/element_tablicy => wartość) {
	echo $klucz;
	echo $wartość;
}
*/



// $miasta = array("Wrocław","Kraków","Katowice");
// $liczby = array(3,7,10,1);

// $ludzie = array("Józef"=> 24, "Albert" => 78, "Grażyna" => 45, "Marek" => 18);

// $count = count($miasta);

// echo $count;

// for ($i=0; $i < $count; $i++) { 
// 	echo $miasta[$i] . " <br>" ;
// }

// foreach ($ludzie as $klucz => $wartosc) {
// 	echo $klucz . " - " . $wartosc . " <br>" ;
// }



//funkcje
$budynki = array(
		array(
			'nazwa' => 'Weglokoks',
			'pietra' => 14,
			'wybudowano' => true
		),
		array(
			'nazwa' => 'nieWeglokoks',
			'pietra' => 3,
			'wybudowano' => false
		),
		array(
			'nazwa' => 'Bar a Boo',
			'pietra' => 4,
			'wybudowano' => false
		),
		array(
			'nazwa' => 'Dixie',
			'pietra' => 1,
			'wybudowano' => true
		),
	);




function wypisz_nazwe_budynku ($tablica){

	foreach ($tablica as $budynek) {
		if ($budynek['wybudowano'] == true) {
			echo $budynek['nazwa'] . "<br>";
		}
	}
}




wypisz_nazwe_budynku($budynki);



?>

<!-- <h2>
	Pan
	<?php echo $ludzie[0]["Imie"]; ?>
	ma lat
	<?php echo $ludzie[0]["wiek"]; ?>
</h2> -->




<!-- <h3>ALOHA</h3>
<h3>ALOHA</h3>
<h3>ALOHA</h3>
<h3>ALOHA</h3>
<h3>ALOHA</h3>

<h3>ALOHA</h3> -->

<?php /* ?>

<h3>ALOHA</h3>
<h3>ALOHA</h3>
<h3>ALOHA</h3>
<h3>ALOHA</h3>
<php */ ?> 













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>