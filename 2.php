<?php

function getComites($N, $M){

    $N = $N;
    $M = $M;
    $result = 0;
    
    while (true) {
        if ($N % 2 === 1 && $M >= 2) {
            $M -= 2;
            $N += 1;
            $result += 1;
        }
    
        while ($N > 1) {
            $N -= 2;
            $result += 1;
        }
    
        while (true) {
    
            if (($M > 2 && $M % 2 === 0) || ($N === 1 &&  $M == 2)) {
                break;
            }
            $M += 1;
            $result += 1;
        }
    
        while (($N % 2 !== 0 || $N === 0) && $M >= 2) {
            $M -= 2;
            $N += 1;
            $result += 1;
        }
    
    
        while ($N > 0) {
            $N -= 2;
            $result += 1;
        }
    
        if ($N === 0 && $M === 0) {
            break;
        }
    }

    return $result;
}

$res = 0;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $res = getComites($_POST['N'], $_POST['M']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="<?= $_SERVER['REQUEST_URI'] ?>">
        <div class="form_item">
            <label for="">Введите N</label>
            <input name="N" type="number">
        </div>
        <div class="form_item">
            <label for="">Введите M</label>
            <input name="M" type="number">
        </div>
        <button type="submit">Отправить</button>
    </form>
    <h3>Результат <?= $res ?></h3>
</body>

</html>