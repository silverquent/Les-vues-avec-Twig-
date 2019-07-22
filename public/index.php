<?php 
 
require '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../src/View');
$twig = new Twig_Environment($loader ,array('cache'=> false,
'debug' => true));
$twig->addExtension(new Twig_Extension_Debug);



$pokemons = ['pikachu', 'salameche' ,'carapuce', 'bulbizarre', 'tortank'];

echo $twig->render('index.html.twig' , array('pokemons' => $pokemons));


?>

