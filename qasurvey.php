
<html>
<title>


question answer survey
</title>
<style>
body{
	background-image:url("https://images.pexels.com/photos/370799/pexels-photo-370799.jpeg?h=350&auto=compress&cs=tinysrgb");
	width:100%;
}


</style>
<body>


 <img src="F:\piczz\desktop wallpapers-wallpaper\say_cheese.jpg" style="width:100%;"> 
<B><U><I>welcome to awakening webpage!!!!!! <br><br>
complete this 8 questions inorder to scan yourself with the page<br><br>
first set::<br><br></b></u></i>
<?php
$question1='how much you know yourself?';
$answer1A='very much' ;
$answer1B='i think i know me!';
$answer1C='huh!not this question';


$question2='how much you believe in your yourself?';
$answer2A='me and my soul only here!' ;
$answer2B='i think i do!';
$answer2C='i belive in my magic!';

$question3='do you spent time on yourself?';
$answer3A='yes!' ;
$answer3B='i know all it matters is my future and spend time accordingly';
$answer3C='huh!i dont have patience at all..!!';

$question4='whats your taste out of this?';
$answer4A='tea' ;
$answer4B='cofee';
$answer4C='never a hot! iam icecream';


$question5='who would you choose from this?';
$answer5A='motherly love' ;
$answer5B='sisterly love';
$answer5C='would reject their love for your needs';


$question6='your favourite color?';
$answer6A='white' ;
$answer6B='blue';
$answer6C='sky blue';

$question7='favourite vehicle out of this';
$answer7A='bike' ;
$answer7B='car';
$answer7C='jeep';

$question8='relationship status';
$answer8A='in a realation' ;
$answer8B='just broke up,but help me iam getting stuck!!';
$answer8C='iam single and iam young!!!!';







$dbhost ='localhost';
$dbuser ='root';
$dbpass ='';
$dbname ='survey';


$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($connection)
{
//echo "database connected succefully";
}




$query1 ="insert into surveydata values(1,'$question1','$answer1A','$answer1B','$answer1C',0,0,0)";
$query2 ="insert into surveydata values(2,'$question2','$answer2A','$answer2B','$answer2C',0,0,0)";
$query3 ="insert into surveydata values(3,'$question3','$answer3A','$answer3B','$answer3C',0,0,0)";
$query4 ="insert into surveydata values(4,'$question4','$answer4A','$answer4B','$answer4C',0,0,0)";
$query5 ="insert into surveydata values(5,'$question5','$answer5A','$answer5B','$answer5C',0,0,0)";
$query6 ="insert into surveydata values(6,'$question6','$answer6A','$answer6B','$answer6C',0,0,0)";
$query7 ="insert into surveydata values(7,'$question7','$answer7A','$answer7B','$answer7C',0,0,0)";

//$result_set =mysqli_query($connection,$query1);

//$result_set =mysqli_query($connection,$query2);


//$result_set =mysqli_query($connection,$query3);


//$result_set =mysqli_query($connection,$query4);


//$result_set =mysqli_query($connection,$query5);


//$result_set =mysqli_query($connection,$query6);


//$result_set =mysqli_query($connection,$query7);



//if($result_set)
{
//echo "data inserted";
}
$query='select distinct from surveydata';
$result_set =mysqli_query($connection,$query);


?>




<?php
echo $question1; 
?>
<form method="get" action ="check.php">
 
<input type='Radio' name='mcq' value='A'>
<?php
echo $answer1A .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer1B .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer1C .'<br>';
?>

</form>

<?php
echo $question2 .'<br>' .'<br>'; 
?>

<form method="get" action ="qasurvey.php">
 
<input type='Radio' name='mcq' value='A'>
<?php
echo $answer2A .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer2B .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer2C .'<br>';
?>


</form>


<?php
echo $question3 .'<br>' .'<br>'; 
?>

<form method="get" action ="qasurvey.php">
 
<input type='Radio' name='mcq' value='A'>
<?php
echo $answer3A .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer3B .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer3C .'<br>';
?>

</form>


<?php
echo $question4 .'<br>' .'<br>'; 
?>

<form method="get" action ="qasurvey.php">
 
<input type='Radio' name='mcq' value='A'>
<?php
echo $answer4A .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer4B .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer4C .'<br>';
?>

</form>



<?php
echo $question5 .'<br>' .'<br>'; 
?>

<form method="get" action ="qasurvey.php">
 
<input type='Radio' name='mcq' value='A'>
<?php
echo $answer5A .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer5B .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer5C .'<br>';
?>

</form>


<?php
echo $question6 .'<br>' .'<br>'; 
?>

<form method="get" action ="qasurvey.php">
 
<input type='Radio' name='mcq' value='A'>
<?php
echo $answer6A .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer6B .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer6C .'<br>';
?>

</form>



<?php
echo $question7 .'<br>' .'<br>'; 
?>

<form method="get" action ="qasurvey.php">
 
<input type='Radio' name='mcq' value='A'>
<?php
echo $answer7A .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer7B .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer7C .'<br>';
?>

</form>




<?php
echo $question8 .'<br>' .'<br>'; 
?>

<form method="get" action ="check.php">
 
<input type='Radio' name='mcq' value='A'>
<?php
echo $answer8A .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answer8B .'<br>';
?>
<input type='Radio' name='mcq' value='A'>

<?php
print $answer8C .'<br>';
?>
<input type='submit' value='submit'>

</form>








</body>
</html>

