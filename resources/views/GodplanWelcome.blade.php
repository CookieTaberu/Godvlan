<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Godplan - UMKM Finance</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 font-sans">

  <header class="flex justify-between items-center p-6 bg-white shadow-md">
    <h1 class="text-2xl font-bold text-blue-900">GODPLAN</h1>
    <nav class="space-x-6">
      <a href="#" class="text-blue-800 hover:underline">Features</a>
      <a href="#" class="text-blue-800 hover:underline">Pricing</a>
      <a href=LoginPage class="font-semibold text-blue-900">Login</a>
    </nav>
  </header>

  <main class="flex flex-col md:flex-row justify-between items-center p-10 max-w-6xl mx-auto">
    <!-- Left side -->
    <div class="max-w-lg space-y-6">
      <h2 class="text-4xl font-extrabold text-blue-900">Manage your money with ease</h2>
      <p class="text-gray-700 text-lg">A web for UMKM to calculate profit and access chatbot</p>
      <a href="#" class="inline-block px-6 py-3 bg-teal-600 text-white rounded-lg font-semibold hover:bg-teal-700">Get Started</a>
    </div>

    <!-- Right side -->
    <div class="bg-white shadow-lg rounded-xl p-6 mt-10 md:mt-0 w-full max-w-sm">
      <h3 class="text-lg text-gray-600">Balance</h3>
      <p class="text-2xl font-bold text-blue-900">Rp 10,500,000</p>

      <div class="mt-4">
        <h4 class="text-gray-700 font-semibold">Profit Calculation</h4>
        <div class="flex justify-between text-sm text-gray-600 mt-2">
          <span>Income</span><span>Rp 7.000.000</span>
        </div>
        <div class="w-full bg-gray-200 h-2 rounded mt-1 mb-3">
          <div class="bg-green-500 h-2 rounded w-[80%]"></div>
        </div>
        <div class="flex justify-between text-sm text-gray-600">
          <span>Expense</span><span>Rp 4.500.000</span>
        </div>
        <div class="w-full bg-gray-200 h-2 rounded mt-1 mb-3">
          <div class="bg-red-500 h-2 rounded w-[60%]"></div>
        </div>
        <p class="text-sm mt-2 font-bold text-gray-700">Profit: <span class="text-blue-800">Rp 2.500.000</span></p>
      </div>

      <div class="mt-6">
        <a href="#" class="flex items-center justify-between bg-blue-100 p-3 rounded-lg hover:bg-blue-200">
          <span class="text-blue-800 font-medium">Chatbot</span>
          <span class="text-blue-600">→</span>
        </a>
      </div>
    </div>
  </main>

</body>
</html>
