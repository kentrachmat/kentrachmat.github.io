<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Formulaire de recherche de livres</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/styleformulaire.css" />
    </head>
    <body>
        <header>
            <h1>Formulaire de recherche de livres</h1>
            <a href="formulaire_new.php" target="_blank">Link to new formulaire</a>
        </header>
        
       <form action="bib_par_auteur.php" method="get">
        <label>Choix de l'auteur :
            <select name="author_id">
                <option value="">Choose</option>
                <?= $optionsAuteurs ?>
            </select>
            <br />
        </label>
        <button type="submit" name="valid" value="1">Rechercher</button>
       </form>
     
    </body>
    
</html>