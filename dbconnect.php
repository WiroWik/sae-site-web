<?php 
define('USER',"root"); 
define('PASSWD',""); 
define('SERVER',"localhost"); 
define('BASE',"sddv_plongee"); 
define('PORT',"3306"); 


function dbconnect(){ 
  $dsn="mysql:dbname=".BASE.";host=".SERVER.";port=".PORT; /*MySQL*/
  try{ 
    $connexion=new PDO($dsn,USER,PASSWD); 
    $connexion->exec("set names utf8"); //Support utf8
  } 
  catch(PDOException $e){
    $dsn="mysql:dbname=".BASE.";host=".SERVER.";port=3307"; /*Maria DB*/
    try {
      $connexion=new PDO($dsn,USER,PASSWD); 
      $connexion->exec("set names utf8"); //Support utf8
    }
    catch(PDOException $e1) {
      printf("Échec de la connexion: %s\n", $e1->getMessage()); 
      exit(); 
    }
  } 
  return $connexion; 
} 
?> 