<?php

$magicNumbers = [
    rand(0, 100),
    rand(100, 200),
    rand(0, 1000),
];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Steven Liebregt" />
        <title>¡Hola Mundo!</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <h1>¡Hola Mundo!</h1>
        <p>Tus número mágicos son:</p>
        <table>
            <tr>
                <th>#</th>
                <th>Número</th>
            <tr>
            <?php foreach ($magicNumbers as $index => $number): ?>
                <tr>
                    <td><?php echo $index; ?></td>
                    <td><?php echo $number; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p>Si puedes ver esto, entonces PHP está funcionando.</p>
    </body>
</html>
