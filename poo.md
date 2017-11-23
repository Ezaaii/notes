# notes pour comprendre la POO.
### Parce que j'ai rien compris.

Pensez vous que le lion est mort ce soir?
-[ ] Ah oui!
-[ ] Mbowé.

## exo 1

#### index.php
``` !PHP
<?php
require 'class.php';
$tableau=["test1", "test2", "test3"];
$test=new Affiche($tableau);
 ?>
```

#### class.php
``` !PHP
<?php
class Affiche{
  public $toto;
  function __construct($toto){
    $this->boucle($toto);
  }
  public function($toto){
    for($i=0; $i<count($toto); $i++){
      echo $toto[$i];
      echo "</br>";
    }
  }
}
```

## exo 2
#### toto.php
``` !php
require "class.php";
require "class2.php";
$num1=[1,2];
$num2=[5,6];
$chiffre1 = 10;
$chiffre2 = 20;

$test = new Affiche($num1);
$test2 = new numero('bonjour', $num2);
$test3->addition($chiffre1, $chiffre2);
```
#### class2.php
``` !php
class numero{
  public $boite1;
  public $boite2;

  function __construct($boite1, boite2){
    $this->boulanger($boite1, boite2);
  }
  public function boulanger($gateau1, $gateau2){
    var_dump($gateau1);
    echo '</br>';
    var_dump($gateau2);
  }
  public static function addition($num1, $num2){
    echo $num1 + $num2;
  }
}
```
## exo 3
#### toto.php
``` !php
require 'calcul.php';
$nums1 = [1,2,3,4];

$tab = new calcul($nums1);

$calc->add($nums1);
$calc->sous($nums1);
$calc->mult($nums1);
$calc->div($nums1);
```
#### class3.PHP
``` !php
class calcul{
  public $nums1;
  public function add($nums1){
    for($i=0;$i<count($nums1);$i++){
      echo $nums1[$i] + $nums1[$i+1];
      echo '</br>';
    }
  }
  public function sous($nums1){
    for($i=0;$i<count($nums1);$i++){
      echo $nums1[$i] - $nums1[$i+1];
      echo '</br>';
    }
  }
  public function mult($nums1){
    for($i=0;$i<count($nums1);$i++){
      echo $nums1[$i] * $nums1[$i+1];
      echo '</br>';
    }
  }
  public function div($nums1){
    for($i=0;$i<count($nums1);$i++){
      echo $nums1[$i] / $nums1[$i+1];
      echo '</br>';
    }
  }
}
```
