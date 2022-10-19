<?php 
include "./connection.php";
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
        $sql = "SELECT username, password FROM loginInfo WHERE username = '" . $_SESSION["user"] . "' AND password = '" . $_SESSION["userPassword"] . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();


        if ($result->num_rows > 0) {
            if($row["username"] == $_SESSION["user"] && $row["password"] == $_SESSION["userPassword"])
            {
               $_SESSION["loggedIn"] = 1;
                header('Location: http://nemanaziv.com/login/phpDB.php');
            }
            else
                echo "<script>alert('Nema vaseg naloga');</script>";
        }
    }
?>