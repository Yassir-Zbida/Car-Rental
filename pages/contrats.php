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
    <link rel="icon" type="image/x-icon" href="../assets/gorent.svg">
    <script src="../scripts/script.js" defer></script>

</head>

<body class="bg-gray-50 text-gray-700">

    <!-- main container -->
    <div class="flex flex-col lg:flex-row min-h-screen ">
        <!-- Sidebar -->
        <aside class="w-full lg:w-64 bg-white border-r" id="sidebar">
            <div class="p-6 border-b flex flex-row justify-between items-center">
                <img src="../assets/gorent-logo.svg">
            </div>
            <nav class="p-6">
                <ul class="space-y-6">
                    <li class="text-orange-600">
                        <a href="../index.php" class="flex items-center space-x-4 text-gray-600 hover:text-orange-600">
                            <i class="ri-dashboard-line"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="./clients.php" class="flex items-center space-x-4 text-gray-600 hover:text-orange-600">
                            <i class="ri-group-line"></i>
                            <span>Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="./cars.php" class="flex items-center space-x-4 text-gray-600 hover:text-orange-600">
                            <i class="ri-car-line "></i>
                            <span>Cars</span>
                        </a>
                    </li>
                    <li>
                        <a href="./contrats.php"
                            class="flex items-center space-x-4 text-orange-600 hover:text-orange-600">
                            <i class="ri-save-line"></i>
                            <span class="text-orange-600">Contrats</span>
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
                <h2 class="text-2xl font-bold">Contrats</h2>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-500 hover:text-gray-700">
                        <i class="ri-notification-line text-xl"></i>
                    </button>
                    <img src="../assets/profile.png" alt="User" class="w-10 h-10 rounded-full">
                </div>
            </header>

            <!-- Header Options section-->
            <div class="bg-white flex items-center justify-between w-full  p-4 shadow rounded-md mb-4">
                <div class="w-full flex items-center justify-between space-x-4">
                    <!-- Search -->
                    <div class="relative">
                        <input type="text" placeholder="Search for contrat..."
                            class="w-64 pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-orange-200 text-sm text-gray-600" />
                        <i class="ri-search-line absolute left-3 top-2 text-gray-400"></i>
                    </div>
                    <!-- Add Car -->
                    <button
                        class="transition duration-200flex items-center bg-orange-600 hover:bg-transparent hover:text-orange-600 text-white px-4 py-2 rounded-lg shadow text-sm font-medium">
                        <i class="ri-sticky-note-add-line text-lg mr-2"></i> Add Contrat
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">
                <!-- cars table -->
                <div class=" bg-white p-6 rounded-lg shadow">
                    <h4 class="text-lg font-bold mb-4">Go Rent Contrats</h4>
                    <div class="overflow-x-auto bg-white shadow rounded-lg">
                        <table class="border w-full border-collapse text-sm text-gray-600">
                            
                            <thead>
                                <tr class="bg-gray-100 text-left">
                                    <th class="py-2 px-4 border-b">ID</th>
                                    <th class="py-2 px-4 border-b">Client ID</th>
                                    <th class="py-2 px-4 border-b">Car ID</th>
                                    <th class="py-2 px-4 border-b">Start Date</th>
                                    <th class="py-2 px-4 border-b">End Date</th>
                                    <th class="py-2 px-4 border-b">Total</th>
                                    <th class="py-2 px-4 border-b">Status</th>
                                    <th class="py-2 px-4 border-b text-center">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-4 border-b">1</td>
                                    <td class="py-3 px-4 border-b">23</td>
                                    <td class="py-3 px-4 border-b">12</td>
                                    <td class="py-3 px-4 border-b">2024-01-01</td>
                                    <td class="py-3 px-4 border-b">2024-01-05</td>
                                    <td class="py-3 px-4 border-b">$150</td>
                                    <td class="py-3 px-4 border-b">
                                        <span class="bg-green-100 text-green-600 py-1 px-3 rounded-full">Active</span>
                                    </td>
                                    <td class="py-3 px-4 border-b text-center space-x-2">
                                        <button class="text-blue-500 hover:text-blue-600">
                                            <i class="ri-eye-line text-lg"></i>
                                        </button>
                                        <button class="text-red-500 hover:text-red-600">
                                            <i class="ri-delete-bin-line text-lg"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-4 border-b">2</td>
                                    <td class="py-3 px-4 border-b">45</td>
                                    <td class="py-3 px-4 border-b">18</td>
                                    <td class="py-3 px-4 border-b">2024-02-10</td>
                                    <td class="py-3 px-4 border-b">2024-02-15</td>
                                    <td class="py-3 px-4 border-b">$200</td>
                                    <td class="py-3 px-4 border-b">
                                        <span class="bg-red-100 text-red-600 py-1 px-3 rounded-full">Expired</span>
                                    </td>
                                    <td class="py-3 px-4 border-b text-center space-x-2">
                                        <button class="text-blue-500 hover:text-blue-600">
                                            <i class="ri-eye-line text-lg"></i>
                                        </button>
                                        <button class="text-red-500 hover:text-red-600">
                                            <i class="ri-delete-bin-line text-lg"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-4 border-b">3</td>
                                    <td class="py-3 px-4 border-b">12</td>
                                    <td class="py-3 px-4 border-b">8</td>
                                    <td class="py-3 px-4 border-b">2024-03-01</td>
                                    <td class="py-3 px-4 border-b">2024-03-07</td>
                                    <td class="py-3 px-4 border-b">$300</td>
                                    <td class="py-3 px-4 border-b">
                                        <span class="bg-green-100 text-green-600 py-1 px-3 rounded-full">Active</span>
                                    </td>
                                    <td class="py-3 px-4 border-b text-center space-x-2">
                                        <button class="text-blue-500 hover:text-blue-600">
                                            <i class="ri-eye-line text-lg"></i>
                                        </button>
                                        <button class="text-red-500 hover:text-red-600">
                                            <i class="ri-delete-bin-line text-lg"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>