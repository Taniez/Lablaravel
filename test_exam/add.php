<?php 
$host ="localhost";
$user ="root";
$password ="";
$dbname="test2023";
$conn = mysqli_connect($host, $user, $password, $dbname);

if ($conn) {
    echo "Connected successfully";
    if(isset($_POST["fname"]) && isset($_POST["e_mail"])){
        echo "Connected successfully";
        $fname = $_POST["fname"];
        $email = $_POST["e_mail"];
        echo"$fname";
        echo "$email";
        $sql = "INSERT INTO `customers` (`id`, `name`, `email`, `date_register`) VALUES (NULL, '$fname', '$email', current_timestamp());";
    }
    if (mysqli_query($conn, $sql)) {
        echo"<script>alert('New record created successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
}
else{
    echo "Error";
}

mysqli_close($conn);
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="abc">
    
</body>
</html>
<script>
    function abc(){
        let a=document.getElementById("fname");
        alert(a.innerHTML,"chopheeemak");
    }
</script> -->