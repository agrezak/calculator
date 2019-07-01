<?php

function to_csv($data)
{
    $fp = fopen('calculations.csv', 'a+');
    $request_body = file_get_contents('php://input');
    fputcsv($fp, $data, true);
    fclose($fp);
    return $request_body;
}

?>