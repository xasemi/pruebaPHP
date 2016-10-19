<?php

 class ordenador
{public $marca="HP";
  public $ram="4";

  public function getmarca(){
    return $this->$marca;
  }
  public function getram(){
    return $this->$ram;
  }
  public function setmarca($marca) {
     $this ->marca = $marca;
   }
   public function setram($ram) {
     $this->ram =$ram;
   }

}
?>
