<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=phpcrud", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    if (isset($_POST['addCar'])) {
        $stmt = $conn->prepare("INSERT INTO
            carsinfo (name,image,model,price,color)
            VALUES (:na,:im ,:mo ,:pr ,:co)");
        $stmt->bindParam(':na', $name);
        $stmt->bindParam(':im', $img);
        $stmt->bindParam(':mo', $model);
        $stmt->bindParam(':pr', $price);
        $stmt->bindParam(':co', $color);

        $name = $_POST['name'];
        $img = $_POST['image'];
        $model = $_POST['model'];
        $price = $_POST['price'];
        $color = $_POST['color'];

        $stmt->execute();
        header('Refresh:0');
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<?php try {
    // $sql = $conn->prepare('SELECT * FROM cars_info');
    // $sql->execute();
    $sql = $conn->query('SELECT * FROM carsinfo');
    $Cars = $sql->fetchAll();
    echo '<pre>';
    // print_r($allCars);
    echo '</pre>';
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

