<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'header.php';
?>

<?php
include 'config.php';

$queryResult = $conn->query("SELECT * FROM bookings");


echo "<div class='center'>";
echo "Today";
echo "</div>";
$result = $conn->query("SELECT * FROM bookings where DATE(Datum)=CURDATE() order by Timestart ASC");
foreach($result as $row){
    echo "<div class='container w-75 p-2 text-center'>";
    echo "<div class='row align-items-center'>";

        echo "<div class='col'>";
        echo "Börjar-slutar" . "<br>";
        echo $row['Timestart'] . "-";
        echo $row['Timeend'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Massage typ" . "<br>";
            echo $row['Massage'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Datum" . "<br>";
            echo $row['Datum'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Firstname" . "<br>";
            echo $row['Firstname'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Telefonnumber" . "<br>";
            echo $row['Phonenumber'] . "<br>";
        echo "</div>";



    


	echo "</div>";
    echo "</div>";
}

echo "<div class='center'>";
echo "Tomorrow";
echo "</div>";

$result = $conn->query("SELECT * FROM bookings where DATE(Datum)=CURDATE() + 1 order by Timestart ASC");
foreach($result as $row){
    echo "<div class='container w-75 p-2 text-center'>";
    echo "<div class='row align-items-center'>";

        echo "<div class='col'>";
        echo "Börjar-slutar" . "<br>";
        echo $row['Timestart'] . "-";
        echo $row['Timeend'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Massage typ" . "<br>";
            echo $row['Massage'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Datum" . "<br>";
            echo $row['Datum'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Firstname" . "<br>";
            echo $row['Firstname'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Telefonnumber" . "<br>";
            echo $row['Phonenumber'] . "<br>";
        echo "</div>";



    


	echo "</div>";
    echo "</div>";
}


echo "<div class='center'>";
echo "Everything";
echo "</div>";

$result = $conn->query("SELECT * FROM bookings where Datum order by Datum ASC");
foreach($result as $row){
    echo "<div class='container w-75 p-2 text-center'>";
    echo "<div class='row align-items-center'>";

        echo "<div class='col'>";
        echo "Börjar-slutar" . "<br>";
        echo $row['Timestart'] . "-";
        echo $row['Timeend'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Massage typ" . "<br>";
            echo $row['Massage'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Datum" . "<br>";
            echo $row['Datum'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Firstname" . "<br>";
            echo $row['Firstname'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Telefonnumber" . "<br>";
            echo $row['Phonenumber'] . "<br>";
        echo "</div>";



    


	echo "</div>";
    echo "</div>";
}



/*
foreach ($queryResult as $row)
{
echo "<div class='container w-75 p-2 text-center'>";
    echo "<div class='row align-items-center'>";

        echo "<div class='col'>";
        echo "Namn" . "<br>";
            echo $row['Firstname'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Massage typ" . "<br>";
            echo $row['Massage'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Börjar-slutar" . "<br>";
            echo $row['Timestart'] . "-";
            echo $row['Timeend'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Datum" . "<br>";
            echo $row['Datum'] . "<br>";
        echo "</div>";

        echo "<div class='col'>";
        echo "Telefonnumber" . "<br>";
            echo $row['Phonenumber'] . "<br>";
        echo "</div>";



    


	echo "</div>";
    echo "</div>";
    
}
*/

?>






<?php
include 'footer.php'
?>    
</body>
</html>


