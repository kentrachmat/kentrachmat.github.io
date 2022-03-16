<?php /*
   Licence Informatique Université de Lille 2020
   
   Assert : Une variable globale nommée $libraryHTML contient le code HTML permettant l'affichage d'une liste de livres

*/?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Bibliothèque</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/stylebook.css" />
    </head>
    <body>
        <header>
            <h1>Bibliothèque</h1>
        </header>   
        <?php
            echo $libraryHTML;
        ?>
    </body> 
</html>
