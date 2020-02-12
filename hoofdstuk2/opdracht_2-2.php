<?php
/**
 *user: Siebe van der Haring
 *Date: 5-2-2020
 *Time: 13:30
 *File: Index.php
 */

$text1 = "Hallo ";
$text2 = "een makkelijke taal ";
$text3 = "z'n makkelijke taal ";
$text4 = "wat is ";
$text5 = "PHP ";
$text6 = "Nooit gedacht dat ";
$text7 = "De instalatie is best ingewikkeld ";
$text8 = "Fijn ";
$text9 = "? ";
$text10 = ". ";
$text11 = ", ";
$text12 = "<br>";
$text13 = "is ";
$text14 = "Vind je niet ";
$text15 = "toch";
?>

<!DOCTYPE.html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="opdracht x">
    <meta name="keywords" content="keyword 1, keyword 2">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <title>
        Template
    </title>
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
    <h1>Menu</h1>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="../hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="hoofdstuk2/opdracht_3-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_3-2.php">Opdracht 2.2</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_3-3.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="hoofdstuk2/opdracht_4-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_4-2.php">Opdracht 2.2</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_4-4.php">Opdracht 2.2</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_4-5.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="hoofdstuk2/opdracht_5-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_5-2.php">Opdracht 2.2</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_5-4.php">Opdracht 2.2</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_5-5.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen:</h2>
    <p>
        Taak 1
    </p>
    <p>
        <?php
        echo $text1 . $text4 . $text5  .$text15. $text3 . $text10 . $text12 .$text7 . $text15 . $text9 . $text12 . $text6 . $text5 . $text3 . $text13 . $text10;
        ?>
    </p>
    <p>
        Taak 2
    </p>
    <p>
        <?php
            echo $text1 .$text11 .$text12
            .$text8 .$text15 ." dat " .$text5 .$text3 .$text10 .$text12
            .$text7 .$text10 .$text14 .$text9
        ?>
    </p>
</main>
</body>
</html>