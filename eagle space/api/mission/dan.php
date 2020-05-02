<?
$data = array(
    'Mission' =>
    (object)array(
        'date' => '2020-02-29 13:00:00',
        'Staticdate' => '2020-02-23 14:00:00',
        'name' => 'TestRocket',
        'rocket' => 'Eagle 0',
        'video' => 'P5jCvFUzzKc',
        'description' => 'Rocket test "Eagle 0" which will take place at 13:00 UTC from the Polish target rocket will fly at 100M and then open the fairings and parachute',
    ),
    'Mission' =>
    (object)array(
        'date' => '2020-03-29 13:00:00',
        'Staticdate' => '2020-03-23 14:00:00',
        'name' => 'Test Engine "NO NAME"',
        'rocket' => 'Eagle 0H',
        'video' => 'P5jCvFUzzKc',
        'description' => '"Eagle 0H" rocket test, which will take place at 13:00 UTC from Poland and will ultimately test the "NO NAME 1" engine',
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
