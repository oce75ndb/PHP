<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Déclaration 3 variables (integer)
        $a = 3;
        $b = 5;
        $c = 8;

        WriteLine("$a - $b =" . ($a - $b));
        WriteLine("$a + $b =" . ($a + $b));
        WriteLine("$a * $b =" . ($a * $b));
        WriteLine("$a / $b =" . ($a / $b));
        WriteLine("$a % $b =" . ($a % $b));
        WriteLine("$a ^ $b =" . ($a ^ $b));

        $resultat = $a + $b;
        echo $resultat;

        nl();
        echo "$a - $b = ($a - $b)";

        function nl() {
            echo '<br>';
        }
        function WriteLine($texte) {
            echo $texte . "<br>";
        }
    ?>
</body>
</html>