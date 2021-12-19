<?php
class competence
{
  public  $devel= "Développement font-end";
  public $ico1= "etoile.ico";
  public $html= "HTML5, SASS, VueJS, Angular, javaFX,...";
  public $develo= "Développement back-end";
  public $java= "NodeJS, Drupal 8, Laravel, kotlin, java EE 7";
  public $devmo= "Développement mobile";
  public  $android= "Android kotlin, IOS swift, Cordova, Fluter";
  public  $design= "UI / UX Design";
  public $photoshop= "Photoshop CC, Adobe XD, Material Design";
  public $bd= "Base de donnée & Big Data";
  public $oracle= "Oracle 11g, PostgreSQL, Hadoop, Talend DI";
  public $outil= "Outils / Environnements";
  public $visual= "Visual Paradigm, Git, Docker, KBs, Linux";

  function __construction($devel, $ico1, $html, $develo, $java, $devmo, $android, $design, $photoshop, $bd, $oracle, $outil, $visual)
{
    $this->devel=$devel;
    $this->ico1=$ico1;
    $this->html=$html;
    $this->develo=$develo;
    $this->java=$java;
    $this->devmo=$devmo;
    $this->android=$android;
    $this->design=$design;
    $this->photoshop=$photoshop;
    $this->bd=$bd;
    $this->oracle=$oracle;
    $this->outil=$outil;
    $this->visual=$visual;
    
}

function get_devel()
{
    return $this->devel;    
}
function get_ico1()
{
    return $this->ico1;    
}
function get_html()
{
    return $this->html;    
}
function get_develo()
{
    return $this->develo;    
}
function get_java()
{
    return $this->java;    
}
function get_devmo()
{
    return $this->devmo;    
}
function get_android()
{
    return $this->android;    
}
function get_design()
{
    return $this->design;    
}
function get_photoshop()
{
    return $this->photoshop;    
}
function get_bd()
{
    return $this->bd;    
}
function get_oracle()
{
    return $this->oracle;    
}
function get_outil()
{
    return $this->outil;    
}
function get_visual()
{
    return $this->visual;    
}
}
$competence= new competence("Développement font-end","etoile.ico","HTML5, SASS, VueJS, Angular, javaFX,...","Développement back-end","NodeJS, Drupal 8, Laravel, kotlin, java EE 7","Développement mobile","Android kotlin, IOS swift, Cordova, Fluter", "UI / UX Design","Photoshop CC, Adobe XD, Material Design","Base de donnée & Big Data","Oracle 11g, PostgreSQL, Hadoop, Talend DI","Outils / Environnements","Visual Paradigm, Git, Docker, KBs, Linux");
?>


<div class="co">
                                <div class="faculte">
                                        <ul>
                                                <li>
                                                       
                                                    <h2 class="lane"><input type="checkbox" checked class="vide"> <?php echo $competence->get_devel();?><img src="<?php echo $competence->get_ico1();?>" class="etoile" width="12px"></h2>
                                                    <p><h2 class="langage"><?php echo $competence->get_html();?></h2></p>
                           
                                                    <P><h2 class="leon">
                                                        <div style="width: 90%;"></div>
                                                    </h2></P>
                                                </li>
                                                <li>
                                                       
                                                        <h2 class="lanea"><input type="checkbox" checked class="vide"> <?php echo $competence->get_develo();?> <img src="<?php echo $competence->get_ico1();?>" class="etoil" width="12px"></h2>
                                                        <p><h2 class="langag"><?php echo $competence->get_java();?></h2></p>
                                                     
                                                        <P><h2 class="leone">  <div style="width: 70%;"></div></h2></P>
                                                    </li>
                                                    <li>
                                                            
                                                            <h2 class="lanez"><input type="checkbox" checked class="vide">  <?php echo  $competence->get_devmo();?> <img src="<?php echo $competence->get_ico1();?>" class="etoi" width="12px"></h2>
                                                            <p><h2 class="langa"><?php echo $competence->get_android();?></h2></p>
                                                            
                                                            <P><h2 class="leona">
                                                                    <div style="width: 80%;"></div>
                                                            </h2></P>
                                                        </li>
                                                        <li>
                                                                
                                                                <h2 class="lanee"><input type="checkbox" checked class="vide">  <?php echo $competence->get_design();?> <img src="<?php echo $competence->get_ico1();?>" class="eto" width="12px"></h2>
                                                                <p><h2 class="la"><?php echo $competence->get_photoshop();?></h2></p>
                                                               
                                                                <P><h2 class="leonz">
                                                                        <div style="width: 63%;"></div>
                                                                </h2></P>
                                                            </li>
                                                            <li>
                                                                    
                                                                    <p><h2 class="laner"><input type="checkbox" checked class="vide">  <?php echo  $competence->get_bd();?> <img src="<?php echo $competence->get_ico1();?>" class="et" width="12px"></h2>
                                                                    <p><h2 class="lan"><?php echo $competence->get_oracle();?></h2></p>
                                                                    
                                                                    <P><h2 class="leonq">
                                                                            <div style="width: 95%;"></div>
                                                                    </h2></P>
                                                                </li>
                                                                <li>
                                                                      
                                                                        <p><h2 class="boote"><input type="checkbox" checked class="vide"> <?php echo $competence->get_outil();?><img src="<?php echo $competence->get_ico1();?>" class="etoiles" width="12px"></h2>
                                                                        <p><h2 class="boot"><?php echo $competence->get_visual();?></h2></p>
                                                                        
                                                                        <P><h2 class="leons">
                                                                                <div style="width: 85%;"></div>
                                                                        </h2></P>
                                                                    </li>
                                            </ul>
                                </div>
                        </div>