
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recovery</title>
    <link rel="stylesheet" href="./recovery.css">
    <script src="./recovery.js"></script>
</head>

<body style="margin: 0%;">

    <div class="topnav1"
        style="background-color:#333 ; color: #ccc; left: 0; top: 0; width: 100%; position: fixed ; text-align: center;">
        <h3 style="color:white;">E-Challan System</h3>
    </div>

    <main class="container" style="margin-top: 30px;">
        <h1 style="font-size: 4.5rem; ">Forgot password</h1>

        <form method="post" action="#" id="form" class="signup-form">
            <label class="inp">
                <input class="input-text" placeholder="&nbsp;" type="name" name= "fullname" required/>
                <span class="label">Full Name</span>

            </label>
            <label class="inp">
                <input class="input-text" placeholder="&nbsp;"type="number" name= "licensenumber" required/>
                <span class="label">License number</span>

            </label>   
            <label class="inp">
                <input class="input-text"  placeholder="&nbsp;" type="date" name="date" required/>
                <span class="label">Date of Birth</span>
            
            </label>
        
            <button type="submit" value="Submit" name="submit" class="btn" style="width: 29vw;" >Submit</button>
            
            
        </form>  
        <button onclick="window.location.href ='driver.php';" value="Submit" name="submit" class="btn" style="width: 29vw;" >Cancel</button>

        <?php 
        session_start();
        include_once("connection.php"); //connecting to the database 

        if(isset($_POST['submit'])){
        // if(!empty($_POST['employeeid']) && !empty($_POST['username']) && !empty($_POST['email'])){ //checking empty values        
        $fullname = $_POST['fullname']; // defining a variable to store data from an HTML form.
            
        $licensenumber = $_POST['licensenumber']; // defining a variable to store data from an HTML form.
        
        $dateofbirth = $_POST['date']; // defining a variable to store data from an HTML form.
       
        

        //defining session variables
        $_SESSION ['date'] =$dateofbirth;
        $_SESSION ['license_number'] =$licensenumber;
        $_SESSION ['Name'] = $fullname;

        
        $sql_query= "SELECT * FROM driverdata WHERE Name = '$fullname' AND license_number ='$licensenumber' AND Date_of_Birth ='$dateofbirth'";   //matching user input values in database
        $result = $conn ->query($sql_query); //running command 

        if ($result) {
         if ($result ->num_rows >0) {
        header("Location:pwd.php"); //rediceting to another page
    
        } else {            //displaying error alert message
            echo '<script>
      alert("You have entered wrong data.!!!")</script>'; 
        }
        } else {
         echo 'Error: '.mysql_error();
        } 

        } 
        ?>
    </main>

    <div class="img">

        <img src="images/driver.png" alt="" style="height: 450px; ">
    </div>


    </div>

  
     
    </div>

</body>

</html>