<?php
// Indexed Arrays
$shoppingList = array('food', 'water', 'snacks');
/* similar
$shoppingList[0] = 'food';
$shoppingList[1] = 'water';
$shoppingList[2] = 'snacks';
*/
$shoppingList[] = 'tea'; // the next available array $shoppingList[3]

// Associative Arrays 
$book = array(
	'title' => 'Hello World!',
	'author' => 'Agate Studio';);
/* Similar
$book['title'] = 'Hello World!';
$book['author'] = 'Agate Studio';
*/

/* Create an empty array
-initialize array, ready to have an element added to it, inside a loop
-clear an element from an existing array
*/
$shoppingList = array();
?>