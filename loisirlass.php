<?php
  class loisir
  {
   public $point= "Point d'intérêts";
   public $simple= "Simple passe-temps pour se faire un peu plaisir";
   public $image1= "image.png";
   public $langue= "Langues";
   public $pratique= "Pratiquées en entreprise";
   public $francais= "Français";
   public $anglais= "Anglais";

   function __construction($point, $simple, $image1, $langue, $pratique, $francais, $anglais)
{
    $this->point=$point;
    $this->simple=$simple;
    $this->image1=$image1;
    $this->langue=$langue;
    $this->pratiqoe=$pratique;
    $this->francais=$francais;
    $this->anglais=$anglais;              
} 

function get_point()
{
    return $this->point;    
}
function get_simple()
{
    return $this->simple;    
}
function get_image1()
{
    return $this->image1;    
}
function get_langue()
{
    return $this->langue;    
}
function get_pratique()
{
    return $this->pratique;    
}
function get_francais()
{
    return $this->francais;    
}
function get_anglais()
{
    return $this->anglais;    
}

}

$loisir = new loisir("Point d'intérêts","Simple passe-temps pour se faire un peu plaisir","image.png","Langues","Pratiquées en entreprise","Français","Anglais");
?>


<div class="con">
                    <div class="deux">
                        <div class="un">
                                <div class="boxit">
                                        <h2><div class="langue"><?php echo $loisir->get_point();?></div>
                                        <div class="lang"><?php echo $loisir->get_simple(); ?></div></h2>
                                        <img src="<?php echo $loisir->get_image1();?>" class="oller">
                                      </div>
                                    </div>
            
                        <div class="un">
                                <div class="boxing">
                                        <h2><div class="langue"><?php echo $loisir->get_langue();?></div>
                                        <div class="lang"><?php echo $loisir->get_pratique();?></h2>
                                        <ul>
                                            <li>
                                              
                                                <div class="lan"><input type="checkbox" checked class="vide"><?php echo $loisir->get_francais();?></div>
                                            </li>
                                            <li>
                                                
                                                    <div class="lan"><input type="checkbox" checked class="vide"><?php echo $loisir->get_anglais();?></div>
                                        
                                                </li>
                                        </ul>
                                    </div>
                        </div>
                    </div>
                  </div>