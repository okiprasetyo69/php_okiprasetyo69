<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $totalRow = (int) $_POST['total_row'];
    $totalColumn = (int) $_POST['total_column'];

    echo "<form action='process2.php' method='post'>";
    for ($i=1; $i <= $totalColumn ; $i++) { 
        echo "<label> ".$totalRow.".".$i." </label> <input type='text' name='data[]' />";
    }
    echo "<button type='submit'> Submit </button>";
 
}
?>
