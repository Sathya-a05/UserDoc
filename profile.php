<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
</head>
<body>
  <h1>User Profile</h1>
  <?php

       
        $conn = mysqli_connect("localhost", "root", "", "userdocument");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
       

        // We are going to insert the data into our sampleDB table
// INSERT INTO `userdata` (`name`, `email`, `password`, `age`, `dob`, `gender`, `contact`) VALUES ('', '', '', NULL, NULL, NULL, NULL)

        // $sql = "INSERT INTO userdata(`name`, `email`, `password`, `age`, `dob`, `gender`, `contact`) VALUES ('$name','$email''$password', NULL, NULL, NULL, NULL)";

        $sql="select * from userdata";
        // Check if the query is successful
        // $sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

        // Close connection
        mysqli_close($conn);
        ?>
  
</body>
</html>