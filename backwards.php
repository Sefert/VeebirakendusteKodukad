<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 02/04/2017
 * Time: 15:54
 */
require_once('Reverse.php');
include('magic.html');
?>
<?php
    if (isset($_POST['nimi'])){
        $name = $_POST['nimi'];
        //var_dump($name);
        //$name ="marko";
        $reverse=new Reverse;
        $reverse->_construct($name);
        //var_dump($reverse);
        echo "<h2>".$reverse->getUus()."</h2>";
        echo("<script>console.log('PHP: ".$reverse->getUus()."');</script>");
    } else{
        echo "No DATA";
    }
?>