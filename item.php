<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="extra/files/style.css">
    <link rel="icon" type="image/x-icon" href="extra/images/logo.ico">
    <title>Магазин StarGazer. Рубежный контроль №2</title>
</head>
<body>
    <header>
        <?php require 'header.html'; ?>
    </header>
    <main>
        <?php
            include 'extra/files/dbconnect.php';
            $query = "SELECT products.id, products.name, category.name AS category, mount, focal_length, products.article, products.lens_diameter, manufacturer.name AS manufacturer, manufacturer.country, products.weight, products.size_len, products.size_wid, products.size_hei, image, descript, amount
                    FROM products JOIN category ON products.id_category=category.id JOIN manufacturer ON products.id_manufacturer=manufacturer.id
                    WHERE products.article =".$_GET['article'];
            $product = mysqli_query($mysql, $query);
            $product = mysqli_fetch_assoc($product)
        ?>
        <h1><?php 
                        echo $product['category'].' '.$product['name'];
                    ?></h1>
        <section>
            <div class="item_div">
                <div class="description">
                    <?php echo '<img class="image_item" src="extra/images/'.$product['image'].'">'; ?>
                </div>
                <div class="description">
                    <p>
                        <?php 
                            echo '<p> Артикул: '.$product['article'].'<br>'; 
                            echo 'Диаметр объектива (апертура), мм: '.$product['lens_diameter'].'<br>'; 
                            echo 'Фокусное расстояние, мм: '.$product['focal_length'].'<br>'; 
                            echo 'Тип монтировки: '.$product['mount'].'<br>'; 
                            echo 'Производитель: '.$product['manufacturer'].'<br>'; 
                            echo 'Страна производителя: '.$product['country'].'<br>'; 
                            echo 'Размер упаковки (ДхШхВ): '.$product['size_len'].'x'.$product['size_wid'].'x'.$product['size_hei'].'<br>'; 
                            echo 'Вес в упаковке: '.$product['weight'].'</p>';
                        ?>
                    </p>
                </div>
                <?php echo '<p class="desc">'.$product['descript'].'<br><br>Остаток на складе: '.$product['amount'].'</p>'; ?>
            </div>
            <div class="button">
                <button class="buy">Купить</button>
            </div>

        </section>
    </main>
    <footer>
        <?php require 'footer.html'; ?>
    </footer>
</body>
</html>