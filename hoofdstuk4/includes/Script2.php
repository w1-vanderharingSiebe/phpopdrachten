<?php
//taak 2 Making a while loop for a countdown
$task2 = "lancering in: ";

$counter = 19;

while($counter >= 0)
{
    $task2 = $task2 . $counter .", ";
    $counter--;
}
//taak 3 Making a for loop for a countdown
$task3 = "lancering in: ";

for ($teller = 19; $teller >= 0; $teller--)
{
    $task3 = $task3 . $teller .", ";
}
//taak 4 Making a while loop.
$task4 = "";

$counter = 1;
while($counter <= 6)
{
    $task4 = $task4 ."<h".$counter.">"."Dit is de ".$counter."de ideratie"."</h".$counter.">" ;
    $counter ++;
}
//taak 5
$task5 = "";

for ($teller2 = 0; $teller2 <= 10; $teller2++)
{
    $task5 = $task5 . "<td>"."Dit is de ".$teller2."e ideratie"."</td>";
}
$table = "<table><tr>".$task5."</tr></table>";

//taak 6
$task6 = "";
$counter2 = 2020;
$age = "17";

while($counter2 >= 2003)
{
    $task6 = $task6 ."<p> In ".$counter2. " Ben ik: ".$age." jaar oud </p>";
    $counter2--;
    $age = $age -1;
    if($age == 0)
    {
        $task6 = $task6 ."<p> In ".$counter2." Ben ik geboren!</p>";
    }
}
//taak 7
$task7 = "";
$counter3 = 2003;
$age2 = "17";

while($counter3 >= 2020)
{
    $counter3++;
    $age2 = $age2++;
    $task7 = $task7 ."<p> In ".$counter2. " Ben ik: ".$age." jaar oud </p>";
    if($age == 0)
    {
        $task7 = $task7 ."<p> In ".$counter2." Ben ik geboren!</p>";
    }
    elseif($age2  == 2)
    {
        $task7 = $task7 ."<p>In".$counter3." was ik ".$age2."en was ik een peuter.</p>";
    }
    elseif ($age2 >= 4)
    {
        $task7 = $task7 ."<p>In".$counter3." was ik ".$age2."en was ik een kleuter.</p>";
    }
    elseif ($age2 == 8)
    {
        $task7 = $task7 ."<p>In".$counter3." was ik ".$age2."en was ik een tiener.</p>";
    }
    elseif ($age2 == 12)
    {
        $task7 = $task7 ."<p>In".$counter3." was ik ".$age2."en was ik een puber.</p>";
    }
    elseif ($age2 == 18)
    {
        $task7 = $task7 ."<p>In".$counter3." was ik ".$age2."en was ik een  adolescent.</p>";
    }
    else
        {
            $task7 = $task7 ."<p>In".$counter3." was ik ".$age2."en ben een volwassen.</p>";
    }
}
