<form action="double.php" method="GET">
    <input type="text" name="num" />
    <input type="submit" value="Double It" name="submit" />
</form>


<?php
    if (isset($_GET['num'])) {
        echo $_GET['num'] * 2;
    }
    // if (isset($_POST['input2'])) {
    //     echo '<p>You entered <strong>' . $_POST['input2'] . '</strong> into text box 2</p>';
    // }
?>