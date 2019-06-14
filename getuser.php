<?php
$host="kjuncomgeqjloup.mysql.db";
$user="kjuncomgeqjloup";
$mdp="..."; (mot-de-passe)
$base="kjuncomgeqjloup";
//@mysql_connect($host,$user,$mdp) or die("Connexion au serveur impossible");
//@mysql_select_db($base) or die("Base de données non accessible : ".mysql_error());
$link = mysqli_connect("gfiimmodbtest.mysql.db", "gfiimmodbtest", "Iraite111", "gfiimmodbtest");

if (!$link) {
    echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
    echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
    echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Succès : Une connexion correcte à MySQL a été faite! La base de donnée my_db est génial." . PHP_EOL;
echo "Information d'hôte : " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>
