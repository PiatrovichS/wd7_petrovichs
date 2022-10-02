<!doctype html>
<html lang="en">
<head>
    <?php include __DIR__. '/link.html'?>
</head>
<body>
<?php include __DIR__. '/header.html'?>

    <main class="main">


            <section class="main__title">
                <div class="container">
                    <h1 class="main__title-homework">Решения д/з Петровича Сергея Николаевича</h1>
                </div>
            </section>

            <section class="main__homework-1">
             <div class="container">
                <h1 class="main__title-homework-1">Д/з №1</h1>
                <div class="main__decision-1">
                    <div class="main__task-1">
                        <h3 class="main__title">Вывести на экран через echo  ФИО. И выгрузить в Gidhub.</h3>
                    </div>
                    <div class="main__dec-1">
                        <h2 class="main__title">Решения д/з №1</h2>
                        <ul class="main__decision-1__ul">
                            <li class="main__dec-1__li">1. echo "Петрович Сергей Николаевич";</li>
                            <li class="main__dec-1__li">2. https://github.com/PiatrovichS/wd7_petrovichs </li>
                        </ul>
                    </div>
                </div>
            </div>
            </section>

        <section class="main__homework-2">
            <div class="container">
                <h1 class="main__title-homework-2">Д/з №2</h1>
                <div class="main__decision-2">
                    <div class="main__task-2">
                        <h2 class="main__title">Задание</h2>
                        <ul class="main__decision-2__ul">
                            <li class="main__dec-2__li">1. изменить регистр строки на противоположный (изначальная строка должна быть в верхнем или нижнем регистре)</li>
                            <li class="main__dec-2__li">2. посчитать количество слов в строке </li>
                            <li class="main__dec-2__li">3. получите первое слово каждого предложения в тексте. </li>
                            <li class="main__dec-2__li">4. переведите строку в транслит </li>
                            <li class="main__dec-2__li">5. * вывести таблицу умножения </li>
                        </ul>
                    </div>
                    <div class="main__dec-2">
                        <h2 class="main__title">Решения д/з №2</h2>
                        <ul class="main__decision-2__ul">
                            <li class="main__dec-2__li">
                                <?php
                                $text="1.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi doloribus iure maiores, necessitatibus neque nobis perspiciatis quibusdam repellendus repudiandae saepe similique sint suscipit. Excepturi id illo quasi quod saepe.";
                                $newText= mb_strtolower($text);
                                echo $newText;
                                echo "<br>";
                                $newText= mb_strtoupper($text);
                                echo $newText;
                                ?>
                            </li>
                            <li class="main__dec-2__li">
                                <?php
                                $text ="Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
                                echo "2. " . $text . "<br>";
                                $newText= str_word_count($text);
                                echo "Число слов в тексте - " . $newText . "<br>";
                                ?>
                            </li>
                            <li class="main__dec-2__li">
                                <?php
                                $text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi doloribus iure maiores, necessitatibus neque nobis perspiciatis quibusdam repellendus repudiandae saepe similique sint suscipit. Excepturi id illo quasi quod saepe.";
                                echo "3. " . $text . "<br>";

                                $newText= str_replace("[?,!]",".",$text);
                                $newText= explode('.',$text);
                                echo "Первое слово каждого предложения в тексте:";
                                for ($i=0;$i<count( $newText);$i++){
                                   $firstWord=  $newText[$i];
                                    echo strtok( $firstWord, " ") . " ";
                                }
                                ?>
                            </li>
                            <li class="main__dec-2__li">
                                <?php
                                function translit($value)
                                {
                                    $converter = array(
                                        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
                                        'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
                                        'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
                                        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
                                        'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
                                        'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
                                        'э' => 'e',    'ю' => 'yu',   'я' => 'ya',

                                        'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
                                        'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
                                        'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
                                        'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
                                        'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
                                        'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
                                        'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
                                    );

                                    $value = strtr($value, $converter);
                                    return $value;
                                }

                                $text= "Переведите строку в транслит";
                                echo "4. " . $text . ": " . translit($text);
                                ?>

                            </li>
                            <li class="main__dec-2__li">
                              <div class="main__table">
                                  <table class="main__my-table">
                                      <?php
                                      $rows = 10;
                                      $cols = 10;
                                      echo "5. Таблица умножения через PHP от Петровича С Н: \n";
                                      for($i=1; $i<= $rows;$i++){
                                          echo "\t\t<tr>\n";
                                          if($i == '1'){ $b = "<b>"; $b_end = "</b>";}
                                          for($q=1; $q<= $cols;$q++){
                                              if (($q=='1') && ($i !='1')){$b = "<b>"; $b_end = "</b>"; }
                                              echo "\t\t\t<td>"."$b" .$i*$q. "$b_end" ."</td>\n";
                                              if (($q=='1') && ($i !='1')){$b = ""; $b_end = "";}
                                          }
                                          $b =""; $end_b ="";
                                          echo "\t\t<tr>\n";
                                      }
                                      ?>
                                  </table>
                              </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>



<?php include __DIR__. '/script.html'?>
</body>
</html>




