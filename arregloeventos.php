<?php

 class Eventos
 {
   public $titulo="";
   public $fecha="";
   public $descripcion="";

   /* function __construct($titulo,$fecha,$descripcion){
      $this -> titulo=$titulo;
      $this -> fecha=$fecha;
      $this -> descripcion=$descripcion;

   } */

   //set
    function Set_titulo($titulo) {
      $this->titulo = $titulo;
   }

   function Set_fecha($fecha) {
    $this->fecha = $fecha;
  }

   function Set_descripcion($descripcion) {
    $this->descripcion = $descripcion;
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
       return $this ->descripcion;
    }

   

 }

?>