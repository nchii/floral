<?php require_once('./layout/header.php') ?>
<?php require_once('./layout/nav.php') ?>
<script>
    alert("Order is successful!");
</script>

<main class="main">
    <section class="section">
    <div class="container">
        <div class="card">

        </div>
    <?php
    require_once('../cart_list.php');

    if (!empty($cart)) {
        foreach ($cart as $item) {
            echo '<div class="order-item">';
            echo '<h3>' . htmlspecialchars($item['name']) . '</h3>';
            echo '<p>Quantity: ' . htmlspecialchars($item['quantity']) . '</p>';
            echo '<p>Price: $' . htmlspecialchars($item['price']) . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>No items in your order.</p>';
    }
    ?>
    </div>
    </section>
</main>
<?php require_once('./layout/footer.php') ?>
