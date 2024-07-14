<?php
require_once('Cocteleria.php');

$ingrediente1 = new Ingrediente('limon',30);
$ingrediente2 = new Ingrediente('tequila',60);
$ingrediente3 = new Ingrediente('coientreau',30);
$ingrediente4 = new Ingrediente('menta',10);
$ingrediente5 = new Ingrediente('azucar',20);
$ingrediente6 = new Ingrediente('ron',60);
$ingrediente7 = new Ingrediente('vodka',60);
$ingrediente8 = new Ingrediente('licor de cafe',20);
$ingrediente9 = new Ingrediente('cafe',30);
$ingrediente10 = new Ingrediente('soda',15);

$margarita = new Coctel('Margarita',45,Estilo::shake);
$daiquiri = new Coctel('Daiquiri',30,Estilo::mixeado);
$mojito = new Coctel('Mojito',25,Estilo::directo);
$eMartini = new Coctel('Expresso Martini',60,Estilo::shake);

$margarita->addIngredientes($ingrediente1);
$margarita->addIngredientes($ingrediente2);
$margarita->addIngredientes($ingrediente3);

$daiquiri->addIngredientes($ingrediente1);
$daiquiri->addIngredientes($ingrediente6);
$daiquiri->addIngredientes($ingrediente5);

$mojito->addIngredientes($ingrediente1);
$mojito->addIngredientes($ingrediente4);
$mojito->addIngredientes($ingrediente5);
$mojito->addIngredientes($ingrediente10);

$eMartini->addIngredientes($ingrediente5);
$eMartini->addIngredientes($ingrediente7);
$eMartini->addIngredientes($ingrediente8);
$eMartini->addIngredientes($ingrediente9);

$cocteleria = new Cocteleria();
$cocteleria->agregarCoctel($margarita);
$cocteleria->agregarCoctel($eMartini);
$cocteleria->agregarCoctel($mojito);
$cocteleria->agregarCoctel($daiquiri);

$cocteleria->buscarCoctelMasRapido();
$cocteleria->buscarCoctelMenosTresIngre();