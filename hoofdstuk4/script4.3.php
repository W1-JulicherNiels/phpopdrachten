<?php
/**
 * User: Niels Julicher
 * Date: 03-03-2020
 * Time: 10:00
 * File: script4.3.php
 */
?>
<?php
    $task2 = "Lancering in: ";
    $counter = 19;

    while($counter > 0)
    {
        $task2 = $task2 . $counter . ", ";
        $counter--;
    }

    $task3 = "Lancering in: ";
    for($c = 19; $c > 0; $c--)
    {
        $task3 = $task3 . $c . ", ";
    }

    $task4 = " ";
    $cTask4 = 1;
    while($cTask4 <= 6)
    {
        $task4 = $task4 . "<h" . $cTask4 . "> Dit is de " . $cTask4 . "e iteratie </h" . $cTask4 . ">";
        $cTask4++;
    }

    $task5 = " ";
    for($c5 = 1; $c5 <= 10; $c5++)
    {
        $task5 = $task5 . "<tr><td>Dit is de " . $c5 . "e iteratie</td></tr>";
    }
    $task5 = "<table>" . $task5 . "</table>";

$task6 = " ";
$year = 2020;
$age = 20;
while($year >= 2000 && $age >= 0)
{
    if($year == 2020 && $age == 20)
        $task6 = $task6 . "<p> in " . $year . " word ik " . $age . " jaar oud </p>";
    else if($year >= 2001 && $age >= 1)
        $task6 = $task6 . "<p> in " . $year . " was ik " . $age . " jaar oud </p>";
    else if($year == 2000 && $age == 0)
        $task6 = $task6 . "<p> in " . $year . " ben ik geboren </p>";
    $year--;
    $age--;
}

$task7 = " ";
$age1 = 20;
for($year1 = 2020; $year1 >= 2000 && $age1 >= 0; $year1--)
{
    if($year1 == 2020 && $age1 == 20)
        $task7 = $task7 . "<p> In " . $year1 . " word ik " . $age1 . " jaar oud </p>";
    else if ($year1 == 2018 && $age1 == 18)
        $task7 = $task7 . "<p> In " . $year1 . " was ik " . $age1 . " jaar oud en werd ik adolescent </p>";
    else if ($year1 == 2012 && $age1 == 12)
        $task7 = $task7 . "<p> In " . $year1 . " was ik " . $age1 . " jaar oud en werd een puber </p>";
    else if ($year1 == 2008 && $age1 == 8)
        $task7 = $task7 . "<p> In " . $year1 . " was ik " . $age1 . " jaar oud en werd ik een tiener </p>";
    else if($year1 == 2004 && $age1 == 4)
        $task7 = $task7 . "<p> In " . $year1 . " was ik " . $age1 . " jaar oud en werd ik een kleuter </p>";
    else if($year1 == 2002 && $age1 == 2)
        $task7 = $task7 . "<p> In " . $year1 . " was ik " . $age1 . " jaar oud en werd ik een peuter </p>";
    else if($year1 == 2000 && $age1 == 0)
        $task7 = $task7 . "<p> In " . $year1 . " ben ik geboren en was ik een baby </p>";
    else
        $task7 = $task7 . "<p> In " . $year1 . " was ik " . $age1 . " jaar oud </p>";
    $age1--;
}
?>