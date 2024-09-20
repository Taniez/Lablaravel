<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $host ="localhost";
    $user ="root";
    $password ="";
    $dbname="test2023";
    $conn = new mysqli($host, $user, $password, $dbname);    
    ?>
    <style>
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="add.php" method="POST">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" required><br>
        <label for="e_mail">First name:</label><br>
        <input type="text" id="e_mail" name="e_mail" required><br>
        <input type="submit" value="submit">
    </form>
    <?php
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn,$sql);
    ?>
    <h1>ตาราง</h1>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>dateregis</th>
        </tr>
    </thead>
    <tbody>
            <?php
            if(mysqli_num_rows($result)>0){
                while($customers = mysqli_fetch_assoc($result)){
                    echo "<tr><td>".$customers['id']."</td><td>".$customers['name']."</td><td>".$customers['email']."</td><td>".$customers['date_register']."</td></tr>";
                }

            }
           ?>

    </tbody>
    </table>
</body>


</html>