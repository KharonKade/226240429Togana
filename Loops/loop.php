<?php
echo "Activity 1";
?>

<?php
$number = 1;

while ($number <= 10) {
    echo $number . " ";
    $number++;
}
?>

<?php
$number = 2;

while ($number <= 20) {
    echo $number . " ";
    $number += 2;
}
?>

<?php
echo "Activity 2";
?>

<?php
$password = "password123";
$input = "";

do {
    echo "Please enter the password: ";


    $input = trim(fgets(STDIN));

    if ($input !== $password) {
        echo "Incorrect password. \n";
    }
} while ($input !== $password);

echo "Access Granted.\n";
?>

<?php
echo "Activity 3";
?>

<?php
$num = 7;

for ($a = 1; $a <= 10; $a++) {
    $result = $num * $a;

    echo "$num x $a = $result\n";
}
?>

<?php
echo "Activity 4";
?>

<?php
for ($a = 1; $a <= 10; $a++) {
    
    if ($a == 5){
        continue;
    }

    if ($a == 9) {
        break;
    }

    echo $a . "";
}
?>

<?php
echo "Activity 5";
?>

<?php
$num  = 1;
$sum = 0;

while ($num <= 100) {
    $sum += $num;
    $num++;
}

echo "The sum of numbers from 1 to 100 is: $sum";
?>

<?php
echo "Activity 6";
?>

<?php
$movies = ["Lord of the Rings", "The Hobbits", "Inception", "Interstellar", "Grand Turismo"];
$count = 1;

foreach ($movies as $movie) {
    echo "$count. $movie\n";
    $count++;
}
?>

<?php
echo "Activity 7";
?>

<?php
$student = [
    "Name" => "Kharon",
    "Age" => 20,
    "Grade" => 99,
    "City" => "Baguio City"
];

foreach ($students as $key => $value) {
    echo "$key: $value\n";
}
?>

<?php
echo "Activity 8";
?>

<?php
function factorial($num) {
    $result = 1;

    for ($a = $num; $a > 0; $a--) {
        $result *= $a;
    }

    return $result;
}

$num = 5;
$factorial_result = factorial($num);

echo "Factorial of $num is: $factorial_result";
?>

<?php
echo "Activity 9";
?>

<?php
for ($a =1; $a <= 50; $a++) {
    
    if ($a % 3 == 0 && $a % 5 == 0) {
        echo"FizzBuzz";
    }

    elseif ($a % 3 == 0) {
        echo "Fizz";
    }

    elseif ($a % 5 == 0) {
        echo "Buzz";
    }

    else {
        echo"$a";
    }
}
?>

<?php
echo "Activity 10";
?>

<?php
function isPrime($num) {
    
    if ($num <= 1) {
        return false;
    }

    for ($a = 2; $a <= sqrt($num); $a++) {
        
        if($num % $a == 0) {
            return false;
        }
    }
}

echo "Enter a number: ";
$input = trim(fgets(STDIN));
$num = (int)$input;

if (isPrime($num)) {
    echo "$num is a prime number.\n";
} else {
    echo "$num is not a prime number.\n";
}
?>

<?php
echo "Activity 11";
?>

<?php
$fib1 = 0;
$fib2 = 1;
$count = 0;

echo"$fib1 $fib2";

while ($count < 8) {
    $nextFib = $fib1 + $fib2;
    echo "$nextFib";

    $fib1 = $fib2;
    $fib2 = $nextFib;

    $count++;
}
?>

<?php
echo "Activity 12";
?>

<?php
function reverseString($input) {
    $reversed = "";
    $length = strlen($input);

    for ($a = $length - 1; $a >= 0; $a--) {
        $reversed .= $input[$a];
    }
    return $reversed;
}

$inputString = "Hello";

$outputString = reverseString($inputString);
echo "Input: \"$inputString\"\n";
echo "Output: \"outputString\"\n"; 
?>

