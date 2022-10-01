<!doctype html>
<html lang="en">
<head>
    <?php include __DIR__. '/link.html'?>
</head>
<body>
<?php include __DIR__. '/header.html'?>

<main class="main">
    <div class="container">
        <section class="main__title">
            <h1 class="main__title-training">Лекции Петровича Сергея Николаевича</h1>
        </section>

        <section class="main__training-1">

            <div class="main__training-text">
                <p>Здесь написа что я делал</p>
                <?php
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
                echo "<br>";


                $pu= "c:\\windows\\ololo\\folder\\ololo.jpg";
                $arr = explode('\\',$pu);
                print_r($arr);
                $x = $arr[count($arr)-1];
                echo $x;
                echo "<br>";


                $pas= "gxgfjnfg.tdghtdj?gdsshhs!gfnn.";
                $name= str_replace("[?,!]",".",$pas);
                $nnn = explode('.',$pas);
                $sss= count($nnn)-1;
                echo $sss;
                echo "<br>";

                $email= "dsgsd@gmail.com";
                $userName=explode('@',$email);
                echo $userName[0];

                //https://www.php.net/manual/ru/ref.array.php
                //count — Подсчитывает количество элементов массива или Countable объекте
                // array_pop — Извлекает последний элемент массива
                //array_keys — Возвращает все или некоторое подмножество ключей массива
                //array_values — Выбирает все значения массива
                //array_slice — Выбирает срез массива
                // asort — Сортирует массив в порядке возрастания и поддерживает ассоциацию индексов
                //sort — Сортирует массив по возрастанию
                //array_diff — Вычислить расхождение массивов
                //in_array — Проверяет, присутствует ли в массиве значение
                //array_merge — Сливает один или большее количество массивов
                //array_sum — Вычисляет сумму значений массива

                ?>

            </div>
        </section>
    </div>
</main>




<?php include __DIR__. '/footer.html' ?>
<?php include __DIR__. '/script.html'?>
</body>
</html>




