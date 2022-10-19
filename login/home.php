<?php 
    session_start();

    $_SESSION["servername"] = "localhost";
    $_SESSION["username"] = "root";
    $_SESSION["password"] = "";
    $_SESSION["dbname"] = "loginData";
    $_SESSION["conn"] = new mysqli($_SESSION["servername"], $_SESSION["username"], $_SESSION["password"], $_SESSION["dbname"]);

    $_SESSION["user"] = "";
    $_SESSION["userPassword"] = "";

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pocetna strana</title>
        <style>
            .error {color: #FF0000;}
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>

        <?php 
            $userErr = $userPasswordErr = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (empty($_POST["username"]))
                {
                    $userErr = "Morate uneti username";
                }
                else
                {
                    $_SESSION["user"] = test_input($_POST["username"]);
                    $userErr = "";
                }

                if (empty($_POST["password"]))
                {
                    $userPasswordErr = "Morate uneti password";
                }
                else
                {
                    $_SESSION["userPassword"] = test_input($_POST["password"]);
                    $userPasswordErr = "";
                }
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if(!empty($_SESSION["user"]) && !empty($_SESSION["userPassword"]))
            {
                $sql = "SELECT username, password FROM loginInfo";
                $result = $_SESSION["conn"]->query($sql);
                $k = 0;

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        if($row["username"] == $_SESSION["user"] && $row["password"] == $_SESSION["userPassword"])
                        {
                            $k = 1;
                            header('Location: http://nemanaziv.com/login/phpDB.php');
                            break;
                        }
    
                    }
                    if($k == 0)
                    {
                        echo "<script>alert('Nema vaseg naloga');</script>";
                    }
                }
            }
        ?>

        <div class="container">
            <h1 class="text-center mt-3">Login page</h1>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="text-center mt-5">
                <label class="mt-2" for="username">Username: </label>  
                <input class="mt-1" type="text" name="username"> <span class="error">* <?php echo $userErr;?></span>
                <br>
                <label class="mt-2" for="password">Password: </label> 
                <input class="mt-1" type="password" name="password"> <span class="error">* <?php echo $userPasswordErr;?></span>
                <br>
                <input class="btn btn-primary mt-2" type="submit" value="LOGIN">
            </form>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        
    </body>
</html>