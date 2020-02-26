
<?php
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = "";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if (empty($_POST["naaminput"])){
        $nameErr = "Name is required";
    } else {
        $name = inputprocess($_POST["naaminput"]);
    if  (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            }
        }
    if (empty($_POST["emailinput"])) {
        $emailErr = "Email is required";
      } else {
        $email = inputprocess($_POST["emailinput"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
        
}
$email = inputprocess($_POST["emailinput"]);
$gender = inputprocess($_POST["gender"]);

function inputprocess($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="stylesheet.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div id="container">
        <div id="form">
            <div>
            <p><span class="error">* required field</span></p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            naam: <input type="text" id="naaminput" name="naaminput">   <span class="error">* <?php echo $nameErr;?></span> </br>
        email: <input type="text" id="emailinput" name="emailinput">    <span class="error">* <?php echo $emailErr;?></span></br>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other  <span class="error">* <?php echo $genderErr;?></span></br>
                <input type="submit" value="submit" id="submit">
            </form>
            <div>
        </div>
    </div>  
</body>
</html>

<script>
        var naaminput = "<?php echo $name; ?>";
        var emailinput = "<?php echo $email; ?>";
        var gender = "<?php echo $gender; ?>";
        var inputs = "Naam: " + naaminput + "<br> email: " + emailinput + "<br> gender: " + gender;
</script>


<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "<script>
    var secondcontainer = document.createElement('div');
    secondcontainer.id = 'secondcontainer';
    document.getElementById('container').appendChild(secondcontainer);
    secondcontainer.innerHTML = inputs;
    </script>";
} 
?>
