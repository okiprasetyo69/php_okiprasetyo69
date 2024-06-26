<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST['data'];
        foreach ($data as $key => $value) {
            echo ($key+1) . '. ' . $value. "</br>";
        }
    }
 
}
?>
