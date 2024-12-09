<?php
 $host = 'localhost';     
 $dbname = 'gorent';  
 $username = 'root';     
 $password = 'yassir';          

 $conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn-> close();

?>
<!-- Html Page Struct -->
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Rent - Car Rental</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/gorent.svg">
    <script src="./scripts/script.js" defer></script>

</head>

<body class="bg-gray-50 text-gray-700">

    <!-- main container -->
    <div class="flex flex-col lg:flex-row min-h-screen ">
        <!-- Sidebar -->
        <aside class="w-full lg:w-64 bg-white border-r" id="sidebar">
            <div class="p-6 border-b flex flex-row justify-between items-center">
                <img src="./assets/gorent-logo.svg">
            </div>
            <nav class="p-6">
                <ul class="space-y-6">
                    <li class="text-orange-600">
                        <a href="#" class="flex items-center space-x-4 text-gray-600 hover:text-orange-600">
                            <i class="ri-dashboard-line text-orange-600"></i>
                            <span class="text-orange-600">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="./pages/clients.php"
                            class="flex items-center space-x-4 text-gray-600 hover:text-orange-600">
                            <i class="ri-group-line"></i>
                            <span>Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="./pages/cars.php"
                            class="flex items-center space-x-4 text-gray-600 hover:text-orange-600">
                            <i class="ri-car-line"></i>
                            <span>Cars</span>
                        </a>
                    </li>
                    <li>
                        <a href="./pages/contrats.php"
                            class="flex items-center space-x-4 text-gray-600 hover:text-orange-600">
                            <i class="ri-save-line"></i>
                            <span>Contrats</span>
                        </a>
                    </li>
                </ul>
                <hr class="my-6">
                <ul class="space-y-6">
                    <li>
                        <a href="#" class="flex items-center space-x-4 text-gray-600 hover:text-orange-600">
                            <i class="ri-exchange-dollar-line"></i>
                            <span>Transactions</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-4 text-gray-600 hover:text-orange-600">
                            <i class="ri-bar-chart-box-line"></i>
                            <span>Statistiques</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <section class="flex-1 p-4 md:p-6 space-y-6">
            <!-- Header -->
            <header
                class="flex flex-col md:flex-row items-start md:items-center justify-between space-y-4 md:space-y-0">
                <i class="ri-sidebar-fold-line text-2xl mt-2 text-orange-600 hover:text-gray-700 transition"
                    id="sidebarIcon"></i>
                <h2 class="text-2xl font-bold">Welcome Yassir</h2>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-500 hover:text-gray-700">
                        <i class="ri-notification-line text-xl"></i>
                    </button>
                    <img src="./assets/profile.png" alt="User" class="w-10 h-10 rounded-full">
                </div>
            </header>

            <!-- Quik action section-->
            <div class="p-6 bg-white shadow rounded-lg">
                <h3 class="text-xl font-bold text-gray-700 mb-4">Quick Actions</h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

                    <button
                        class="flex items-center justify-center p-2 text-gray-700 border border-gray-700 font-medium rounded-lg shadow hover:bg-orange-600 hover:border-none hover:text-white transition duration-200"
                        id="addClientBtn">
                        <i class="ri-user-add-line text-2xl mr-2"></i>
                        Add New Client
                    </button>

                    <button
                        class="flex items-center justify-center p-2  border border-gray-700 text-gray-700 font-medium rounded-lg shadow hover:bg-orange-600 hover:border-none hover:text-white transition duration-800" id="addCarBtn">
                        <i class="ri-car-line text-2xl mr-2"></i>
                        Add New Car
                    </button>

                    <button
                        class="flex items-center justify-center p-2 text-gray-700 border border-gray-700 font-medium rounded-lg shadow hover:bg-orange-600 hover:border-none hover:text-white transition duration-200" id="addContratBtn">
                        <i class="ri-file-add-line text-2xl mr-2"></i>
                        Create New Contract
                    </button>
                </div>
            </div>

            <!-- Statistics & Listings -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Stats Section -->
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-lg shadow flex justify-between items-center">
                        <div>
                            <h4 class="text-gray-600">Revenue Summary</h4>
                            <p class="text-xl font-bold">$1492.21</p>
                            <p class="text-sm text-green-500">+4.5 from last month</p>
                        </div>
                        <i class="ri-line-chart-line text-3xl text-orange-600"></i>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow flex justify-between items-center">
                        <div>
                            <h4 class="text-gray-600">Contracts</h4>
                            <p class="text-xl font-bold">45</p>
                            <p class="text-sm text-green-500">+7.2 from last month</p>
                        </div>
                        <i class="ri-wallet-line text-3xl text-orange-600"></i>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow flex justify-between items-center">
                        <div>
                            <h4 class="text-gray-600">Clients</h4>
                            <p class="text-xl font-bold">54</p>
                            <p class="text-sm text-red-500">-1.2 from last month</p>
                        </div>
                        <i class="ri-group-3-line text-3xl text-orange-600"></i>
                    </div>
                </div>

                <!-- Car Listings -->
                <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow">
                    <h4 class="text-lg font-bold mb-4">Contracts by Status</h4>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-gray-600 border-separate" style="border-spacing: 0 8px;">
                            <thead>
                                <tr class="text-left">
                                    <th class="pb-2">No</th>
                                    <th class="pb-2">Client Name</th>
                                    <th class="pb-2">Car Type</th>
                                    <th class="pb-2">Car Number</th>
                                    <th class="pb-2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white">
                                    <td class="py-2">1</td>
                                    <td class="py-2">Liam Johnson</td>
                                    <td class="py-2">Honda Brio</td>
                                    <td class="py-2">010 MOR</td>
                                    <td class="py-2">
                                        <span class="bg-blue-100 text-blue-600 py-1 px-3 rounded-full">On Going</span>
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="py-2">2</td>
                                    <td class="py-2">Noah Anderson</td>
                                    <td class="py-2">Pajero Sport</td>
                                    <td class="py-2">696 TON</td>
                                    <td class="py-2">
                                        <span class="bg-green-100 text-green-600 py-1 px-3 rounded-full">Finished</span>
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="py-2 ">3</td>
                                    <td class="py-2">Ethan Smith</td>
                                    <td class="py-2">Agya</td>
                                    <td class="py-2">665 KIT</td>
                                    <td class="py-2">
                                        <span class="bg-green-100 text-green-600 py-1 px-3 rounded-full">Finished</span>
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="py-2">4</td>
                                    <td class="py-2">Mason Davis</td>
                                    <td class="py-2">N/A</td>
                                    <td class="py-2">—</td>
                                    <td class="py-2">
                                        <span class="bg-red-100 text-red-600 py-1 px-3 rounded-full">Canceled</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- add new client modal -->
    <div id="addClient" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 ">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-6">

            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl  font-semibold text-orange-600">Add New Client</h3>
                <button class="text-gray-500 hover:text-gray-700 closeAddClient"><i
                        class="ri-close-circle-line text-2xl text-orange-600"></i></button>
            </div>

            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">

                    <div>
                        <label for="first-name" class="mb-2 block text-sm font-medium text-gray-700">First Name</label>
                        <input placeholder="Enter client first name" type="text" id="first-name" name="first-name"
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500"
                            required />
                    </div>

                    <div>
                        <label for="last-name" class="mb-2 block text-sm font-medium text-gray-700">Last Name</label>
                        <input placeholder="Enter client last name" type="text" id="last-name" name="last-name"
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500"
                            required />
                    </div>

                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-700">Email</label>
                        <input placeholder="Enter client email address" type="email" id="email" name="email"
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500"
                            required />
                    </div>

                    <div>
                        <label for="phone" class="mb-2 block text-sm font-medium text-gray-700">Phone</label>
                        <input placeholder="Enter client phone number" type="text" id="phone" name="phone"
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500"
                            required />
                    </div>
                </div>

                <div class="mt-4">
                    <label for="address" class="mb-2 block text-sm font-medium text-gray-700">Address</label>
                    <textarea placeholder="Enter Client address" id="address" name="address" rows="3"
                        class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500"
                        required></textarea>
                </div>

                <div class="mt-6 flex justify-end space-x-2">
                    <button type="button"
                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 closeAddClient">Cancel</button>
                    <button type="submit"
                        class="px-8 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Add new car modal  -->

    <div id="addCarModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 ">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-6">

            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl  font-semibold text-orange-600">Add New Car</h3>
                <button class="text-gray-500 hover:text-gray-700 closeAddCar"><i
                        class="ri-close-circle-line text-2xl text-orange-600"></i></button>
            </div>

            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">

                    <div class="col-span-2">
                        <label for="Car Number" class="mb-2 block text-sm font-medium text-gray-700">Car Number</label>
                        <input placeholder="Enter car Number" type="text" id="carNumber" name="car-number"
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500"
                            required />
                    </div>

                    <div>
                        <label for="Brand Name" class="mb-2 block text-sm font-medium text-gray-700">Brand Name</label>
                        <input placeholder="Enter car brand name" type="text" id="brandName" name="brand-name"
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500"
                            required />
                    </div>

                    <div>
                        <label for="Model" class="mb-2 block text-sm font-medium text-gray-700">Model</label>
                        <input placeholder="Enter model name" type="text" id="model" name="model"
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500"
                            required />
                    </div>

                    <div>
                        <label for="Price/Day" class="mb-2 block text-sm font-medium text-gray-700">Price/Day</label>
                        <input placeholder="Enter price amount per 1 day" type="text" id="priceDay	" name="Price/Day"
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500"
                            required />
                    </div>

                    <div>
                        <label for="year" class="mb-2 block text-sm font-medium text-gray-700">Year</label>
                        <input placeholder="Enter modal year" type="text" id="year" name="year"
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500"
                            required />
                    </div>
                </div>


                <div class="mt-6 flex justify-end space-x-2">
                    <button type="button"
                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 closeAddCar">Cancel</button>
                    <button type="submit"
                        class="px-8 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600">Save</button>
                </div>
            </form>
        </div>
    </div>

