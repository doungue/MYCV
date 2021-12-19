<?php
 class profil
 {
   public $architect= "Architecte logiciel / DevOps";
   public $nom= "Doungue stephane";
   public $nee= "Née le 15 octobre 2000<br>originaire de l'ouest cameroun";
   public $civilite= "celibataire  santé: RAS";
   public $lieu= "Résidant à logbessou<br>Douala-Cameroun";
   public $localisation= "Map:4.053276";
   public $numero= "(237)691041322";
   public $mobile= "Mobile, Télégram, Whattsapp";
   public $mail= "stephanedou19@gmail.com";
   public $sociaux= "Google+, Twitter, Github";
   public $projet= "+10 PROJETS";
   public $contact= "+31 CONTACTS";
   public $exper= "5 ANS D'EXP";
   
   function __construction($architect, $nom, $nee, $civilite, $lieu, $localisation, $numero, $mobile, $mail, $sociaux, $projet, $contact, $exper)
{
    $this->architect=$architect;
    $this->nom=$nom;
    $this->nee=$nee;
    $this->civilite=$civilite;
    $this->lieu=$lieu;
    $this->localisation=$localisation;
    $this->numero=$numero;
    $this->mobile=$mobile;
    $this->mail=$mail;
    $this->sociaux=$sociaux;
    $this->projet=$projet;
    $this->contact=$contact;
    $this->exper=$exper;
    
}
function get_architect()
{
    return $this->architect;    
}
function get_nom()
{
    return $this->nom;    
}
function get_nee()
{
    return $this->nee;    
}
function get_civilite()
{
    return $this->civilite;    
}
function get_lieu()
{
    return $this->lieu;    
}
function get_localisation()
{
    return $this->localisation;    
}
function get_numero()
{
    return $this->numero;    
}
function get_mobile()
{
    return $this->mobile;    
}
function get_mail()
{
    return $this->mail;    
}
function get_sociaux()
{
    return $this->sociaux;    
}
function get_projet()
{
    return $this->projet;    
}
function get_contact()
{
    return $this->contact;    
}
function get_exper()
{
    return $this->exper;    
}

}

$profil= new profil("Architecte logiciel / DevOps","Née le 15 octobre 2000<br>originaire de l'ouest cameroun","celibataire  santé: RAS","Résidant à logbessou<br>Douala-Cameroun","Map:4.053276","(237)691041322","Mobile, Télégram, Whattsapp","stephanedou19@gmail.com","Google+, Twitter,Github","+10 PROJETS","+31 CONTACTS","5 ANS D'EXP");
?>



<div class="conte">
                        <div class="co">
                            <div class="milieu">
                                <div class="profileText">
                                    <div class="form">
                                                <div class="rechercher">
                                                                <div class=menu>
                                                                        <div class="application">
                                                                                <div class="appli">
                                                                                        <img src="menu.ico" class="menue">
                                                                                </div>
                                                                                <div class="appli">
                                                                                        <input type="search" class="search" name="search" placeholder="Besoin d'un chef de projet?">
                                                                                </div>
                                                                                <div class="appli">
                                                                                        <img src="recher.ico" class="recher">
                                                                                </div>
                                                                                <div class="appli">
                                                                                        <img src="vertical.ico" class="vertical">
                                                                                </div>
                                                                                <div class="appli">
                                                                                        <img src="crois.ico" class="crois">
                                                                                </div>
                                                                        </div>
                                                                </div>     
                                                            </div>
                                    </div>
                                    <div class="imgBx">
                                        <img src="noa.jpg" width="100px">
                                    </div>
                                 
								 
										
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class='button-parent'>
  <input type="checkbox" id='btn'>
  <label for="btn" class='button'>
        <i class="material-icons">+</i>
      </label>

  <div class="link-parent">
    <a href='#' class='link-item' id='link-one'>
      <i class="material-icons">+</i>
    </a>
    <a href='#' class='link-item' id='link-two' title="Envoyer le cv">
      <i class="material-icons">+</i>
    </a>
<a href='editer.php' class='link-item' id='link-two' title="Envoyer le cv">
      <i class="material-icons">+</i>
    </a>
  </div>
</div>
										
										
										
										
										
                                    <div class="liv">
                                            <h2><?php echo $profil->get_architect();?></h2>
                                            </div>
                                    <div class="livre">
                                    <h2><?php echo $profil->get_nom();?></h2>
                                    </div>
                                    </div>
                            </div>
                            <div class="contactInfo">
                                    <ul>
                                        <li>
                                            <img src="anive.ico" class="icone">
                                            <span class="text"><?php echo $profil->get_nee();?><br><?php echo $profil->get_civilite();?></span>
                                        </li>
                                        <hr class="lig"/>
                                        <li>
                                                <img src="map.ico" class="iconer">
                                                <span class="texte"><?php echo $profil->get_lieu();?><br><?php echo $profil->get_localisation();?></span>
                                            </li>
                                            <hr class="lig"/>
                                            <li>
                                                    <img src="call.ico" class="icon">
                                                    <span class="textet"><?php echo $profil->get_numero();?><br><?php echo $profil->get_mobile();?></span>
                                                </li>
                                                <hr class="lig"/>
                                                <li>
                                                        <img src="mail.ico" class="ico">
                                                        <span class="textett"><?php echo $profil->get_mail();?><br><?php echo $profil->get_sociaux();?></span>
                                                    </li>
                                    </ul>
                                </div>
                                <span class="bas"><?php echo $profil->get_projet();?></span>
                                <span class="bass"><?php echo $profil->get_contact();?></span>
                                <span class="base"><?php echo $profil->get_exper();?></span>