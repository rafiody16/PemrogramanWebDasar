<?php 

$myArray = array();

if (empty($myArray)) {
    echo "Array tidak terdifinisikan atau kosong. <br>";
} else {
    echo "Array terdifinisikan dan tidak kosong. <br>";
}

if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisikan atau kosong. <br>";
} else {
    echo "Variabel terdefinisikan dan tidak kosong. <br>";
}

?>