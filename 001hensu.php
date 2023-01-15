<html>
    <head>
        <meta charset="utf-8">
        <title>変数</title>
    </head>
<body>

<!-- 以下にPHPを記述 -->
<?php

echo '好きな文字をここに入力';
echo '<br>';

// 変数
$name = '瀬下';
$last_name = '燦雄';

// echo $name + $last_name;
echo $name . $last_name;
echo '<br>';

$sato_age = 30;
$yamada_age ='25';

$total_age = $sato_age + $yamada_age;

echo $total_age;


// 条件分岐　おみくじアプリ
$num = rand(1,2);

if ( $num == 1){
    echo 'あたり';
}else{
    echo 'はずれ';
}



?>




<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>