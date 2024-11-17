<?php
session_start();
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple autenticación, puedes mejorarla con hashes y validaciones más avanzadas
    $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['admin'] = $username;
        header("Location: admin.php");
    } else {
        $error = "Contraseño o usuario invalido";
    }
}

?>
<head>
<link rel="stylesheet" href="../css/login.css">
</head>

<div class="login-container">

    <form action="login.php" method="POST">
        <h1>Admin Login</h1>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>

        <?php if (isset($error)): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>
</div>
