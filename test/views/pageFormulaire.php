<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Formulaire de recherche de livres</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/styleformulaire.css" />
     <style>


    </style>
</head>

<body>
    <header>
        <h1>Formulaire de recherche de livres</h1>
    </header>
<fieldset>
   <legend>Formulaire</legend>
    <form action="bib_search.php" method="get">
        <label>Choix de l'auteur :
            <select name="author_id" autofocus>
                <option value="">Choose</option>
                <?= $optionsAuteurs ?>
            </select>
            <br />
        </label>

        <label>Choix de l'année :
            <select name="year">
                <option value="">Choose</option>
                <?= $optionsYears ?>
            </select>
            <br />
        </label>

        <label>Choix de categories :
            <select name="category">
                <option value="">Choose</option>
                <?= $optionsCategory ?>
            </select>
            <br />
        </label>
        
        <label>
            Mot Clé : <input type="text" name="word" placeholder="Dune">
            <br/>
        </label>
        
        <button type="submit" name="valid" value="1">Rechercher</button>
    </form>
</fieldset>
</body>

</html>
