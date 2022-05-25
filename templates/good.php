<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/build/css/main.css">
</head>
<body>
    <header>
        <nav>
            <a href="/">Главная</a>
            <?php foreach($categories as $cat): ?>
                <a href="/category?id=<?php echo $cat['id_cat']; ?>"><?= $cat['name_cat'] ?></a>
            <?php endforeach; ?>
            <a href="/busket">Корзина</a>
        </nav>
    </header>
         <h2><?= $good['name_good'] ?></h2>
            <div>
                <img src="/image/<?= $good['pic'] ?>">
            </div>
            <p><?= $good['discripton'] ?></p>
            <p>Стоимость: <?= $good['price'] ?></p>
            <?php if($good['quantity']>0): ?>
                <span>Количество: <?= $good['quantity'] ?> шт.</span>
            <?php else: ?>
                <span>Товара нет в наличии.</span>
            <?php endif; ?>
    <script src="/build/js/main.js"></script>
</body>
</html>