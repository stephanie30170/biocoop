<?php 
   $listeJan = array(  "avocat"=>"avocado.png", "betterave"=>"beet.png", "brocoli"=>"broccoli.png",
   "carrotte"=>"carrot.png", "choux-fleur"=>"cauliflower.png", "champi"=>"mushrooms.png",
   "epinard"=>"spinach.png", "citron"=>"lemon.png", "banane"=>"bananas.png", "asperge"=>"asparagus.png",
   "poire"=>"pear.png", "kiwi"=>"kiwi.png");
  $listeFev = array(  "poireau"=>"leek.png", "laitue"=>"lettuce.png", "navet"=>"turnip.png",
   "avocat"=>"avocado.png", "betterave"=>"beet.png","citron"=>"lemon.png");
  $listeMar = array(  "avocat"=>"avocado.png", "betterave"=>"beet.png", "brocoli"=>"broccoli.png",
   "banane"=>"bananas.png", "citron"=>"lemon.png");
  $listeAvr = array(  "asperge"=>"asparagus.png", "artichaut"=>"artichoke.png", "avocat"=>"avocado.png", 
  "betterave"=>"beet.png");
  $listeMai = array(  "asperge"=>"asparagus.png", "artichaut"=>"artichoke.png", "avocat"=>"avocado.png", 
  "betterave"=>"beet.png", "banane"=>"bananas.png", "fraise"=>"strawberry.png");
  $listeJuin = array("artichaut"=>"artichoke.png", "aubergine"=>"eggplant.png","epinard"=>"spinach.png",
  "courgette"=>"zucchini.png", "banane"=>"bananas.png", "fraise"=>"strawberry.png");
  $listeJuill = array("aubergine"=>"eggplant.png", "courgette"=>"zucchini.png", "tomate"=>"tomato.png",
  "banane"=>"bananas.png","citron"=>"lemon.png","pêche"=>"peach.png");
  $listeAou = array("banane"=>"bananas.png","citron"=>"lemon.png","pêche"=>"peach.png","aubergine"=>"eggplant.png", 
  "courgette"=>"zucchini.png", "tomate"=>"tomato.png");
  $listeSep = array("poire"=>"pear.png","raisin"=>"grapes.png","banane"=>"bananas.png", "citron"=>"lemon.png",
"courges"=>"squash.png","courgette"=>"zucchini.png", "tomate"=>"tomato.png");
  $listeOct = array("poire"=>"pear.png","raisin"=>"grapes.png","banane"=>"bananas.png", "citron"=>"lemon.png",
  "courges"=>"squash.png","courgette"=>"zucchini.png", "tomate"=>"tomato.png");
  $listeNov = array("poire"=>"pear.png","champi"=>"mushrooms.png","betterave"=>"beet.png","carrotte"=>"carrot.png",
  "artichaut"=>"artichoke.png", "raisin"=>"grapes.png");
  $listeDec = array("avocat"=>"avocado.png", "betterave"=>"beet.png","navet"=>"turnip.png", "brocoli"=>"broccoli.png",
  "banane"=>"bananas.png", "citron"=>"lemon.png","poire"=>"pear.png", "kiwi"=>"kiwi.png","châtaigne"=>"chestnut.png");
$liste = "";
$moisEnLettre = "";
$moisEnChiffre = "";
$moisSuivant = $_GET['moisSuivant'];
$moisPrecedent = $_GET['moisPrecedent'];
if ($moisSuivant==0){$moisEnChiffre=$moisPrecedent;$moisSuivant=$moisPrecedent;}
    else{$moisEnChiffre=$moisSuivant;$moisPrecedent=$moisSuivant-1;}

switch ($moisEnChiffre) {
    case 1:
        $moisEnLettre = "janvier";
        $liste = $listeJan;
        break;
    case 2:
        $moisEnLettre = "fevrier";
        $liste = $listeFev;
        break;
    case 3:
        $moisEnLettre = "mars";
        $liste = $listeMar;
        break;
    case 4:
        $moisEnLettre = "avril";
        $liste = $listeAvr;
        break;
    case 5:
        $moisEnLettre = "mai";
        $liste = $listeMai;
        break;
    case 6:
        $moisEnLettre = "juin";
        $liste = $listeJuin;
        break;
    case 7:
        $moisEnLettre = "juillet";
        $liste = $listeJuill;
        break;
    case 8:
        $moisEnLettre = "août";
        $liste = $listeAou;
        break;
    case 9:
        $moisEnLettre = "septembre";
        $liste = $listeSep;
        break;
    case 10:
        $moisEnLettre = "octobre";
        $liste = $listeOct;
        break;
    case 11:
        $moisEnLettre = "novembre";
        $liste = $listeNov;
        break;
    case 12:
        $moisEnLettre = "décembre";
        $liste = $listeDec;
        break;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les légumes au fil des mois</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><img id="img-logo" src="logo-biocoop.png" alt="logo de Biocoop"></header>
    <div id="tableau">
            <?php foreach ($liste as $legume => $image){ ?>
                <div id="item">
                    <img src="<?php echo $image ?>" alt="image du légume">
                    <p id="legende"> <?php echo $legume ?> </p>
                </div>
            <?php } ?>
    </div>  

    <?php 
    if ($moisEnChiffre==1){$moisPrecedent=12;}else{$moisPrecedent=$moisEnChiffre-1;}
    if($moisEnChiffre==12){$moisSuivant=1;}else{$moisSuivant+=1;}
    ?>

    <div id="footer">
        <a href="calendrier.php?moisPrecedent=<?php echo $moisPrecedent ?>&moisSuivant=0"><img id="img-fleche" src="left-arrow.png" alt="fleche gauche"></a>
        <h1><?php echo $moisEnLettre ?> <h1>
        <a href="calendrier.php?moisSuivant=<?php echo $moisSuivant ?>&moisPrecedent=0"><img id="img-fleche" src="right-arrow.png" alt="fleche droite"></a>
    </div>
</body>
</html>
