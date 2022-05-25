<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
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
<main>
    <?php if(isset($message)):?>
    <?= $message ?>
    <?php endif; ?>
    <?php foreach($goods as $good): ?>
        <div class="good">
            <h2><?= $good['name_good'] ?></h2>
            <div>
                <img src="/image/<?= $good['pic'] ?>">
            </div>
            <p>Стоимость: <?= $good['price'] ?></p>
            <a href="/good?id=<?php  echo $good['id_good']; ?>">Подробнее</a>
            <form name="add" method="post" data-id="<?php  echo $good['id_good']; ?>">
            <?php if($good['quantity']>0): ?>
                <input type="submit" class="addBusket" id="busket"
                    data-id="<?php  echo $good['id_good']; ?>" value="Добавить в коризну"></button>
            <?php endif; ?>
            </form>
        </div>
    <?php endforeach; ?>
</main>
<script src="/build/js/main.js"></script>
</body>
</html>