<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Login Page</title>
    
    <!-- link to the css -->
    <link rel="stylesheet" href="main.css">



    <!-- link to the JS -->
    <script src="validate.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>


    <main>
        <h1>Welcome to my Mars Login Page</h1>

        <form name="frmLogin" id="frmLogin" method="post" action="w8login.php" onsubmit="return validateForm();">
            <div id="divMessage" class="errorMessage"></div>
                <?php
                    // we want to handle the form submission
                    if ($_SERVER['REQUEST_METHOD']=='POST'){
                        // get the username from the form
                        $userName = $_POST['txtUserName'];
                        // GET THE PASSWORD
                        $userPass = $_POST['txtPassword'];

                        require_once('dbConnect.php');

                        $sql = "SELECT * FROM tblUser WHERE username='$userName' AND password='$userPass'";

                        // execute the sql query
                        $result = mysqli_query($dbConn, $sql);

                        // check to see if the value was returned 
                        $check = mysqli_fetch_array($result);

                        if (isset($check)){
                            echo "success!";

                            // put the current id into the session var
                            $_SESSION['id'] = session_id();

                            $_SESSION['isLoggedIn'] = true;

                            $_SESSION['userName'] = $check['username'];

                            // redirect the user to the secure part
                            header('Location: secure.php');
                        } else {
                            // loging info not matching
                            echo "please try your info again.";
                        }
                    }
                ?>

            <!-- let's get the user's user id -->
             <label for="txtUserName" id="lblUserName">Username:</label>
             <input type="text" id="txtUserName" name="txtUserName" placeholder="Please enter your user name...">
            <br>
            <br>

             <!-- then get the password from the user -->
              <label for="txtPassword" id="lblPassword">Password:</label>
              <input type="password" id="txtPassword" name="txtPassword">
              <br>
              <br>
              <button type="submit">Login</button>
        </form>
    </main>
</body>
</html>