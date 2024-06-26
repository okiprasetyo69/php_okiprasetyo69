<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        include 'db_connect.php';

        $sql = "SELECT h.hobi as hobi, count(h.person_id) as jumlah_person from hobi h join person p on h.person_id = p.id  group by hobi order by jumlah_person DESC ";
        $result = $conn->query($sql);

        echo "<form method='post' action=''><label> Cari Hobi </label><input type='text' name='keyword' placeholder='Masukkan kata kunci' autofocus/> <button type='submit'> Cari </button></form>";
        echo "</br>";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $keyword = $conn->real_escape_string($_POST['keyword']);
            $sql = "SELECT h.hobi as hobi, count(h.person_id) as jumlah_person from hobi h join person p on h.person_id = p.id where h.hobi LIKE '%$keyword%' group by hobi order by jumlah_person DESC ";
            $result = $conn->query($sql);

            if($result->num_rows > 0 ){
                echo "<table><thead><tr><th>Hobi</th><th>Jumlah Person</th></tr></thead>";
                    while ($row = $result->fetch_assoc()){
                        echo "<tbody><tr><td>".$row['hobi']."</td><td>".$row['jumlah_person']."</td></tr> </tbody>";
                    }
                echo "</table>";
            } else {
                echo "Data not found !";
            }
        } else {
            if($result->num_rows > 0 ){
                echo "<table><thead><tr><th>Hobi</th><th>Jumlah Person</th></tr></thead>";
                    while ($row = $result->fetch_assoc()){
                        echo "<tbody><tr><td>".$row['hobi']."</td><td>".$row['jumlah_person']."</td></tr> </tbody>";
                    }
                echo "</table>";
            }
        }
    ?>
</body>
</html>