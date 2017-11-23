<?php
try
{
    // On se connecte à MySQL
    $pdo = new PDO('pgsql:host=ec2-46-137-174-67.eu-west-1.compute.amazonaws.com;dbname=df33soqaq9lked;', 'vwdpjdjljqoegd', 'd7912116db01deaa637ffdd67ce25adb5ad7b64323b444e9295c4faec5681cfd');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$query = 'INSERT INTO users (name, mail, pass) VALUES (?, ?);';
$prep = $pdo->prepare($query);

$prep->bindValue(1, 'bertand', PDO::PARAM_STR);
$prep->bindValue(2, 'mail@mail.mail', PDO::PARAM_STR);
$prep->bindValue(3, 'paaaaaasss', PDO::PARAM_STR);
$prep->execute();
$resultat = $pdo->query('SELECT * FROM users');
while ($donnees = $resultat->fetch())
{
  echo '<br/>';
  echo $donnees['name'];
  echo ' : ';
  echo $donnees['mail'];
  echo ' : ';
  echo $donnees['pass'];
}
?>
