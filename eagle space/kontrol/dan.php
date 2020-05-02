<?
/*for ($x = 0; $x <= $x + 1; $x++) {*/
    $ff = $ff + 1000;
$data = array(
    'Stage2' =>
    array(
        'speed' => /*'1002'.*/$ff,
        'altitude' => '0.0001',
        'engine' => 'Start',
        'pressure' => '100',
        'LOX' => '100',
        'PR-1' => '300',
        'lat' => '99000',
        'lon' => '2121',
        'cam' => 'https://www.ustream.tv/embed/9408562',
   ),
    'Stage1' =>
    array(
        'speed' => /*'1002'.*/$ff,
        'altitude' => '0.0009',
        'engine' => 'Error',
        'pressure' => '100',
        'LOX' => '100',
        'PR-1' => '300',
        'lat' => '1111',
        'lon' => '2121',
        'cam' => 'https://www.ustream.tv/embed/9408562',
    ),
    'Our' =>
    (object)array(
        'date' => '2020-02-29 13:00:00',
        'Staticdate' => '2020-02-23 14:00:00',
        'name' => 'TestRocket',
        'rocket' => 'Eagle 0',
        'video' => 'P5jCvFUzzKc',
        'description' => 'Rocket test "Eagle 0" which will take place at 13:00 UTC from the Polish target rocket will fly at 100M and then open the fairings and parachute',
    ),
);/*
$data = array(
    (object)array(
        'speed' => 'myfirstvalue',
        'heigt' => 'myfirsttext',
    ),
    (object)array(
        'oV' => 'mysecondvalue',
        'oT' => 'mysecondtext',
    ),
);/*/
var_dump($data);
$json = json_encode($data);
echo $json;






$file1 = "dan.txt";

        $fp = fopen($file1, "w");

        flock($fp, 2);

        fwrite($fp, $json);

        flock($fp, 3);

        fclose($fp);
        sleep(10);
    /*}*/

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>