<form action="multiply.php" method="GET">
    <input type="text" name="num1" />
    <input type="text" name="num2" />
    <input type="submit" value="Multiply" name="submit" />
</form>


<?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        echo $_GET['num1'] *  $_GET['num2'];
    }
?>