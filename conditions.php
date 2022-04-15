<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if( write_your_condition_here ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( write_your_condition_here ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( write_your_condition_here ){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 2. "Different greetings according to time" Exercise

$now = ; // How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.
if( condition){
} ...

// 3. "Different greetings according to age" Exercise

if (isset($_GET['age']){
	// Form processing

}
// Form (incomplete)
?>
<form method="get" action="">
	<label for="age">...</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>

