<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 08/04/2017
 * Time: 22:17
 */
$e="Blue";
$t="White";
$txta="Kirjuta siia";
if (isset($_POST['ta']) && $_POST['ta']!="") {
    $txta=htmlspecialchars($_POST['ta']);
    echo("<script>console.log('PHP: ".$txta."');</script>");
}
if (isset($_POST['bgc']) && $_POST['bgc']!="") {
    $e=htmlspecialchars($_POST['bgc']);
    echo("<script>console.log('PHP: ".$e."');</script>");
}
if (isset($_POST['tc']) && $_POST['tc']!="") {
    $t=htmlspecialchars($_POST['tc']);
    echo("<script>console.log('PHP: ".$t."');</script>");
}
if (isset($_POST['bc']) && $_POST['bc']!="") {
    $b=htmlspecialchars($_POST['bc']);
    echo("<script>console.log('PHP: ".$b."');</script>");
}
if (isset($_POST['jn']) && $_POST['jn']!="") {
    $l=htmlspecialchars($_POST['jn']);
    echo("<script>console.log('PHP: ".$l."');</script>");
}
if (isset($_POST['jr']) && $_POST['jr']!="") {
    $lr=htmlspecialchars($_POST['jr']);
    echo("<script>console.log('PHP: ".$lr."');</script>");
}
?>
<html>
<head>
</head>
<body>
<form style="display: inline-block; float: initial; width:300px " action="8s.php" method="post">
    <textarea style="height: 200px; width: 300px; background-color: <?php echo $e?>; color: <?php echo $t?>;border: <?php echo $l?>px solid <?php echo $b?>; border-radius: <?php echo $lr?> px;-webkit-border-radius: <?php echo $lr?>px;
            -moz-border-radius: <?php echo $lr?>px;" name="ta"><?php echo $txta?></textarea>
    <label>Background color:</label>
    <input type="color" name="bgc" value="<?php echo $e?>">
    <label>Text color:</label>
    <input type="color" name="tc" value="<?php echo $t?>">
    <label>Border color:</label>
    <input type="color" name="bc" value="<?php echo $b?>">
    <label>Joone paksus:</label>
    <input type="number" name="jn" value="<?php echo $l?>">
    <label>Joone raadius:</label>
    <input type="number" name="jr" value="<?php echo $lr?>">
    <button type="submit">Sisesta</button>
</form>
</body>
</html>
