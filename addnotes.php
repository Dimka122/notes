<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h3>Добавление заметки</h3>
<form action="addnotes.php" method="post">
    <p>заметка:
        <input type="text" name="note" /></p>
    <p>дата:
        <input type="date" name="data" /></p>

    <input type="submit" value="Добавить">
    <a href='index.php'>Назад</a>
</form>



<?php
if (isset($_POST["note"]) && isset($_POST["data"])) {

    $conn = new mysqli("localhost", "root", "", "ddd");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    else {
        $note = $conn->real_escape_string($_POST["note"]);
        $data = $conn->real_escape_string($_POST["data"]);

        $sql = "INSERT INTO notes(note, data) VALUES ('$note', '$data')";
        if ($conn->query($sql)) {
            echo "Данные успешно добавлены";
        } else {
            echo "Ошибка: " . $conn->error;
        }
        $conn->close();
    }
}
?>
