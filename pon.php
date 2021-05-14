<?php

$numberJson = file_get_contents(__DIR__. '/words.json');
$numbers = json_decode($numbersJson, true);

if ( isset($_POST["upisite_rijec"]) && !empty($_POST["upisite_rijec"])) {
    $samoglasnici = ['a', 'e', 'i', 'o', 'u'];
    $suglasnici = ['b', 'c', 'd', 'f', 'g', 'h', 'j','y', 'k', 'l', 'm', 'n','p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z' ];

    $word = $_POST['upisite_rijec'];
    $letter_number = strlen($_POST["upisite_rijec"]);
    $vowels = 0;
    // $consonants = 0;

    for ($i=0; $i<$letterNumber; $i++) {
        if (in_array($word[$i], $samoglasnici)) {
            $vowels++;
        }

        /** if (in_array($word[$i], $suglasnici)) {
         * $consonsnts++;
         *} */
    }
    
    $consonsnts = $letterNumber - $vowels;
    $num = ['word' => $word,
            'number_letters' => $letter_number,
            'number_vowels' => $vowels,
            'consonsnts' => $consonsnts
];

$numbers[] = $num;
$numJson = json_encode($numbers);
$res = file_put_contents(__DIR__. '/words.json', $numJson);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PONAVLJANJE</title>
</head>
<body>
    <h2>Upisite zeljenu rijec</h2>

    <form action = "php_ponavljanje.php" method="POST">
    <label>Upisite rijec:</label><br><input type="text" name="upisite_rijec" /><br>
    <input type = "submit" value="Posalji" ><br><br>

    <table border = "1" cellpadding = "10">
        <tr>
            <th>Rijec</th>
            <th>Broj slova</th>
            <th>Broj suglasnika</th>
            <th>Broj samoglasnika</th>
        </tr>

</body>
<?php
        foreach($numbers as $number) {
            echo '<tr>';
                echo '<td>' . $number['word']. '</td>';
                echo '<td>' . $number['number_letters']. '</td>';
                echo '<td>' . $number['consonsnts']. '</td>';
                echo '<td>' . $number['number_vowels']. '</td>';
            echo '</tr>';
        }

?>

/<table>
</html>