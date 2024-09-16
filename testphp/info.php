<?php
require("dbinfo.php");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

$idcom = new PDO('mysql:host=' . $host . ';dbname=' . $base, $user, $mdp);
if ($idcom) {

    $req = "insert into info values('$nom','$prenom')";
    $idcom->query($req);

    $req1 = "select* from info";
    $nb1 = $idcom->query($req1);

    $result1 = $nb1->fetchAll(PDO::FETCH_NUM);
}
echo "merci monsieur " . $result1[3][0] . "---" . $result1[3][1];
