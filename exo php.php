
<?php 
echo ('<br><br><u>question 1</u><br><br>');

$a = 10;
$b = 20;
echo ("a=".$a);
echo "<br>";
echo ("b=".$b);
echo "<br>";
echo "<br>";

/*if ($a < $b){
    echo ("LA VARIABLE B EST PLUS GRANDE");
}else if($a==$b) {
    echo ("aucune variable n'est plus grande car a et b sont égaux");

}
else{
    echo ("LA VARIABLE A EST PLUS GRANDE ");
}*/

if ($a<$b){
echo "la variable b est plus grande";
}
    else if ($a==$b){
    echo "les variables sont équivalentes";
}
        else if ($b < $a){
            echo "la variable a est plus grande";
}
        else{
                 echo "c de la merde";
}

echo ('<br><br><u>question 2</u><br><br>');


if ($a>$b){
    echo "la variable a est plus grande";
    }
        else if ($a==$b){
        echo "les variables sont équivalentes";
    }
            else if ($b > $a){
                echo "la variable a est plus petite";
    }
            else{
                     echo "c de la merde";
    }

    echo ('<br><br><u>question 3</u><br><br>');

$a = 10;
$b = 20;

$temp=0;

$temp=$a;
$a=$b;
$b =$temp;

echo ("a=".$a);
echo "<br>";
echo ("b=".$b);
echo "<br>";

echo ('<br><br><u>question 4</u><br><br>');

$resultat= $a+$b;
echo $resultat;

echo ('<br><br><u>question 5</u><br><br>');
$resultat = rand(1, 100);
echo $resultat;

echo ('<br><br><u>question 6</u><br><br>');
$resultat = rand(5, 10);
echo $resultat;

echo ('<br><br><u>question 7</u><br><br>');

function addition($x,$y){

    $result= $x+$y;
    return $result;
}

$a= 2;
$b= 3;
$resultat=addition($a,$b);

echo $resultat;

echo ('<br><br><u>question 8</u><br><br>');


$x= rand(1,100);

if($x < 50){
    echo ("Je suis nul");
}else{
    echo ("Je suis bon");
}

echo ('<br><br><u>question 9</u><br><br>');



$x=rand(1,5);

if($x==1){
    echo ('AAA');
}else if($x==2){
    echo ('BBB');

}else if ($x==3){
    echo ('CCC');
}else if($x==4){
    echo ('DDD');

}else{
    echo ("Je suis une perruche");
}


echo ('<br><br><u>question 10</u><br><br>');

switch ($x=rand(1,5)){
    case 1:
        echo "AAA";
        break;
    case 2:
        echo "BBB";
        break;
    case 3: 
        echo "CCC";
    break;
    case 4: 
        echo "DDD";
    break;
    case 5: 
        echo "Je suis une perruche";
    break;
}

echo ('<br><br><u>question 11 et 12</u><br><br>');

$a = rand();
$b = rand();
$c = rand();
$d = rand();
$e = rand();
$f = rand();
$g = rand();
$h = rand();
$i = rand();
$j = rand();

echo ('valeur='); 
echo $a;
echo "<br>";
echo ('valeur='); 
echo $b;
echo "<br>";echo ('valeur='); 
echo $c;
echo "<br>";echo ('valeur='); 
echo $d;
echo "<br>";
echo ('valeur='); 
echo $e;
echo "<br>";
echo ('valeur='); 
echo $f;
echo "<br>";
echo ('valeur='); 
echo $g;
echo "<br>";
echo ('valeur='); 
echo $h;
echo "<br>";
echo ('valeur='); 
echo $i;
echo "<br>";
echo ('valeur='); 
echo $j;


echo ('<br><br><u>question 13</u><br><br>');


$tab=array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j);
echo ("L'addition de toutes ces valeurs est égale à ".array_sum($tab));








?>


