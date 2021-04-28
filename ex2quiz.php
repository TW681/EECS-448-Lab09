<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


#arrays holding quiestions, responses, and correct responese
$quizQs = array("What year is it?", "What state is KU in?", "What Class is this for?", "What is my favorite football team?", "Who teaches EECS 448?");
$quizResp = array($_POST["Question1"], $_POST["Question2"], $_POST["Question3"], $_POST["Question4"], $_POST["Question5"]) ;
$quizAns = array("2021", "Kansas", "EECS 448", "Chiefs", "Johnson");

function quizResults()
{
    $quizCorr = 0;
    $totalPts = 100;
    $quizPts = 0;

    #for loop that goes through every question finding if the answer given is correct
    for ($i = 0; $i < 5; $i++)
    {
        echo "<div>{$GLOBALS["quizQs"][$i]}</div>";
        echo "<div>&emsp;You answered: {$GLOBALS["quizResp"][$i]}</div>";
        echo "<div>&emsp;Correct answer: {$GLOBALS["quizAns"][$i]}</div>";

        if ($GLOBALS["quizResp"][$i] == $GLOBALS["quizAns"][$i])
        {
            $quizPts += 20;
            $quizCorr++;
        }
    }
    #outputs user score
    echo "<div>Total correct: {$quizCorr}</div>";
    echo "<div>Score: " . ($quizPts/$totalPts*100) . "%</div>";
}
results();
?>
