<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2> 1 užduotis. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :Aš esu Vardenis Pavardenis. Man yra XX metai(ų). </h2>";
        echo "<br>";

        $vardas = "Matas";
        $pavar = "Mačiulis";
        $gim = 1998;
        $now = 2023;
        echo "<h2> Aš esu " . $vardas . " ". $pavar . ". Man yra" . " ". ($now - $gim) . " metai </h2>";
        echo "<hr>";

        echo "<h2> 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.</h2>";
        echo "<br>";

        $rand1 = rand(0,4);
        $rand2 = rand(0,4);
        echo "<h2>" . $rand1 . " " . $rand2 . "</h2>";

        if($rand1 != 0 && $rand2 != 0) {
            if($rand1 > $rand2) {
                echo "<h2>" . round($rand1 / $rand2, 2) . "</h2>" ;
            }else {
                echo "<h2>" . round($rand2 / $rand1, 2) . "</h2>";
            }
        }else {
            echo "<h2> Dalyba iš nulio negalima </h2>";
        }

        echo "<hr>";

        echo "3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.";

        $rand31 = rand(0,25);
        $rand32 = rand(0,25);
        $rand33 = rand(0,25);
        echo "<br>";
        echo "<p>" . $rand31 . " " . $rand32 . " " . $rand33 . "</p>";
        
        if(($rand31 >= $rand32 && $rand31 <= $rand33) || ($rand31 <= $rand32 && $rand31 >= $rand33)){
            echo $rand31. " ";

        }if(($rand32 >= $rand31 && $rand32 <= $rand33) || ($rand32 >= $rand33 && $rand32 <= $rand31)){
            echo $rand32. " ";

        }if(($rand33 >= $rand31 && $rand33 <= $rand32) || ($rand33 >= $rand32 && $rand33 <= $rand31)){
            echo $rand33. " ";

        }

        echo "<hr>";
        echo "4. Vedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.";
        echo "<br>";

        $rand41 = rand(0,10);
        $rand42 = rand(0,10);
        $rand43 = rand(0,10);

        echo "<p>" . $rand41 . " " . $rand42 . " " . $rand43 . "</p>";

        if ($rand41 + $rand42 > $rand43 && $rand41 + $rand43 > $rand42 && $rand42 + $rand43 > $rand41) {
            echo "<p>" . "Trikampį galima sudaryti" . "</p>";
        }else {
            echo "<p>" . "Trikampio negalima sudaryti" . "</p>";
        }

        echo "<hr>";
        echo "5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
        reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).";
        echo "<br>";

        $rand51 = rand(0,2);
        $rand52 = rand(0,2);
        $rand53 = rand(0,2);
        $rand54 = rand(0,2);

        echo "<p>" . $rand51 . " " . $rand52 . " " . $rand53 . " " . $rand54 . "</p>";

        $nuliai = 0;
        $vienetai = 0;
        $dvejetai = 0;

        if($rand51 == 0){
            $nuliai++;
        }
        if($rand52 == 0){
            $nuliai++;
        }
        if($rand53 == 0){
            $nuliai++;
        }
        if($rand54 == 0){
            $nuliai++;
        }

        if($rand51 == 1){
            $vienetai++;
        }
        if($rand52 == 1){
            $vienetai++;
        }
        if($rand53 == 1){
            $vienetai++;
        }
        if($rand54 == 1){
            $vienetai++;
        }

        if($rand51 == 2){
            $dvejetai++;
        }
        if($rand52 == 2){
            $dvejetai++;
        }
        if($rand53 == 2){
            $dvejetai++;
        }
        if($rand54 == 2){
            $dvejetai++;
        }

        echo "<p>" . $nuliai . " " . $vienetai . " " . $dvejetai . "</p>";
        echo "<hr>";

        echo "6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage.";
        echo "<br>";

        $rand61 = rand(1,6);
        echo "<p>" . $rand61 . "</p>";

        if($rand61 == 1){
            echo "<h1>" . $rand61 . "</h1>";
        }
        if($rand61 == 2){
            echo "<h2>" . $rand61 . "</h2>";
        }
        if($rand61 == 3){
            echo "<h3>" . $rand61 . "</h3>";
        }
        if($rand61 == 4){
            echo "<h4>" . $rand61 . "</h4>";
        }
        if($rand61 == 5){
            echo "<h5>" . $rand61 . "</h5>";
        }
        if($rand61 == 6){
            echo "<h6>" . $rand61 . "</h6>";
        }

        echo "<hr>";

        echo "7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.";

        $rand71 = rand(-10,10);
        $rand72 = rand(-10,10);
        $rand73 = rand(-10,10);

        echo "<p>" . $rand71 . " " . $rand72 . " " . $rand73 . "</p>";

        if ($rand71 < 0) {
            echo "<h1><span style='color:green'>$rand71</span></h1>";
        }
        if ($rand71 > 0) {
            echo "<h1><span style='color:blue'>$rand71</span></h1>";
        }
        if ($rand71 == 0) {
            echo "<h1><span style='color:red'>$rand71</span></h1>";
        }
        if ($rand72 < 0) {
            echo "<h1><span style='color:green'>$rand72</span></h1>";
        }
        if ($rand72 > 0) {
            echo "<h1><span style='color:blue'>$rand72</span></h1>";
        }
        if ($rand72 == 0) {
            echo "<h1><span style='color:red'>$rand72</span></h1>";
        }
        if ($rand73 < 0) {
            echo "<h1><span style='color:green'>$rand73</span></h1>";
        }
        if ($rand73 > 0) {
            echo "<h1><span style='color:blue'>$rand73</span></h1>";
        }
        if ($rand73 == 0) {
            echo "<h1><span style='color:red'>$rand73</span></h1>";
        }

        echo "<hr>";

        echo "8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.";

        $zvakSk = rand(5,3000);

        echo "<p>" . $zvakSk . "</p>";

        if($zvakSk > 1000 && $zvakSk < 2000){
            echo $zvakSk . " ". "Už" . " " . ($zvakSk * 0.97);
        }
        if($zvakSk > 2000){
            echo $zvakSk * 0.96; 
        }
        if($zvakSk < 1000){
            echo $zvakSk;
        }
        
        echo "<hr>";
        echo "9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.";

        $rand91 = rand(0,100);
        $rand92 = rand(0,100);
        $rand93 = rand(0,100);

        echo "<p>" . $rand91 . " " . $rand92 . " " . $rand93 . "</p>";

        $vidurkis = round(($rand91 + $rand92 + $rand93)/3);
        echo "Aritmetinis vidurkis" . " " . $vidurkis;

        "<br>";

        $numSum = 0;
        $numCount = 0;

        if($rand91 < 10 || $rand91 > 90){
            $numSum += $rand91;
            $numCount++;
        }
        if($rand92 < 10 || $rand92 > 90){
            $numSum += $rand92;
            $numCount++;
        }
        if($rand93 < 10 || $rand93 > 90){
            $numSum += $rand93;
            $numCount++;
        }

       echo "<br>";
       echo "<p>" . $numSum . "</p>";
       echo "<p>" . $numCount . "</p>";

       if($numCount == 0){
        echo "Dalyba iš 0 negalima";
       }else{
        echo "<p>" . "Aritmetinis vidurkis" . " " . ($numSum / $numCount) . "</p>";
       }








    ?>
</body>
</html>