<!-- Add New contrat modal  -->

<div id="addContratModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
  <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-6">

    <div class="flex justify-between items-center mb-4">
      <h3 class="text-xl  font-semibold text-orange-600">Add New Contrat</h3>
      <button class="text-gray-500 hover:text-gray-700 closeAddContrat"><i
         class="ri-close-circle-line text-2xl text-orange-600"></i></button>
    </div>

    <form>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4"> 
        <div>
          <label for="client-id" class="mb-2 block text-sm font-medium text-gray-700">Client ID</label>
          <input placeholder="Enter client id" type="text" id="client-id" name="client-id" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500" required />
        </div>

        <div>
          <label for="car-id" class="mb-2 block text-sm font-medium text-gray-700">Car ID</label>
          <input placeholder="Enter car id" type="text" id="car-id" name="car-id" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500" required />
        </div>

        <div>
          <label for="start-date" class="mb-2 block text-sm font-medium text-gray-700">Start Date</label>
          <input placeholder="Enter rent start date" type="date" id="start-date" name="start-date" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500" required />
        </div>

        <div>
          <label for="end-date" class="mb-2 block text-sm font-medium text-gray-700">End Date</label>
          <input placeholder="Enter rent end date"type="date" id="end-date" name="end-date" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500" required />
        </div>
    
        <div class="col-span-2">
          <label for="total" class="mb-2 block text-sm font-medium text-gray-700">Total</label>
          <input placeholder="Enter total price" type="number" id="total" name="total" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-orange-500 focus:border-orange-500" required />
        </div>
      </div>
   
      <div class="mt-6 flex justify-end space-x-2">
        <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 closeAddContrat">Cancel</button>
        <button type="submit" class="px-8 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600">Save</button>
      </div>
    </form>
  </div>
</div>


</body>

</html>