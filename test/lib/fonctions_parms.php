<?php

 /**
  *  prend en compte le paramètre $name passé en mode GET
  *   qui doit représenter un entier sans signe
  *  @return : valeur retenue, convertie en int.
  *   - si le paramètre est absent ou vide, renvoie  $defaultValue
  *   - si le paramètre est incorrect, déclenche une exception ParmsException
  *
  */
 function checkUnsignedInt(string $name, ?int $defaultValue=NULL, bool $mandatory=TRUE) : ?int {
       if(!isset($_GET[$name]) || $_GET[$name] == "")
           if($defaultValue == NULL){
               if($mandatory)
                   throw new ParmsException("Error Processing Request");
               else
                   return NULL;
           }
           else{
               return $defaultValue;
           }
    
       if (ctype_digit($_GET[$name])) 
           return (int)$_GET[$name];
       else 
           throw new ParmsException("Error Processing Requests");
  } 

/**
  *  prend en compte le paramètre $name passé en mode GET
  *   qui doit représenter un entier sans signe
  *  @return : valeur retenue, convertie en string.
  *   - si le paramètre est absent ou vide, renvoie  $defaultValue
  *   - si le paramètre est incorrect, déclenche une exception ParmsException
  *
  */
 function checkUnsignedStr(string $name, ?string $defaultValue=NULL, bool $mandatory=TRUE) : ?string {
       if(!isset($_GET[$name]) || $_GET[$name] == "")
           if($defaultValue == NULL){
               if($mandatory)
                   throw new ParmsException("Error Processing Request");
               else
                   return NULL;
           }
           else{
               return $defaultValue;
           }
    
       if (!ctype_digit($_GET[$name])) 
           return $_GET[$name];
       else 
           throw new ParmsException("Error Processing Requests");
  }
