<html>
<head>
    <title></title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
<?php
session_start();
echo 'id='.session_id().'</br>';
$conn = new mysqli("localhost", "root", "", "ddd");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM notes";
if($result = $conn->query($sql)){
    echo "<table><tr><th>заметка</th><th>дата</th></tr>";
    foreach($result as $row){
        echo "<tr>";
        echo "<td>" . $row["note"] . "</td>";
        echo "<td>" . $row["data"] . "</td>";


        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
<a href='addnotes.php'>Добавить заметку</a>

</body>
</html>
