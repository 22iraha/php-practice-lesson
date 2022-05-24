<from action="textRadio" method="post">
    <input type="radio" name="name" value="red">赤
    <input type="radio" name="name" value="yellow">黄
    <input type="radio" name="name" value="blue">青
    <br>
    <button type="submit">チェック</button>
</from>

<?php
$name = $_POST["name"];
echo htmlspecialchars($name);
?>

