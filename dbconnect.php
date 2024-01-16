<?php 
define('USER',"root"); 
define('PASSWD',""); 
define('SERVER',"localhost"); 
define('BASE',"sddv_plongee"); 
define('PORT',"3306"); 


function dbconnect(){ 
  $dsn="mysql:dbname=".BASE.";host=".SERVER.";port=".PORT; 
  try{ 
    $connexion=new PDO($dsn,USER,PASSWD); 
    $connexion->exec("set names utf8"); //Support utf8
  } 
  catch(PDOException $e){ 
    printf("Échec de la connexion: %s\n", $e->getMessage()); 
    exit(); 
  } 
  return $connexion; 
} 
?> 