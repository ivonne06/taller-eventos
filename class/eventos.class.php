<?php

 class Eventos
 {
   public static $idevento = 0;
   public $titulo;
   public $fecha;
   public $descrip;
   


    function __construct($titulo,$fecha,$descrip){
      self::$idevento++;
      $this -> titulo=$titulo;
      $this -> fecha=$fecha;
      $this -> descrip=$descrip;
   }

   //set
    function Set_titulo($titulo) {
      $this->titulo = $titulo;
   }

   function Set_fecha($fecha) {
    $this->fecha = $fecha;
  }

   function Set_descripcion($descrip) {
    $this->descrip = $descrip;
  }

    //get
    function Get_titulo()
    {
       return $this -> titulo;
    }
    function Get_fecha()
    {
       return $this ->fecha;
    }
    function Get_descripcion()
    {
       return $this ->descrip;
    }

    public function Guardar_Datos(){
      $this -> lista["idevento"]=self::$idevento;
      $this -> lista["titulo"]= $this->titulo;
      $this -> lista["fecha"]= $this->fecha;
      $this -> lista["descripcion"]= $this->descrip;
      
      array_push($this -> lista,"");

      return $this -> lista;
    }

 }

?>