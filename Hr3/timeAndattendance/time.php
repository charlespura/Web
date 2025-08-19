

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Time and Attendance</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <link rel="icon" type="image/png" href="/web/picture/logo2.png" />

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      lucide.createIcons();
    });
  </script>
</head>
<body class="h-screen overflow-hidden">

  <!-- FLEX LAYOUT: Sidebar + Main -->
  <div class="flex h-full">

    <!-- Sidebar -->
    <?php include '../sidebar.php'; ?>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-y-auto">

      <!-- Main Top Header (inside content) -->
      <main class="p-6 space-y-4">
        <!-- Header -->
        <div class="flex items-center justify-between border-b py-6">
          <!-- Left: Title -->
          <h2 class="text-xl font-semibold text-gray-800" id="main-content-title">Time and Attendance </h2>

  <?php include '../profile.php'; ?>


        </div>




<!-- Second Header: Submodules -->
<div class="bg-gray-100 border-b px-6 py-3 flex gap-4 text-sm font-medium text-gray-700">
  <a href="time.php" class="hover:text-blue-600 transition-colors">Attendance Logs</a>
  <a href="#" class="hover:text-blue-600 transition-colors">Overtime Requests</a>
</div>

        <!-- Page Body -->
        <p class="text-gray-600"></p>
      </main>
  <div class="bg-white shadow-md rounded-2xl p-10 w-full mx-auto mt-10 mb-10">
  <h2 class="text-2xl font-bold mb-4">Attendance Logs</h2>
  
  <!-- Filters -->
  <form class="flex flex-wrap items-center space-x-4 mb-6">
    <!-- Date Filter -->
    <div class="flex flex-col">
      <label for="date" class="font-medium">Date:</label>
      <input type="date" id="date" name="date" required class="border rounded-lg p-2">
      <span class="text-red-500 text-sm hidden" id="date-error">* Required</span>
    </div>

    <!-- Employee Name Filter -->
    <div class="flex flex-col">
      <label for="employee" class="font-medium">Select Employee</label>
      <input 
        type="text" 
        id="employee" 
        name="employee" 
        placeholder="Type for hints..." 
        list="employee-list"
        required 
        class="border rounded-lg p-2"
      >
      <span class="text-red-500 text-sm hidden" id="employee-error">* Required</span>
      <datalist id="employee-list">
        <option value="John Doe">
        <option value="Jane Smith">
        <option value="Michael Lee">
        <option value="Sarah Connor">
      </datalist>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
      Filter
    </button>
  </form>

  <!-- Attendance Table -->
  <table class="w-full border-collapse border border-gray-200">
    <thead class="bg-gray-100">
      <tr>
        <th class="border border-gray-200 p-2">Employee ID</th>
        <th class="border border-gray-200 p-2">Name</th>
        <th class="border border-gray-200 p-2">Check-In</th>
        <th class="border border-gray-200 p-2">Check-Out</th>
        <th class="border border-gray-200 p-2">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="border border-gray-200 p-2">E001</td>
        <td class="border border-gray-200 p-2">John Doe</td>
        <td class="border border-gray-200 p-2">09:02 AM</td>
        <td class="border border-gray-200 p-2">05:15 PM</td>
        <td class="border border-gray-200 p-2 text-green-600 font-semibold">Present</td>
      </tr>
      <tr>
        <td class="border border-gray-200 p-2">E002</td>
        <td class="border border-gray-200 p-2">Jane Smith</td>
        <td class="border border-gray-200 p-2">-</td>
        <td class="border border-gray-200 p-2">-</td>
        <td class="border border-gray-200 p-2 text-red-600 font-semibold">Absent</td>
      </tr>
    </tbody>
  </table>
</div>


    </div>


    
  </div>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const userDropdownToggle = document.getElementById("userDropdownToggle");
      const userDropdown = document.getElementById("userDropdown");

      userDropdownToggle.addEventListener("click", function () {
        userDropdown.classList.toggle("hidden");
      });

      // Close dropdown when clicking outside
      document.addEventListener("click", function (event) {
        if (!userDropdown.contains(event.target) && !userDropdownToggle.contains(event.target)) {
          userDropdown.classList.add("hidden");
        }
      });
    });
  </script>
</body>
</html>
