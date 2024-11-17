<?php
include 'includes/header.php';
?>

<main>
    <h1>Checkout</h1>
    <form action="complete_checkout.php" method="POST">
        <!-- Formulario de pago o detalles -->
        <label for="address">Shipping Address:</label>
        <input type="text" id="address" name="address" required>
        <button type="submit">Complete Order</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>
