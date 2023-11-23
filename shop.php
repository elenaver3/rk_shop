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
            $products = mysqli_query($mysql, "SELECT products.name, category.name AS category,  products.article,  image
                                                FROM products JOIN category ON products.id_category=category.id ");
        ?>
        <h1>Товары</h1>
        <section>  
            <table class="table">
                <tbody>
                    <?php

                        while ($row = mysqli_fetch_assoc($products)) {
                            echo '<tr class="item">'; 
                            echo '<td><img class="images" src="extra/images/'.$row['image'].'"></td>';
                            echo '<td><p class="p_item">'.$row['category'].'<br>';
                            echo '<a class="to_item" href="item.php?article='.$row['article'].'">'.$row['name'].'</a></p></td>';                        
                            echo '</tr>';
                        }
                        
                    ?>
                </tbody> 
            </table>
        </section>
    
    </main>
    <footer>
        <?php require 'footer.html'; ?>
    </footer>
</body>
</html>