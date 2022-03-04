<?php

 class Eventos
 {
   //public static $idevento = 0;
   public $titulo="";
   public $fecha="";
   public $descrip="";
   public $lista = array();


    function __construct($titulo="",$fecha="",$descrip=""){
      //self::$idevento++;
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


    public function __toString(){
      return "Titulo: ".$this->titulo." Fecha: ".$this->fecha." Descripcion: ".$this->descrip;
    }

    public function Guardar_Datos(){
      $lista["titulo"]= $this->titulo;
      $lista["fecha"]= $this->fecha;
      $lista["descripcion"]= $this->descrip;
      array_push($lista);

      return $lista;
    }
 }

?>