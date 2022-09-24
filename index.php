<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php require 'connection.php' ?>
    <form action="index.php" method="POST">
        <br>
        <h2>Cars Inf.</h2> <br>
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="image" placeholder="Image" required>
        <input type="number" name="model" placeholder="Model" required>
        <input type="number" name="price" placeholder="price" required>
        <input type="text" name="color" placeholder="color" required>
        <input type="submit" name="addCar" value="addCar">

    </form>

    <div class="cards">
        <?php foreach ($Cars as $car) { ?>
            <div class="card">
                <img src=<?php echo $car['image']; ?>>
                <p><?php echo $car['name']; ?> <?php echo $car['model']; ?></p>
                <p><?php echo $car['color']; ?></p>
                <p><?php echo $car['price']; ?>$</p>
                <div class="buttons">
                    <a href="update.php?id=<?php echo htmlentities($car['carID']); ?>"><button>Edit</button></a>
                    <a href="delete.php?del=<?php echo htmlentities($car['carID']); ?>"><button onClick="return confirm('Do you really want to delete');">Delete</button></a>
                </div>
            </div>
        <?php } ?>
    </div>


</body>

</html>