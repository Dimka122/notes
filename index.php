<html>
<head>
    <title></title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
<div>
<?php
$conn = new mysqli("localhost", "root", "", "ddd");
if($conn->connect_error){
    echo 'ERROR';
}
else{
    echo 'OK';

    $conn->close();
}
?>
</div>

</body>
</html>
