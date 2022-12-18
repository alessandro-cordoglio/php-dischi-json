<?php
$dischi = file_get_contents("dischi.json");
$dischi = json_decode($dischi, true);

if(isset($_GET['index'])) {
    $dischi = $dischi[$_GET['index']];
}

$json_string = json_encode($dischi);
header("Content-Type: application/json");
echo $json_string;