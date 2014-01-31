
<!Doctype html>
<html lang="en">
<head>
<title>DBDWT Quiz</title>
</head>
<body>
<span style="color: orange;">The quiz</span> 
<?php

if (!isset($_REQUEST["answer"])) {

	} elseif (isset($_REQUEST["answer"]) AND $_REQUEST["answer"] == 1) {
	   echo ('<br /> <span style="color:Green">Correct, what else could the answer possibly be?! </span><br />');
       }elseif( isset($_REQUEST["answer"]) AND $_REQUEST["answer"] == 2 or 3 or 4){
        echo ('<br /> <span style="color:Red">You could not be more wrong! </span>');

	} else {
	   echo ('<br /> <span style="color:Green">Good luck! </span><br />');
}
?>

<form name="quiz" method = " POST "action="<?php echo ($_SERVER['PHP_SELF']); ?>">
<?php

$quest = array(
    'Is Frodo a Hobbit?',
    'Is grass green?',
    'Are the Ninja Turtles awesome?',
    'Is it cold in Antarctica?',
    'Is pizza good?');
$numbers = 1;

//keep track of which question is being asked (numbers) , if its the first question then initiate the variable that counts.

if (isset($_REQUEST["questionnumber"])) {
    $questionnumber = $_REQUEST["questionnumber"];
} else {
    $questionnumber = 0;

    //echo ('REQUEST is leeg <br />');
    //echo ($question .'<br />');
}

// create the array with the answers
$answer = array(
    'Yes',
    'No',
    'Maybe?',
    'Don\'t think so');

//ask question & update question number
if ($questionnumber <= 4) {
	
echo ('Question number: ' . $questionnumber . '<br /><br />');
echo ($quest[$questionnumber]);
$questionnumber = $questionnumber + 1;

echo ('<input type="hidden" name="questionnumber" value="' . $questionnumber . '">');
echo ('<br />');

//show possible answers and give each answer a value (1-4)
foreach ($answer as &$value) {
    echo ('<input type="radio" name="answer"value="' . $numbers . '">' . $value);
    echo ('<br />');
    $numbers = $numbers + 1;
}
echo ('<input type="submit" value="Submit!">');
}else{echo ('I hope you enjoyed the test');
}
?>


</ form >

</body>
</html>