<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>FizzBuzz問題</h1>
        <form method="post">
            fizzNum:&nbsp;&nbsp;&nbsp;<input type="text" placeholder="整数値を入力してください" name="fizzNum">
            <br>
            buzzNum:&nbsp;<input type="text" placeholder="整数値を入力してください" name="buzzNum">
            <br>
            <input type="submit" value="実行" name="submit">
        </form>
        <h4>【出力】</h4>
        <?php
            if (isset($_POST["submit"])) {
                $fizzNum = (int)$_POST["fizzNum"];
                $buzzNum = (int)$_POST["buzzNum"];
                if (is_int($fizzNum) && is_int($fizzNum) && $fizzNum && $buzzNum) {
                    for ($i = 1; $i < 100; $i++) {
                        if ($i % $fizzNum === 0 && $i % $buzzNum === 0) {
                            echo "FizzBuzz $i" . "<br>";
                        } elseif ($i % $fizzNum === 0) {
                            echo "fizz $i" . "<br>";
                        } elseif ($i % $buzzNum === 0) {
                            echo "buzz $i" . "<br>";
                        }
                    }
                } elseif (!is_int($fizzNum) || !is_int($buzzNum) || !$fizzNum || !$buzzNum) {
                    echo "整数値を入力してください。";
                }
            }
        ?>
    </body>
</html>