<?php
require_once("models\autos_models.php");

class autos_controller{

    public static function mostrar(){
        $autos[] = new autos(1, "Ford","Ranger", "50 balboas", 4, 200,"..\imagenes\miniranger.jpg","mostrar2.php");
        $autos[] = new autos(2, "Toyota","Hilux", "60 balboas", 6, 250,"..\imagenes\hiluxmini.jpg","mostrar2.php");
        $autos[] = new autos(3, "Kia","Rio", "25 balboas", 5, 150,"..\imagenes\kinri.jpg","mostrar2.php");
        $autos[] = new autos(4, "Hyundai","Creta", "40 balboas", 9, 200,"..\imagenes\cretamini.jpg","mostrar2.php");
        $autos[] = new autos(5, "Honda","Civic", "37 balboas", 6, 300,"..\imagenes\civicmini.jpg","mostrar2.php");
        $autos[] = new autos(6, "Ford","Tiburon", "35 balboas", 7, 100,"..\imagenes\kugamini.jpg","mostrar2.php");
        

        return $autos;
    }
}
?>