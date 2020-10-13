<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
   
   <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Welcome </title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

   </head>
   
   <body>

   <?php
        $servername = "localhost";
        $username = "ca_2020";
        $password = "cap@2020";
        $dbname = "cap_db";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT ID, name, email, collegeName, collegeCity, collegeStrength, pincode, collegeAdd, mobile, whatsapp FROM cap";
        $result = mysqli_query($conn, $sql);
        
    ?>

   <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Index</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">College Name</th>
                <th scope="col">College City</th>
                <th scope="col">College Strength</th>
                <th scope="col">Pin Code</th>
                <th scope="col">College Address</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Whatsapp Number</th>
            </tr>
        </thead>
        <?php
            while($row = mysqli_fetch_assoc($result)):
        ?>
        <tbody>
            <tr>
                <td><?php echo $row["ID"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["collegeName"]; ?></td>
                <td><?php echo $row["collegeCity"]; ?></td>
                <td><?php echo $row["collegeStrength"]; ?></td>
                <td><?php echo $row["pincode"]; ?></td>
                <td><?php echo $row["collegeAdd"]; ?></td>
                <td><?php echo $row["mobile"]; ?></td>
                <td><?php echo $row["whatsapp"]; ?></td>
            </tr>
        </tbody>
        <?php endwhile; ?>
   </table>
   
   <button type="button" class="btn btn-secondary btn-lg btn-block"><a href = "display_logout.php">Sign Out</a></button>
   </body>
   
</html>