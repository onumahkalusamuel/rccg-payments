<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Youth-Choir Programme Budget - RCCG Payments</title>
    <meta name="description" content="Contribution details for youth and choir joint programme.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <meta name="theme-color" content="#fafafa">
</head>

<body>
    <?php
    // store data in php
    $target = 50000;
    $payments = [
        [
            "name" => "Bro Oladipupo",
            "designation" => "presido",
            "amount" => 10000
        ], [
            "name" => "Bro Onumah Samuel",
            "designation" => "v-presido",
            "amount" => 3000
        ], [
            "name" => "Sis Esther",
            "designation" => "choir-cord",
            "amount" => 5000
        ], [
            "name" => "Bro Oluwafemi Emmanuel",
            "designation" => "p-r-o",
            "amount" => 3000
        ], [
            "name" => "Sis Temitope Oladiti",
            "designation" => "sec-gen",
            "amount" => 3000
        ], [
            "name" => "Sis Funke Mary",
            "designation" => "asst-sec-gen",
            "amount" => 3000
        ], [
            "name" => "Bro Albert Faith",
            "designation" => "bros-cord",
            "amount" => 2000
        ], [
            "name" => "Bro Albert David",
            "designation" => "drama-cord",
            "amount" => 2000
        ], [
            "name" => "Sis Ibironke",
            "designation" => "fin-sec",
            "amount" => 3000
        ],

    ];
    $total = 0;
    foreach ($payments as $payment) {
        $total += $payment['amount'];
    }

    if ($total >= $target) {
        $percentage = 100;
    } else {
        $percentage = round($total / $target * 100);
    }
    ?>
    <!-- Add your site or application content here -->
    <main>
        <div class="">
            <div class="container" style="text-align: center;">
                <img src="/img/rccg-youth-logo.png" alt="youth-logo" height="60" />
            </div>
            <div class="container" style="text-align: center;">
                <h3 style="margin: 5px;">PROGRAM CONTRIBUTIONS</h3>
                <p style="margin:0;font-size:0.9rem">Pay To:</p>
                <p style="margin:0; font-weight:bold; font-size:0.9rem">0784508329 - Access Bank - Onumah Samuel</p>
            </div>
            <div class="main-body container" style="margin-bottom:85px">
                <div class="logo-title"></div>
                <div class="content">
                    <?php foreach ($payments as $payment) : ?>
                        <div class="item">
                            <div class="item-shown">
                                <div class="major">
                                    <div><?= $payment['name']; ?></div>
                                    <div>#<?= number_format($payment['amount'], 2); ?></div>
                                </div>
                                <div class="minor"><?= $payment['designation']; ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="footer-content">
                <div class="container" style="padding-left: 5px;padding-right:5px">
                    <div id="progress-bar-container">
                        <div class="progress-bar-child progress"></div>
                        <div class="progress-bar-child shrinker timelapse" style="width:<?= 100 - $percentage; ?>%"></div>
                    </div>

                </div>
                <div class="container" style="text-align: center;">
                    <span style="color:hsl(<?= $percentage; ?>, 100%, 35%);font-size: 2rem;">
                        <?= number_format($total, 2); ?>
                    </span>
                    /
                    <span style="color:#888;font-size: 1rem;">
                        <?= number_format($target, 2); ?>
                    </span>

                </div>
            </div>
        </div>
    </main>
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
