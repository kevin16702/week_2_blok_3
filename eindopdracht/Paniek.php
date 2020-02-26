<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['naaminput'];
    $name1 = $_POST['naaminput1'];
    $name2 = $_POST['naaminput2'];
    $name3 = $_POST['naaminput3'];
    $name4 = $_POST['naaminput4'];
    $name5 = $_POST['naaminput5'];
    $name6 = $_POST['naaminput6'];
    $name7 = $_POST['naaminput7'];
if( empty($name) || empty($name1) ||  empty($name2) || empty($name3) || empty($name4) || empty($name5) || empty($name6) || empty($name7)) {

    header("location: Paniek.html");
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
    <h1 id="h1">Er heerst paniek....</h1>
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
    var name7 = '<?php echo $name7?>';
    document.getElementById('inner').innerHTML = "er heerst paniek in het koninkrijk " + name2 + 
 ". Koning " + name5 + " is ten einde raad en als koning </br>" + name5 + " ten einde raad is, dan roept hij zijn ten-einde-raadsheer " + name1 + "<br><br>" +
'"' + name1 + '! Het is een ramp! Het is een schande" <br><br>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er ana de hand?"<br><br>' + 
    '"Mijn ' + name + 'is verdwenen! Zo maar, zonder waarschuwing. En ik had net ' + name4 + ' voor hem gekocht" <br><br>' +
    '"Majesteit, uw ' + name + ' komt vast vanzelf weer terug?"<br><br>' + '"ja ' + "da's" + ' leuk en aardig, maar hoe moet ik in de tussentijd' +
    name7 + 'leren?" <br><br>' + '"Maar Sire, daar kunt u toch uw ' + name6 + ' voor gebruiken." <br><br>' + 
   '"' + name1 + ', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br> "Mij ' + name3 + ', Sire. <br><br>'
</script>