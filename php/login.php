<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

session_start();

        $conn = mysqli_connect("localhost", "root", "", "userdocument");
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $name = $_REQUEST['name'];
        $password = $_REQUEST['password'];


        $sql="SELECT * FROM userdata where name = '$name' AND password = '$password' ";
        // Check if the query is successful
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo " - Name: " . $row["name"] . " " . $row["email"] . "<br>";
            }
        } else {
            echo "0 results";
        }

        // Close connection
        mysqli_close($conn);
        ?>

    </center>
</body>

</html>