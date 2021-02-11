<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="add.php" method="post" enctype="multipart/form-data">
    <p id="warn">
        <?php
            $msg = @$_REQUEST['warn'];
            echo $msg;
        ?>
    </p>
    <p id="succ">
    <?php
            $msg = @$_REQUEST['msg'];
            echo $msg;
        ?>
    </p>
        <div>
            <input type="file" name="file" id="file">
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="select">Type Of Dish</label>
            <select name="select" id="select">
                <option value="none">select---</option>
                <option value="main_dish">Main Dish</option>
                <option value="drinks">Drinks</option>
                <option value="snack">Snacks</option>
                <option value="dessert">Dessert</option>
            </select>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price">
        </div>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>