<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    function toggleSidebar() {
      document.getElementById('sidebar').classList.toggle('-translate-x-full');
    }
    function toggleDarkMode() {
      document.documentElement.classList.toggle('dark');
    }
  </script>
</head>

<body class="flex bg-gradient-to-br from-blue-100 to-purple-100 dark:from-gray-900 dark:to-gray-800 min-h-screen">

  <!-- Sidebar -->
  <aside id="sidebar" class="fixed md:static top-0 left-0 w-60 bg-white/20 dark:bg-gray-800/20 backdrop-blur-md min-h-screen p-4 transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-50">
    <h2 class="text-xl font-bold mb-8 text-gray-800 dark:text-white">MyShop</h2>
    <nav class="flex flex-col gap-4 text-gray-700 dark:text-gray-300">
      <a href="#" class="hover:text-blue-500">🏠 Dashboard</a>
      <a href="#" class="hover:text-blue-500">🛒 POS Orders</a>
      <a href="#" class="hover:text-blue-500">➕ Add Product</a>
      <a href="#" class="hover:text-blue-500">📦 Inventory</a>
      <a href="#" class="hover:text-blue-500">👥 Customers</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <div class="flex-1 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="flex items-center justify-between p-2 md:p-3 bg-white/20 dark:bg-gray-800/20 backdrop-blur-lg shadow-md sticky top-0 z-40">
      <div class="flex items-center gap-2">
        <button class="md:hidden text-2xl" onclick="toggleSidebar()">☰</button>
        <img src="https://img.icons8.com/color/40/shop.png" class="h-8" alt="Shop Logo">
        <h1 class="text-lg font-bold text-gray-800 dark:text-white">POS</h1>
      </div>
      <div class="flex items-center gap-4 text-gray-600 dark:text-gray-300 text-xl">
        <button onclick="toggleDarkMode()" class="hover:text-blue-500">🌙</button>
        <button class="hover:text-blue-500">🔔</button>
        <button class="hover:text-blue-500">$</button>
        <button class="hover:text-blue-500">⚙️</button>
        <img src="https://i.pravatar.cc/30" class="h-8 w-8 rounded-full border-2 border-blue-400" alt="User">
      </div>
    </header>

    <!-- Dashboard -->
    <main class="p-6 flex-1">
      <!-- Summary Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-md p-6 rounded-2xl shadow-lg">
          <h3 class="text-gray-700 dark:text-gray-300 font-semibold">Total Sales</h3>
          <p class="text-2xl font-bold text-blue-600 dark:text-blue-400 mt-2">$15,400</p>
        </div>
        <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-md p-6 rounded-2xl shadow-lg">
          <h3 class="text-gray-700 dark:text-gray-300 font-semibold">Orders</h3>
          <p class="text-2xl font-bold text-blue-600 dark:text-blue-400 mt-2">320</p>
        </div>
        <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-md p-6 rounded-2xl shadow-lg">
          <h3 class="text-gray-700 dark:text-gray-300 font-semibold">Customers</h3>
          <p class="text-2xl font-bold text-blue-600 dark:text-blue-400 mt-2">145</p>
        </div>
      </div>

      <!-- Chart (Reduced Height) -->
      <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-md p-6 rounded-2xl shadow-lg">
        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Sales Overview</h3>
        <canvas id="salesChart" class="h-30 md:h-30"></canvas>
      </div>
    </main>
  </div>

  <!-- Chart.js Script -->
  <script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
          label: 'Sales',
          data: [1200, 1900, 3000, 2500, 2800, 3200],
          backgroundColor: 'rgba(59, 130, 246, 0.3)',
          borderColor: 'rgba(59, 130, 246, 1)',
          borderWidth: 3,
          fill: true,
          tension: 0.4
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

</body>
</html>
