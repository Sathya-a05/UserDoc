<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "userdocument");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];

        // We are going to insert the data into our sampleDB table
// INSERT INTO `userdata` (`name`, `email`, `password`, `age`, `dob`, `gender`, `contact`) VALUES ('', '', '', NULL, NULL, NULL, NULL)

        // $sql = "INSERT INTO userdata(`name`, `email`, `password`, `age`, `dob`, `gender`, `contact`) VALUES ('$name','$email''$password', NULL, NULL, NULL, NULL)";

        $sql="INSERT INTO userdata (`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            
                //You need to redirect;
                header("Location: http://localhost:80/UserDoc/profile.php");
                exit();
            // echo "<h3>data stored in a database successfully."
            //     . " Please browse your localhost php my admin"
            //     . " to view the updated data</h3>";

            // echo nl2br("\n$name\n $last_name\n "
            //     . "$gender\n $password\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>