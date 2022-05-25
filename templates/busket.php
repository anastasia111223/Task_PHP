<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
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
        <?php else: ?>
            <div>
                <?php foreach($goods as $good): ?>
                    <h3><?= $good['name_good'] ?></h3>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>