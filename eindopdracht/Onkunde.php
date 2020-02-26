<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['naaminput'];
    $name1 = $_POST['naaminput1'];
    $name2 = $_POST['naaminput2'];
    $name3 = $_POST['naaminput3'];
    $name4 = $_POST['naaminput4'];
    $name5 = $_POST['naaminput5'];
    $name6 = $_POST['naaminput6'];
if( empty($name) || empty($name1) ||  empty($name2) || empty($name3) || empty($name4) || empty($name5) || empty($name6)) {

    header("location: Onkunde.html");
    // Redirect to another page than form, like home or success page ?
}
else{
}
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
<img src="logo.png">
    <div id="madlibs">

    <div id="header">    
                <a href="Paniek.html">Er heerst paniek</a>
                <a href="Onkunde.html">Onkunde</a>
    </div>
    <h1 id="h1">Onkunde</h1>
    <div id="inner">

    </div>

    
    <div id="footer">
                Kevin Bouwmeester,  ©
    </div>
</div>
</body>
</html>
<script>
    var name = '<?php echo $name?>';
    var name1 = '<?php echo $name1?>';
    var name2 = '<?php echo $name2?>';
    var name3 = '<?php echo $name3?>';
    var name4 = '<?php echo $name4?>';
    var name5 = '<?php echo $name5?>';
    var name6 = '<?php echo $name6?>';
    document.getElementById('inner').innerHTML = "Er zijn veel mensen die niet kunnen " +  name + ". Neem nou " + name1 + ". Zelfs met de hulp van een " +
    name3 + " of zelfs " + name2 + " kan " + name1 + " niet " + name + ". Dat heeft niet te maken met een gebrek aan " + name4 + ". Maar met een te veel aan " + name5 + ". Te veel aan " +
    name5 + ". Te veel " + name5 + " leidt tot " + name6 + " en dat is niet goed als je wilt " + name + ". Helaas voor " + name1 + "."
 </script>