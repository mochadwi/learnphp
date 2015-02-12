<?php

// Store array key and values to a modularized function
function showLoops($key, $value) {
	echo '<li>' . $key . ": " . $value . '</li>';
}
// Store title for each statement
function titleArr() {
	$title = array(
		'This is an Indexed Arrays',
		'This is an Associative Arrays',
		'This is a Multidimensional Arrays',
		'IF Condition',
		'Switch Statement',
		'This is a Ternary Operator',
		'While Statement',
		'Do ... While Statement',
		'For Statement',
		'Foreach Statement (Indexed Arrays)',
		'Foreach Statement (Associative Arrays)',
		'Foreach Statement (Break, Continue)',
		'Function (Modularizing your code)',
		'Wrap "title" using arrays',
		'Function (Variable inside function, remains exclusive)',
		'Returning Values from Function (Different Variable)'
	);
	return $title;
}
function doubleIt($number) {
	$number *= 2;
	echo $number;
}
function newLine() { // for new line
	$newLine = '<br />';
	return $newLine;
}
// returning values from function
// didn't use echo within its function
// declare new variable, then echo it
function doubleNew($numNew) {
	return $numNew *= 2;
}