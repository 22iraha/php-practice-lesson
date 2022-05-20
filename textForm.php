<form action="textForm.php" method="GET">
    <input type="text" name="text1">
    <input type="text" name="text2">
    <br>
    <button type="submit" name="button">送信</button>   
</form>

<?php
$text1 = $_GET["text1"];
$text2 = $_GET["text2"];
echo $text1 . $text2;
?>
