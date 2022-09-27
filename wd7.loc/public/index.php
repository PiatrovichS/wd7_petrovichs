<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="PiatrovichS">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="PiatrovichS">
    <title>PiatrovichS in IT</title>
    <link rel="stylesheet" href="resources/css/app.css">

</head>
<body>

    <?php include ('header.html')?>
<!--    --><?php //include __DIR__.'/header.html'?>

<br>

<?php
//php artisan serve
echo "Петрович Сергей Николаевич";

$arr=[];
$i = 1;
while ($i < 10) {
    $arr[$i]= random_int(1,100);
    echo $arr[$i];
    echo "<br>";
    $i++;
}
$arr = [
    [1,2,3,4,5,6,7],
    [8,9,10,11],
    [12,15,17,111],
];
echo "<br>";
$sum=0;
for ($i=0;$i<count($arr);$i++){
//    var_dump($arr[$i]);
    for ($j=0;$j<count($arr[$i]);$j++){
      $sum+= $arr[$i][$j];
    }
}
echo $sum;



?>


<?php include ('footer.html') ?>
<?php include ('script.html')?>
</body>
</html>
