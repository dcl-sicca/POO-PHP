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
    public $vie;
    public $soin;
    
    public function __construct($nom, $forceBrut, $forceMagique, $armure, $vie, $soin)
    {
     $this->nom = $nom; 
     $this->forceBrut = $forceBrut; 
     $this->forceMagique = $forceMagique;
     $this->armure = $armure;
     $this->vie = $vie;
     $this->soin = $soin;
    }

    public function __regenere($bonusVie = 0)
    {
        if ($bonusVie == 0) {
            $bonusVie = $this->soin;
        }
        
     $this->vie += $bonusVie;
     echo '<hr>';
     echo $this->nom. ' regenere de '. $bonusVie .' points de vie.</br>'; 
     echo 'il a maintenant '.$this->vie.' points de vie.</br>';
    }

    public function __decrire()
    {
        echo '<hr>'; 
        echo 'Personnage : '.$this->nom.'</br>';
        echo "Dispose d'une force Brut de : ".$this->forceBrut.'</br>';
        echo "Dispose d'une force Magique de : ".$this->forceMagique.'</br>';
        echo "Dispose d'une armure de : ".$this->armure.'</br>';
        echo "Dispose de soin : ".$this->soin.'</br>';
        echo 'Il lui reste '.$this->vie.' points de vie.'.'</br>';
        echo '<hr></br>'; 
    }

    public function __attaqueMagique(personnage $defenseur)
    {
    $defenseur->vie = $defenseur->vie - $this->forceMagique;
    echo '<hr>';
    echo $this->nom.' attaque Magique '.$defenseur->nom.'</br>';
    echo $defenseur->nom." dispose d'une vie de : ".$defenseur->vie.'</br>';
    

        if ($defenseur->estVivant()){
            echo $defenseur->nom.' est toujours vivant <br>';
        } else {
            echo $defenseur->nom.' est mort';
        }
    echo '<hr>';   
    }

    public function __attaqueBrut(personnage $defenseur)
    {
        $defenseur->vie = $defenseur->vie - ($this->forceBrut-$this->armure);
        echo '<hr>';
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
};

?>