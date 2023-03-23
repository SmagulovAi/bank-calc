<?php
    if (isset($_GET['number1']) && isset($_GET['number2']) && 100000 <= $_GET['number1']) {
        $loanSum = $_GET['number1'] - $_GET['number2'];
    };
    // if (isset($_GET['number3']) === 1) {
    //     $pct = "14%";
    // } elseif (isset($_GET['number3']) === 2) {
    //     $pct = "21%";
    // } elseif (isset($_GET['number3']) === 3) {
    //     $pct = "23%";
    // };


    // Срок    
    if (isset($_GET['number3'])) {
        switch ($_GET['number3']) {
            case '1':
                $pct = '14%';
                break;
            case '2':
                $pct = '21%';
                break;
            case $_GET['number3'] >= 3:
                $pct = '23%';
                    break;
        }
    }

    // Срок в месяцах
    if (isset($_GET['number3'])) {
        $termMonth = $_GET['number3'] * 12;
    }

    // Ежемесячный основной долг
    if (isset($loanSum) && isset($termMonth)) {
        $monthSum = $loanSum / $termMonth;
    }

    // Переплата в месяц
    if (isset($monthSum) && isset($pct)) {
        $overpayment = $monthSum * $pct / 100;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="">
                    <div class="mb-3">
                        <label for="number1" class="form-label">Общая сумма</label>
                        <input type="number" class="form-control" name="number1" id="number1" value="<?= $_GET['number1'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="number2" class="form-label">Первоначальный взнос</label>
                        <input type="number" class="form-control" name="number2" id="number2" value="<?= $_GET['number2'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="number3" class="form-label">Срок</label>
                        <input type="number" class="form-control" name="number3" id="number3" value="<?= ($_GET['number3']) ?? '' ?>">
                    </div>
                    <div class="input-group-text mb-3">
                        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">Согласен с условиями
                    </div>


                    <!-- КНОПКА -->
                    <div class="mb-3">
                        <button class="btn btn-primary">Расчитать</button>
                    </div>


                    <!-- Промежуточные данные для расчета -->
                    <?php if (isset($loanSum)) : ?>
                        <div class="mb-3">
                            <label for="loanSum" class="form-label">Сумма займа</label>
                            <input type="text" class="form-control" name="loanSum" id="loanSum" readonly value="<?= $loanSum ?>">
                        </div>
                    <?php endif; ?>
                    <?php if (isset($pct)) : ?>
                    <div class="mb-3">
                        <label for="pct" class="form-label">Процентная ставка</label>
                        <input type="text" class="form-control" name="pct" id="pct" value="<?= $pct ?? '' ?>">
                    </div>
                    <?php endif; ?>
                    <?php if (isset($termMonth)) : ?>
                    <div class="mb-3">
                        <label for="termMonth" class="form-label">Срок в месяцах</label>
                        <input type="number" class="form-control" name="termMonth" id="termMonth" value="<?= $termMonth ?? '' ?>">
                    </div>
                    <?php endif; ?>
                    <?php if (isset($monthSum)) : ?>
                    <div class="mb-3">
                        <label for="monthSum" class="form-label">Ежемесячный основной долг</label>
                        <input type="number" class="form-control" id="monthSum" value="<?= $monthSum ?? '' ?>">
                    </div>
                    <?php endif; ?>
                    <?php if (isset($overpayment)) : ?>
                    <div class="mb-3">
                        <label for="overpayment" class="form-label">Переплата в месяц</label>
                        <input type="number" class="form-control" id="overpayment" value="<?= $overpayment ?? '' ?>">
                    </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>