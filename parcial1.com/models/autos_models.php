<?php

 class autos{
    public $id_auto;
    public $marcadeauto;
    public $modelo;
    public $precio;
    public $diasdealquiler;
    public $precioapagar;
    public $img;
    public $lboton;



    public function __construct($id_auto, $marcadeauto, $modelo, $precio, $diasdealquiler, $precioapagar, $img,$lboton)
    {
        $this->id_auto = $id_auto;
        $this->marcadeauto =$marcadeauto;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->diasdealquiler = $diasdealquiler;
        $this->precioapagar = $precioapagar;
        $this->img = $img;
        $this->lboton = $lboton;
    }
    

    public function setId_auto($id_auto){
        $this->id_auto = $id_auto;
    }

    public function getId_auto(){
        return $this->id_auto;

    }
    public function setMarcadeauto($marcadeauto){
        $this->marcadeauto = $marcadeauto;
    }
    public function getMarcadeauto(){
        return $this->marcadeauto;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getModelo(){
        return $this->modelo;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }
    public function getPrecio(){
        return $this->precio;
    }

    public function setDiasdealquiler($diasdealquiler){
        $this->diasdealquiler = $diasdealquiler;
    }
    public function getDiasdealquiler(){
        return $this->diasdealquiler;
    }

    public function setPrecioapagar($precioapagar){
        $this->precioapagar = $precioapagar;
    }
    public function getPrecioapagar(){
        return $this->precioapagar;
    }

    public function setImg($img){
        $this->img = $img;
    }
    public function getImg(){
        return $this->img;
    }
    public function setLboton($lboton){
        $this->lboton = $lboton;
    }
    public function getLboton(){
        return $this->lboton;
    }

 }


