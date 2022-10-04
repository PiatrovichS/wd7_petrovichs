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
        <section class="training-04-10">
            <div class="start">
                <h1>Лекция 04 10 2022</h1>
                <br>

                <?php
//                    declare(strict_types=1); Включение строгой типизация
                    function countWordsInText ($text, string $t, $check, $int=true){
                        return 222;
                    }
                    $word= countWordsInText('sss','ss', check: 123);
                    echo $word;

                    $a=1;
                    $x=2;
                    $fn = function ($var) use($x){
                        return $var**$x;
                    };
                    echo "<br>";

                    function dayWeeks(int $day){

                                switch ($day) {
                                    case 1:
                                        return "Сегодня понедельник!";
                                        break;
                                    case 2:
                                        return "Сегодня вторник!";
                                        break;
                                    case 3:
                                        return "Сегодня среда!";
                                        break;
                                    case 4:
                                        return "Сегодня четверг!";
                                        break;
                                    case 5:
                                        return "Сегодня пятница!";
                                        break;
                                    case 6:
                                        return "Сегодня суббота!";
                                        break;
                                    case 7:
                                        return "Сегодня воскресенье!";
                                        break;
                                    default: return 'Опомнись! В неделе всего 7 дней! Внеси день от 1 до 7.';
                            }
                    }
                    $day=dayWeeks(5);
                    echo $day;
                echo "<br>";

//                function correctText($text){
//                    $text= trim($text);
//                    while ((mb))
//                }
                ?>


            </div>
        </section>

    </div>
</main>




<?php include __DIR__. '/footer.html' ?>
<?php include __DIR__. '/script.html'?>
</body>
</html>




