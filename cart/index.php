<?php
require_once '../app.php';
session_start();

// Handle product removal if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    // Check if the cart exists and contains the product
    if (isset($_SESSION['cart']) && array_key_exists($productId, $_SESSION['cart'])) {
        // Remove the product from the cart
        unset($_SESSION['cart'][$productId]);
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
  <?php include COMPONENT_DIR . 'nav.php' ?>

  <main class="container mx-auto px-4 py-8">
    <section class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">Cart</h2>
    </section>

    <section>
      <div id="products" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Product 2 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="images/mango.jpg" alt="Product 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-xl font-bold text-gray-800">Product 2</h4>
            <p class="text-gray-600">Price: &yen;21,000</p>
            <div class="mt-4">
              <span class="text-lg font-bold text-gray-800">¥6,000</span>
              
              <!-- Form to remove the product -->
              <form action="" method="POST" class="mt-2">
                <input type="hidden" name="product_id" value="2">
                <button type="submit" class="text-blue-500 hover:underline">Remove</button>
              </form>
            </div>
          </div>
        </div>
        
        <!-- Product 3 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="images/wasabi.jpg" alt="Product 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-xl font-bold text-gray-800">Product 3</h4>
            <p class="text-gray-600">Price: &yen;48,000</p>
            <div class="mt-4">
              <span class="text-lg font-bold text-gray-800">¥7,000</span>
              
              <!-- Form to remove the product -->
              <form action="" method="POST" class="mt-2">
                <input type="hidden" name="product_id" value="3">
                <button type="submit" class="text-blue-500 hover:underline">Remove</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Payment Form -->
      <form action="payment/" method="POST">
        <div class="mt-8 text-center">
          <p class="text-2xl font-bold text-gray-800">合計: ¥13,000</p>
          <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">決済へ</button>
        </div>
      </form>
    </section>
  </main>

  <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>
