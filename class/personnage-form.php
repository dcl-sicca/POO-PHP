<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personnage</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
    


<?php

/* class formulaire {

    echo '<form method="get" action="traitement.php">'
    echo '<input type="text" id="nomPerso1" placeholder="Nom Perso1">'
    echo '<input type="text" id="forceBrut" placeholder="Force Brut">'
    echo '<input type="text" id="forceMagique" placeholder="Force Magique">'
    echo '<input type="text" id="armure" placeholder="Armure">'
    echo '<input type="text" id="vie" placeholder="Vie">'
    echo '<input type="text" id="soin" placeholder="Soin">'
    echo '<input type="submit" value="Enregistrer">'
    echo '</form>'
} */

class personnage
{
    public $nom;
    public $forceBrut;
    public $forceMagique;
    public $armure;
    public $soin;
    public $vie;
    
    public function __construct($nom, $forceBrut, $forceMagique, $armure, $soin, $vie)
    {
     $this->nom = $nom; 
     $this->forceBrut = $forceBrut; 
     $this->forceMagique = $forceMagique;
     $this->armure = $armure;
     $this->vie = $vie;
     $this->soin = $soin;
    }

    public function regenere($bonusVie = 0)
    {
        if ($bonusVie == 0) {
            $bonusVie = $this->soin;
        }
        
     $this->vie += $bonusVie;
     echo '<hr>';
     echo $this->nom. ' regenere de '. $bonusVie .' points de vie.</br>'; 
     echo 'il a maintenant '.$this->vie.' points de vie.</br>';
    }

    public function decrire()
    {
        echo '<i class="fas fa-user-circle"></i> Personnage : '.$this->nom.'</br>';
        echo "Dispose d'une force Brut de : ".$this->forceBrut.'</br>';
        echo "Dispose d'une force Magique de : ".$this->forceMagique.'</br>';
        echo "Dispose d'une armure de : ".$this->armure.'</br>';
        echo "Dispose de soin : ".$this->soin.'</br>';
        echo 'Il lui reste '.$this->vie.' points de vie.'.'</br>';
        echo '<hr></br>'; 
    }

    public function attaqueMagique(personnage $defenseur)
    {
    $defenseur->vie = $defenseur->vie - $this->forceMagique;
    
    echo $this->nom.' attaque Magique '.$defenseur->nom.'</br>';
    echo $defenseur->nom." dispose d'une vie de : ".$defenseur->vie.'</br>';
    

        if ($defenseur->estVivant()){
            echo $defenseur->nom.' est toujours vivant <br>';
        } else {
            echo $defenseur->nom.' est mort';
        }
    echo '<hr>';   
    }

    public function attaqueBrut(personnage $defenseur)
    {
        $defenseur->vie = $defenseur->vie - ($this->forceBrut-$this->armure);

        echo $this->nom.' attaque Brut '.$defenseur->nom.'</br>';
        echo $defenseur->nom." dispose d'une vie de : ".$defenseur->vie.'</br>';
        
    
            if ($defenseur->estVivant()){
                echo $defenseur->nom.' est toujours vivant <br>';
            } else {
                echo $defenseur->nom.' est mort';
            }
        echo '<hr>';    
    }

    public function estVivant()
    {
        if ($this->vie > 0){
            return true;
        }
        else {
            return false;
        }
    }

    public function hasard($defenseur)
    {
        $whatNow = rand(0, 2);
        if (!$whatNow) {
            $this->regenere();
        } elseif ($whatNow == 1) {
            $this->attaqueMagique($defenseur);
        } else {
            $this->attaqueBrut($defenseur);
        }
    } 
     
};

?>

</body>
</html>