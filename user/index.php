<?php
require_once '../app.php';

// TODO: DB
$user = [
  'name' => '',
  'email' => '',
  'address' => '',
  'phone' => ''
];
?>

<!DOCTYPE html>
<html lang="ja">

<?php include COMPONENT_DIR . 'head.php' ?>

<body class="bg-gray-100">
  <?php include COMPONENT_DIR . 'nav.php' ?>

  <main class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
      <h2 class="text-2xl font-bold mb-4">ユーザ情報</h2>
      <div class="my-4">
        <a href="user/edit.php" class="bg-blue-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Edit</a>
      </div>

      <div class="space-y-4">
  <div>
    <label class="block text-gray-700">ユーザ名:</label>
    <input type="text" 
           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" 
           value="<?php echo htmlspecialchars($user['name']); ?>" 
           readonly>
  </div>
  <div>
    <label class="block text-gray-700">Email:</label>
    <input type="email" 
           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" 
           value="<?php echo htmlspecialchars($user['email']); ?>" 
           readonly>
  </div>
  <div>
    <label class="block text-gray-700">住所:</label>
    <input type="text" 
           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" 
           value="<?php echo htmlspecialchars($user['address']); ?>" 
           readonly>
  </div>
  <div>
    <label class="block text-gray-700">電話番号:</label>
    <input type="tel" 
           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" 
           value="<?php echo htmlspecialchars($user['phone']); ?>" 
           readonly>
  </div>
</div>

      </div>
    </div>
  </main>

  <?php include COMPONENT_DIR . 'footer.php' ?>
</body>

</html>
