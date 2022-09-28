<?php 
if(isset($_POST["submit"]))
{
    $to = "lazarvukadinovic7@gmail.com";
    $from = "lazarvukadinovic7@gmail.com";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following: \n\n" . $_POST["message"];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST["message"];

    $headers = "From: " . $from;
    $headers2 = "To: " . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);
    echo "Mejl je poslat. Hvala Vam " . $first_name . " poruka ce stici uskoro.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <Form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <label for="first_name">Ime: </label>
        <input type="text" name="first_name">
        <br>
        <label for="last_name">Prezime: </label>
        <input type="text" name="last_name">
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email">
        <br>
        <label for="poruka">Poruka</label>
        <textarea name="message" id="message" cols="15" rows="7"></textarea>
        <br>
        <input type="submit" name="submit">
    </Form>
    
</body>
</html>