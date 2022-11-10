<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<?php 
include 'header.php';
?>
<form method="post">
<div class="container w-75 p-2" id="form">
    <div class="row">
        <div class="col m-4">
            <div class="mb-5">
                
                <label for="Namn">Namn</label><br>
                <input type="text" id="Namn" name="Firstname" value=""><br>
            </div>

            <div class="mb-3">
                <input type="radio" id="Klassisk" name="Massage" value="Klassisk">
                <label for="Klassisk">Klassisk</label><br>
                <input type="radio" id="Sportmassage" name="Sportmassage" value="Sportmassage">
                <label for="Sportmassage">Sportmassage</label><br>
                <input type="radio" id="Fysioterapi" name="Fysioterapi" value="Fysioterapi">
                <label for="Fysioterapi">Fysioterapi</label>
            </div>
<br>
            <div class="mb-3">
                <input type="time" id="Timestart" name="Timestart" value="13:00" 
                min="00:00" max="24:00" required>

                <input type="time" id="Timeend" name="Timeend" value="14:00"
                 min="00:00" max="24:00" required>
            </div>

        </div>
        <div class="col m-4">
            
            <div class="mb-3">
                <label for="Phonenumber">Rubrik</label><br>
                <input type="text" id="Phonenumber" name="Phonenumber" value=""><br>
            </div>

            <div class="mb-3">
                <label for="date">Date</labael><br>
                <input type="date" id="Datum" name="Datum" value="" >
            </div>

<br>
            <div class="button-margin">    
                <input type="submit" name="form-submit" value="Submit" class="button">
            </div>
        </div>
        </form>
    </div>
</div>

<?php
include 'footer.php' ;
?>
</body>
</html>


<?php

include 'config.php';

$queryResult = $conn->query("SELECT * FROM bookings");

if(isset($_POST['form-submit'])){
    
    $Firstname =  cleaninput($_POST['Firstname']);
	$Datum = cleaninput($_POST['Datum']);
    $Massage = cleaninput($_POST['Massage']);
    $Timestart = cleaninput($_POST['Timestart']);
    $Timeend = cleaninput($_POST['Timeend']);
    $Phonenumber = cleaninput($_POST['Phonenumber']);

/*
    echo "<br>";
    echo $Firstname . "<br>" ;
    echo $Datum . "<br>" ;
    echo $Massage . "<br>";
    echo $Timestart . "<br>";
    echo $Timeend . "<br>";
    echo $Phonenumber . "<br>";
*/
    $stmt_insertPerson = $conn->prepare("INSERT INTO bookings (Firstname,Datum,Massage,Timestart,Timeend,Phonenumber) VALUES (:Firstname,:Datum,:Massage,:Timestart,:Timeend,:Phonenumber)");
	$stmt_insertPerson->bindparam(':Firstname',$Firstname, PDO::PARAM_STR);
	$stmt_insertPerson->bindparam(':Datum',$Datum, PDO::PARAM_STR);
    $stmt_insertPerson->bindparam(':Massage',$Massage, PDO::PARAM_STR);
    $stmt_insertPerson->bindparam(':Timestart',$Timestart, PDO::PARAM_STR);
    $stmt_insertPerson->bindparam(':Timeend',$Timeend, PDO::PARAM_STR);
    $stmt_insertPerson->bindparam(':Phonenumber',$Phonenumber, PDO::PARAM_STR);


if($stmt_insertPerson->execute()){
	echo "Article create succesfully";
}
else{
	echo "ERROR";
}
    
}

function cleaninput($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
}


?>

