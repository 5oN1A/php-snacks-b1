<!-- Snack 1
Passare come parametri GET name, mail e age 
Verificare che:
    name sia più lungo di 3 caratteri,
    mail contenga un punto e una chiocciola 
    age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$userName = "";
$userEmail = "";
$userAge = "";

if (!array_key_exists("userName", $_GET) || strlen(trim($_GET['userName'])) === 0) {
    exit("Nessun nome inserito nell'url");
};
if (!array_key_exists("userEmail", $_GET) || strlen(trim($_GET['userEmail'])) === 0) {
    exit("Nessun email inserita nell'url");
};
if (!array_key_exists("userAge", $_GET) || strlen(trim($_GET['userAge'])) === 0) {
    exit("Nessuna età inserita nell'url");
};


//NAME CHECK
$userName = $_GET["userName"];
$nameLength = strlen($userName);
$rightName = false;

if ($nameLength > 3) {
    $rightName = true;
};

//var_dump($rightName);


//EMAIL CHECK
$userEmail = $_GET["userEmail"];
$rightEmail = false;

$emailParts = explode("@", $userEmail);
$emailHasDot = strchr($emailParts[0], ".");
$emailHasAt = strchr($userEmail, "@");

if ($emailHasDot && $emailHasAt) {
    $rightEmail = true;
};

//var_dump($rightEmail);

//AGE CHECK
$userAge = $_GET["userAge"];
$ageInt = (int)$userAge;
$rightAge = false;

//var_dump($ageInt);

if ($ageInt != 0) {
    $rightAge = true;
};

//var_dump($rightAge);

if ($rightName & $rightEmail & $rightAge) {
    echo "Accesso riuscito";
}else {
    echo "Accesso negato";
}
?>