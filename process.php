<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $totalRow = (int) $_POST['total_row'];
    $totalColumn = (int) $_POST['total_column'];

    // validate condition
    if($totalRow == 1){
        echo "<form action='process2.php' method='post'>";
        for ($i=1; $i <= $totalColumn ; $i++) { 
            echo "<label> ".$totalRow.".".$i." </label> <input type='text' name='data[]' />";
        }
        echo "<button type='submit'> Submit </button>";
    }
    
    if( ($totalRow > 1) && ($totalRow < $totalColumn) ){
        echo "<form action='process2.php' method='post'>";
        for ($i=1; $i < $totalColumn ; $i++) { 
            
            for($j=1; $j<= $totalRow; $j++){
               echo " <label> ". $i.".".$j." <input type='text' name='data[]' /> </label>";
            }
            echo "<label> ".$i.".". $j." </label> <input type='text' name='data[]' /> </br>";
        }
        echo "<button type='submit'> Submit </button>";
    }

    if($totalColumn == $totalColumn){
        echo "<form action='process2.php' method='post'>";
            for ($i=1; $i<=$totalColumn ; $i++) { 

                for ($j=1; $j <= $totalColumn ; $j++) { 
                    echo " <label> ". $i.".".$j." <input type='text' name='data[]' /> </label>";
                }

                echo "<label> ".$i." </label> <input type='text' name='data[]' /> </br>";
            }
        echo "<button type='submit'> Submit </button>";
    }
}
?>
