<?php
//Databse interactie bestend, binnen dit bestand wordt er voor gezordt dat de
// interactie met de database vanuit een centraal punt geregeld wordt

//Inloggegevens zijn van root, moeten vervangen worden door veilige gebruiker
$user = 'root';
$pass = '';
$dbhost = "localhost";
$dbname = "lab04";
//Maak connectie met database
$db = new PDO("mysql:host=$dbhost;dbnaam=$dbname;",$user, $pass);

//Vraag informatio op van instructor admin
try{
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $datainstructorAdmin = $db->prepare("SELECT * FROM `instructor-admin`");
    $datainstructorAdmin->execute(array());
    $datainstructorAdmin->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($datainstructorAdmin as $data) {
        print_r($data);
    }
} catch (PDOException $e) {

    echo $e->getMessage() . " Neem contact op met de beheerder";
}

