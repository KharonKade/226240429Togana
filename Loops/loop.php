<?php
echo "<h2><strong>Activity 1</strong></h2>";
?>

<?php
$number = 1;

while ($number <= 10) {
    echo $number . " ";
    $number++;
}
?>

<br>

<?php
$number = 2;

while ($number <= 20) {
    echo $number . " ";
    $number += 2;
}
?>

<br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password validation</title>
</head>
<body>
    <h2>Activity 2</h2>

    <form method="POST" action="">
        <label for ="password" >Enter Password: </label>
        <input type ="password" name="password" id="password" required>
        <button type="submit">Submit</button>
    </form>

<?php
$password = "password123";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $input_password = $_POST['password'];

    if ($input_password === $password) {
        echo"Access Granted.";
    } else {
        echo "Incorrect password";
    }
}
?>
</body>
</html>

<br><br>

<?php
echo "<h2><strong>Activity 3</strong></h2>";
?>

<?php
$num = 7;

for ($a = 1; $a <= 10; $a++) {
    $result = $num * $a;

    echo "$num x $a = $result<br>";
}
?>

<br><br>

<?php
echo "<h2><strong>Activity 4</strong></h2>";
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

<br><br>

<?php
echo "<h2><strong>Activity 5</strong></h2>";
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

<br><br>

<?php
echo "<h2><strong>Activity 6</strong></h2>";
?>

<?php
$movies = ["Lord of the Rings", "The Hobbits", "Inception", "Interstellar", "Grand Turismo"];
$count = 1;

foreach ($movies as $movie) {
    echo "$count. $movie<br>";
    $count++;
}
?>

<br><br>

<?php
echo "<h2><strong>Activity 7</strong></h2>";
?>

<?php
$student = [
    "Name" => "Kharon",
    "Age" => 20,
    "Grade" => 99,
    "City" => "Baguio City"
];

foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}
?>

<br><br>

<?php
echo "<h2><strong>Activity 8</strong></h2>";
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

<br><br>

<?php
echo "<h2><strong>Activity 9</strong></h2>";
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

<br><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <h2><strong>Activity 10</strong></h2>

    <form method="POST" action="">
        <label for="number">Enter a number: </label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Check</button>
    </form>
<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }

    for ($a = 2; $a <= sqrt($num); $a++) {
        if ($num % $a == 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = (int)$_POST['number'];

    if (isPrime($num)) {
        echo "$num is a prime number.<br>";
    } else {
        echo "$num is not a prime number.<br>";
    }
}
?>
</body>
</html>

<br><br>

<?php
echo "<h2><strong>Activity 11</strong></h2>";
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

<br><br>

<?php
echo "<h2><strong>Activity 12</strong></h2>";
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
echo "Input: \"$inputString\"<br>";
echo "Output: \"$outputString\"<br>"; 
?>

