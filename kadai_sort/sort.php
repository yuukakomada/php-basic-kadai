<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
       function sort_2way($array, $order) {
    if ($order === TRUE) {
        echo "昇順にソートします。<br>";
        sort($array); // PHP標準関数の昇順ソート
    } else {
        echo "降順にソートします。<br>";
        rsort($array); // PHP標準関数の降順ソート
    }

    // foreach文で配列の中身を1行ずつ表示
    foreach ($array as $value) {
        echo $value . "<br>";
    }
}

// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10];

// 独自のソート関数を呼び出す
// 1. 昇順ソート
sort_2way($nums, TRUE);

// 2. 降順ソート
sort_2way($nums, FALSE);
?>
    </p>
</body>

</html>