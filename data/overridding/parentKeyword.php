<?php
namespace Data;

// class parrent
class Shape {
    function getCorner():int{
        return 0;
    }
}

// class child
class Retangle extends Shape {
    function getCorner(): int
    {
        return 4;
    }

    function getCornerParent(){
        // ini akan tetap memanggil get cornner yang berada di chiild class nya
        // return $this->getCorner();

        // untuk memanggil getCorner() milik parent class maka kita gunakan keyword parent::getCorner();
        return parent::getCorner();
    }

}