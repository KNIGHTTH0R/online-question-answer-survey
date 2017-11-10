
<html>
<title>
question answer survey
</title>
<body>


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
<input type='submit' value='submit'>

</form>


<?php
echo $question2; 
?>
<form method="get" action ="check.php">
 
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
<input type='submit' value='submit'>

</form>




mysqli_close($connection);
</body>
</html>

