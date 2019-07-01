<!doctype html>
<html lang="en">
    <head>
        <title>Calculations</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            $file = file_get_contents('./calculations.csv', true);
            echo $file;
         ?>
    </body>
</html>