<?php
    class cursus{
       public $partie= "Cursus Academique";
       public $travail= "Diplome et Formations Certifiantes";
       public $dipet= "DIPET 2 Electrotechnique - @ENSET de Douala";
       public $aout= "Août 2016 -";
       public $gestion= "Gestion d'éclairage d'une maison(Android + Arduino)";
       public  $certificat= "Oracle Certified Associate  - @Kentnix Sarl";
       public $kentnix= "@Kentnix Sarl";
       public $mars= "Mars 2009 -";
       public $admin= "Oracle Database 11g Administration";
       public  $decembre= "Décembre 2008 -";
       public $xml= "SQL2, SQL3, XML";
       public $licence= "Licence professionnelle - @Douala Institute of Tech";
       public  $dit= "@Douala Institute of Tech.";
       public $octobre= "Octobre 2008 -";
       public $reseau= "Télécommunication & Réseaux";
       public $bts= "DEC / BTS - @CCNB Dieppe - Canada";
       public $canada= "@CCNB Dieppe - Canada";
       public $septembre= "Septembre 2007 -";
       public $programmation= "Programmation Appliquée Pour Internet";
       public $bac= "Baccalauréat - @Lycée Technique de Douala Bassa";
       public $lycee= "@Lycée Technique de Douala Bassa";
       public $juin= "Juin 2005 -";
       public $major= "Electrotechnique, mention BIEN (major de centre)";
       public $sql= "Oracle SQL Certified - @Kentnix Sarl";
function __construction($partie, $travail, $dipet, $aout, $gestion, $certificat, $kentnix, $mars, $admin, $decembre, $xml, $licence, $dit, $octobre, $reseau, $bts, $canada, $septembre, $programmation, $bac, $lycee, $juin, $major, $sql)
{
    $this->partie=$partie;
    $this->travail=$travail;
    $this->dipet=$dipet;
    $this->aout=$aout;
    $this->gestion=$gestion;
    $this->certificat=$certificat;
    $this->kentnix=$kentnix;
    $this->mars=$mars;
    $this->admin=$admin;
    $this->decembre=$decembre;
    $this->xml=$xml;
    $this->licence=$licence;
    $this->dit=$dit;  
    $this->octobre=$octobre;
    $this->reseau=$reseau;
    $this->bts=$bts;
    $this->canada=$canada;
    $this->septembre=$septembre;
    $this->programmation=$programmation;
    $this->bac=$bac;
    $this->lycee=$lycee;
    $this->juin=$juin;
    $this->major=$major;
    $this->sql=$sql;                     
}
function get_partie()
{
    return $this->partie;    
}
function get_travail()
{
    return $this->travail;
}  
function get_dipet()
{
    return $this->dipet;    
}          
function get_aout()
{
    return $this->aout;    
} 
function get_gestion()
{
    return $this->gestion;    
}
function get_certificat()
{
    return $this->certificat;    
} 
function get_kentnix()
{
    return $this->kentnix;    
}
function get_mars()
{
    return $this->mars;    
}
function get_admin()
{
    return $this->admin;    
}
function get_decembre()
{
    return $this->decembre;    
}
function get_xml()
{
    return $this->xml;    
}
function get_licence()
{
    return $this->licence;    
}
function get_dit()
{
    return $this->dit;    
}
function get_octobre()
{
    return $this->octobre;    
}
function get_reseau()
{
    return $this->reseau;    
}
function get_bts()
{
    return $this->bts;    
}
function get_canada()
{
    return $this->canada;    
}
function get_septembre()
{
    return $this->septembre;    
}
function get_programmation()
{
    return $this->programmation;    
}
function get_bac()
{
    return $this->bac;    
}
function get_lycee()
{
    return $this->lycee;    
}
function get_juin()
{
    return $this->juin;    
}
function get_major()
{
    return $this->major;    
}
function get_sql()
{
    return $this->sql;    
}
    } 
    $cursus = new cursus("Cursus Academique","Diplome et Formations Certifiantes","DIPET 2 Electrotechnique - @ENSET de Douala", "Août 2016 -","Gestion d'éclairage d'une maison(Android + Arduino)","Oracle Certified Associate  -", "@Kentnix Sarl","Mars 2009 -","Oracle Database 11g Administration","Décembre 2008 -","SQL2, SQL3, XML","Licence professionnelle -","@Douala Institute of Tech.","Octobre 2008 -", "Télécommunication & Réseaux","DEC / BTS -", "@CCNB Dieppe - Canada","Septembre 2007 -","Programmation Appliquée Pour Internet","Baccalauréat -","@Lycée Technique de Douala Bassa","Juin 2005 -", "Electrotechnique, mention BIEN (major de centre)","Oracle SQL Certified -");
 
