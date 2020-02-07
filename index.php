<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo "Exercise 1 starts here:";

function new_exercise(string $x)
{
    $block = "<br/><hr/><br/><br/>Exercise" . $x . "starts here:<br/>";
    echo $block;
}


new_exercise("2");

// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;


new_exercise("3");
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);

new_exercise("4");

// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:
//Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach ($week as &$day) {
    $day = substr($day, 0, strlen($day) - 3);
}

print_r($week);


new_exercise("5");

// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
for ($letter = 'a'; $letter <= 'z'; $letter++) {
    array_push($arr, $letter);
    if ($letter == "z"){
        break;
    }
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array


new_exercise("6");

// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];


function combineNames($str1 = "", $str2 = ""): string
{
    $params = [$str1, $str2];
    foreach ($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode(" - ", $params);
}


function randomGenerate(array $arr, int $amount): array
{
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $arr;
}

function randomHeroName(): string
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0, count($heroes) - 1)][rand(0, 10)];

    return $randname;
}


echo "Here is the name: " . combineNames(randomHeroName(), randomHeroName());

new_exercise("7");
function copyright(string $year)
{
    echo "&copy; $year BeCode";
}

//print the copyright

copyright(date('Y'));

new_exercise("8");
function login(string $email, string $password)
{
    if ($email == 'john@example' && $password == 'pocahontas') {
        echo 'Welcome John Smith</br>';

    } else {
        echo 'No access</br>';
    }
}

//should great the user with his full name (John Smith)
$login = login('john@example', 'pocahontas');
//no access
$login = login('john@example', 'dfgidfgdfg');
//no access
$login = login('wrong@example', 'wrong');

new_exercise("9");
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            echo 'Unacceptable Found<br />';
        }
    }
    echo 'Acceptable<br />';
}
//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');


new_exercise("10");

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];

$areTheseFruits = array_intersect($areTheseFruits, $validFruits);

var_dump($areTheseFruits);//do not change this

?>