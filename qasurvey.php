
<html>
<title>
question answer survey
</title>
<body>
<?php

$question='how much you know yourself?';
$answerA='very much' ;
$answerB='i think i know me!';
$answerC='huh!not this question';



echo $question; 
?>
<form method="get" action ="check.php">
 
<input type='Radio' name='mcq' value='A'>
<?php
echo $answerA .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answerB .'<br>';
?>
<input type='Radio' name='mcq' value='A'>
<?php
print $answerC .'<br>';
?>
<input type='submit' value='submit'>

</form>





</body>
</html>