?>

<div class="con">
                        <div class="footer">
                        <div class="foot">
                                <div class="boxal">
                                        <img src="graduation.ico" class="grade">
                                        <img src="troisp.ico" class="trois">
                                        <div class="heder"><?php echo $cursus->get_partie();?> </div>
                                        <div class="row"><?php echo $cursus->get_travail();?></div>
                               </div>
                        </div>
                        <div class="footere">
                                <div class="boder">
                                    <div class="temps">
                                    <p><h2 class="point"><?php echo $cursus->get_dipet();?></h2></p>
                                    <p><h2 class="po"><?php echo $cursus->get_aout();?><div class="poin"><?php echo $cursus->get_gestion();?></div></h2></p>
                                    <hr class="ligneal"/>
                                </div>
                                <div class="temps">
                                    <p><h2 class="point"><?php echo $cursus->get_certificat();?></h2></p>
                                    <p><h2 class="po"><?php echo $cursus->get_mars();?><div class="poin"><?php echo $cursus->get_admin();?></div></h2></p>
                                    <hr class="ligneal"/>
                                </div>

                                <div class="temps">
                                    <p><h2 class="point"><?php echo $cursus->get_sql();?></h2></p>
                                    <p><h2 class="po"><?php echo $cursus->get_decembre();?><div class="poin"><?php echo $cursus->get_xml();?></div></h2></p>
                                    <hr class="ligneal"/>
                                </div>
                                <div class="temps">
                                    <p><h2 class="point"><?php echo $cursus->get_licence();?></h2></p>
                                    <p><h2 class="po"><?php echo $cursus->get_octobre();?><div class="poin"><?php echo $cursus->get_reseau();?></div></h2></p>
                                    <hr class="ligneal"/>
                                </div>
                                    
                                <div class="temps">
                                    <p><h2 class="point"><?php echo $cursus->get_bts();?></h2></p>
                                    <p><h2 class="po"><?php echo $cursus->get_septembre();?><div class="poin"><?php echo $cursus->get_programmation();?></div></h2></p>
                                    <hr class="ligneal"/>
                                </div>
                                <div class="temps">
                                    <p><h2 class="point"><?php echo $cursus->get_bac();?></h2></p>
                                    <p><h2 class="po"><?php echo $cursus->get_juin();?><div class="poin"><?php echo $cursus->get_major();?></div></h2></p>
                                    <hr class="ligneal"/>
                                </div>
                                <div class="temps">
                                    <p><h2 class="point"><?php echo $cursus->get_bac();?></h2></p>
                                    <p><h2 class="po"><?php echo $cursus->get_juin();?><div class="poin"><?php echo $cursus->get_major();?></div></h2></p>
                                    <hr class="ligneal"/>
                                </div>
                                <div class="temps">
                                    <p><h2 class="point"><?php echo $cursus->get_bac();?></h2></p>
                                    <p><h2 class="po"><?php echo $cursus->get_juin();?><div class="poin"><?php echo $cursus->get_major();?></div></h2></p>
                                    <hr class="ligneal"/>
                                </div>
                                <div class="temps">
                                    <p><h2 class="point"><?php echo $cursus->get_bac();?></h2></p>
                                    <p><h2 class="po"><?php echo $cursus->get_juin();?><div class="poin"><?php echo $cursus->get_major();?></div></h2></p>
                                    <hr class="ligneal"/>
                                </div>
                        </div>
                        </div>
                        </div>