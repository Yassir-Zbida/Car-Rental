<!-- Database Connection -->
<?php
$host = 'localhost'; 
$dbname = 'locationvoitures'; 
$user = 'root'; 
$password = 'yassir'; 
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
                        <a href="./pages/clients.php" class="flex items-center space-x-4 text-gray-600 hover:text-orange-600">
                            <i class="ri-group-line"></i>
                            <span>Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="./pages/cars.php" class="flex items-center space-x-4 text-gray-600 hover:text-orange-600">
                            <i class="ri-car-line"></i>
                            <span>Cars</span>
                        </a>
                    </li>
                    <li>
                        <a href="./pages/contracts.php" class="flex items-center space-x-4 text-gray-600 hover:text-orange-600">
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

        <!-- Main Content -->
        <main class="flex-1 p-4 md:p-6 space-y-6">
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
                        class="flex items-center justify-center p-2 text-gray-700 border border-gray-700 font-medium rounded-lg shadow hover:bg-orange-600 hover:border-none hover:text-white transition duration-200">
                        <i class="ri-user-add-line text-2xl mr-2"></i>
                        Add New Client
                    </button>

                    <button
                        class="flex items-center justify-center p-2  border border-gray-700 text-gray-700 font-medium rounded-lg shadow hover:bg-orange-600 hover:border-none hover:text-white transition duration-800">
                        <i class="ri-car-line text-2xl mr-2"></i>
                        Add New Vehicle
                    </button>

                    <button
                        class="flex items-center justify-center p-2 text-gray-700 border border-gray-700 font-medium rounded-lg shadow hover:bg-orange-600 hover:border-none hover:text-white transition duration-200">
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
                        <!-- <i class="ri-arrow-down-line "></i> -->
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
        </main>
    </div>

</body>

</html>