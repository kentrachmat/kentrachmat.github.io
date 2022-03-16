<?php
    spl_autoload_register(function($classe){require "lib/$classe.class.php";}); // règle de chargement des classes
    
    require("etc/dsn_filename.php"); // definition de DSN_FILENAME
    
    
    require("lib/fonctionsLivre.php");
 
    try {
    
        $dl = new DataLayer(DSN_FILENAME);
        $books = $dl->getBooks();
        $libraryHTML = booksArrayToHTML($books);
        require("views/pageBibliotheque.php");
    } catch (ParmsException $e) {
        require "views/pageErreur.php";
    }
   
?>