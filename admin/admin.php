<?php
include '../config/db.php';



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];


    move_uploaded_file($_FILES['image']['tmp_name'],"../uploads/products".$image);

    $query = "INSERT INTO products (name, description, price, image) VALUES ('$name', '$description', '$price', '$image')";
    $conn->query($query);

}


?>

<link rel="stylesheet" href="../css/admin.css">

    
<form action="admin.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Product Name" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <input type="number" name="price" placeholder="Price" required>
    <input type="file" name="image" required>
    <button type="submit">Add Product</button>
    <a href="../index.php">Logout</a>
</form>

<?php include '../includes/footer.php'; ?>


