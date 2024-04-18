<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Page de Test

    <!--Début du bloc php-->
    <?php 

        //Déclaration et initialisation de 2 variables
        $prenom = "Jean"; //Déclaration de variable $prenom
        $nom = "Dupont"; //Déclaration de variable $nom

        //Interpolation de variables et affichage via echo
        echo "<br>Bonjour $prenom $nom !";

        //Déclaration de variable sans initialisation
        $message;

        //Concaténation de variables et affichage via echo
        $message = "<br>Bonjour "; $prenom ."". $nom ." !";
        echo $message;

        /*Nom de variables :
        - commence par $
        - peut contenir maj, min, chiffres, certains caractères spéciaux
        - ne doit pas commencer par un chiffre après le $
        - case sensitive $Texte != $TEXTE
        - par convention on utilise camelCase */ 

        /*Types de variables (fction du contenu)
        - chaines de caractères (string) "Bonjour"
        - Entiers (integer) 123,

    ?>
    <!--Fin du bloc php-->
</body>
</html>