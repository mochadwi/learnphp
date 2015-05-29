<?php
require_once ('./inc/init.php');
$titleArr = titleArr();
// Indexed Arrays
$shoppingList = array('food', 'water', 'snacks');
/* similar
$shoppingList[0] = 'food';
$shoppingList[1] = 'water';
$shoppingList[2] = 'snacks';
*/
$shoppingList[] = 'tea'; // the next available array $shoppingList[3]
$arrayLength = count($shoppingList);
echo '<ol>';
echo '<li>' . $titleArr[0] . '</li>';
echo "<ul>";
for($i = 0; $i < $arrayLength; $i++) {
	echo "<li>" . $shoppingList[$i] . "</li>";
}
echo "</ul>";

// Associative Arrays 
$book = array(
	'title' => 'Hello World!',
	'author' => 'Agate Studio'
);
/* Similar
$book['title'] = 'Hello World!';
$book['author'] = 'Agate Studio';
*/
echo '<li>' . $titleArr[1] . '</li>';
echo "<ul>";
// ksort($book);
foreach($book as $key => $value) {
	showLoops($key, $value);
}
echo "</ul>";

/* Create an empty array
-initialize array, ready to have an element added to it, inside a loop
-clear an element from an existing array
*/
// $shoppingList = array();
echo 'Clear an element of array on <b>$shoppingList</b>' . newLine();
echo 'Nothing to output, really!' . newLine();

/* Multidimensional Arrays
Case: an Associative Array inside an Indexed Arrays
*/
// Many Book
$books = array(
	array(
		'title' => 'Hello World!',
		'author' => 'Agate Studio'
	), // indexed array 0
	array(
		'title' => 'Programming is EPIC!',
		'author' => 'Agate International'
	), // indexed array 1
	array(
		'title' => 'You can change the World!',
		'author' => 'Live The Fun Way'
	) // indexed array 2
);
echo '<li>' . $titleArr[2] . '</li>';
echo '<ul>';
$cal_books = count($books);

for($i = 0; $i < $cal_books; $i++) {
	foreach($books[$i] as $key => $value) {
		showLoops($key, $value);
	}
	echo '<br />';
}
echo '</ul>';

/* Decision-making in PHP
-Comparing two values
-Testing more than one condition
*/

// More than one condition
$a = 30;
$b = 25;
echo '<li>' . $titleArr[3] . '</li>';
if($a > 5 && $b > 20) {
	echo 'True<br />';
}
if($a > 5 || $b > 30) {
	echo 'True, $b never tested' . newLine();
}

/* Switch statement for decision chains
*/
echo '<li>' . $titleArr[4] . '</li>';
$thisVar = true;
switch($thisVar) {
	case 1:
	  echo '$thisVar is 1<br />';
	  break;
	case 'apple':
	case 'banana':
	case 'orange':
	  echo '$thisVar is fruit' . newLine();
	  break;
	default:
	  echo '$thisVar is default' . newLine();
}
/* Ternary Operator

*/
echo '<li>' . $titleArr[5] . '</li>';
$age = 17;
$fareType = $age > 16 ? 'adult' : 'child';
echo $fareType . newLine();

/* Loop statement
-While
-For
*/
echo '<li>' . $titleArr[6] . '</li>';
$i = 1; // set counter (like index to start)
echo '<ul>';
while($i <= 10) {
	echo '<li>' . $i . '</li>';
	$i++;
}
echo '</ul>';
echo '<li>' . $titleArr[7] . '</li>';
echo '<ul>';
$i = 0; // set counter, "do"
do {
	echo '<li>' . $i . '</li>';
	$i++;
} while($i <= 11);
echo '</ul>';

// For statement
echo '<li>' . $titleArr[8] . '</li>';
echo '<ul>';
for($i = 9; $i < 100; $i+=10) {
	echo '<li>' . $i . '</li>';
}
echo '</ul>';

// Foreach Statement
echo '<li>' . $titleArr[9] . '</li>';
echo '<ul>';
foreach($shoppingList as $listShop) { // do something only for each value of array element
	echo '<li>' . $listShop . '</li>';
}
echo '</ul>';

echo '<li>' . $titleArr[10] . '</li>';
echo '<ul>';
foreach($book as $key => $value) { // do something only for each value of array element
	showLoops($key, $value);
}
echo '</ul>';

echo '<li>' . $titleArr[11] . '</li>';

echo '<ul>';
$photos = array(
	array(
		'name' => 'image1.jpg',
		'email' => 'image2.jpg',
		'url' => '',
		'website' => 'image3.jpg'
	),
	array(
		'username' => 'image1.jpg',
		'date' => 'image2.jpg',
		'bio' => '',
		'blog' => 'image3.jpg'
	)
);
$cal_photos = count($photos);
for($i = 0; $i < $cal_photos; $i++) {
	foreach($photos[$i] as $key => $value) { // do something only for each value of array element
		if(empty($value)) break;
		showLoops($key, $value);
	}
}
echo '</ul>';

echo '<li>' . $titleArr[12] . '</li>';
echo '<ul>';
echo 'Store array key and values to a modularized function' . newLine();
echo '</ul>';

echo '<li>' . $titleArr[13] . '</li>';
echo '<ul>';
echo '</ul>';

echo '<li>' . $titleArr[14] . '</li>';
echo '<ul>';
$number = 4;
doubleIt($number); // remains exclusive
echo newLine() . $number; // different to echo
echo '</ul>';

echo '<li>' . $titleArr[15] . '</li>';
echo '<ul>';
$numb = 5;
$numbNew = doubleNew($numb);
echo $numb . newLine();
echo $numbNew;
echo '</ul>';

echo '<li>' . $titleArr[16] . '</li>';
echo '<ul>';
$arraysMulti = delUserQuestEachWeek();
echo '</ul>';

echo '</ol>';