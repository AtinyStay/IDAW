<!DOCTYPE html>

<html>
    <body>
        <form id="style_form" action="index.php" method="GET">
            <select name="css">
                <option value="style1">style1</option>
                <option value="style2">style2</option>
            </select>
            <input type="submit" value="Appliquer" />
        </form>
        </body>
</html>

<?php
if(isset($_GET['css'])) {
    $cookie_name = $_GET['css'];
    $cookie_value = $_GET['css'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
} else {
    $cookie_name = 'style1';
    $cookie_value = 'style1';
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}
$link = $cookie_value;
?>

<html>
    <head>
    <link href="$link" rel="stylesheet">
</head>
</html>

<?php
    echo "Test de couleur";
?>


