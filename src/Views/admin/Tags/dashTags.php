
<?php
require_once("../../../../vendor/autoload.php");


use App\Controllers\Admin\CategoriesConttroller;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Manage Categories</title>
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex min-h-screen">
   
        <aside class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-4 text-center border-b border-gray-700">
                <h1 class="text-2xl font-bold">Admin Dashboard</h1>
            </div>
            <nav class="flex-grow mt-8">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded transition duration-300">
                            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded transition duration-300">
                            <i class="fas fa-tags mr-2"></i> Manage Tags
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded transition duration-300">
                            <i class="fas fa-folder-open mr-2"></i> Manage Categories
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded transition duration-300">
                            <i class="fas fa-user-tag mr-2"></i> Manage Roles
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded transition duration-300">
                            <i class="fas fa-users mr-2"></i> Manage Users
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

       
        <main class="flex-grow p-6">
        <section id="manage-tags" >
                <h1 class="text-2xl font-semibold text-gray-700 mb-4">Manage Tags</h1>
                <button id="addTagBtn" class="mb-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600" onclick="openModal('addTagModal')">
                    Add New Tag
                </button>
                <table class="w-full border-collapse bg-white shadow rounded-lg">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2">Tag Name</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2">Full-Time</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                                <a href="#" class="text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2">Remote</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                                <a href="#" class="text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>

        
        <div id="addCategoryModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white w-96 p-6 rounded-lg shadow-lg animate-fadeIn">
                <h2 class="text-xl font-bold mb-4">Add New Category</h2>
                <form action="" method="POST">
                    <div class="mb-4">
                        <label for="categoryName" class="block text-gray-700 font-medium mb-2">Category Name</label>
                        <input type="text" id="categoryName" name="nom_category" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter category name" required>
                    </div>
                    <div class="flex justify-end space-x-4">
                        <button type="button" class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 transition duration-300" onclick="closeModal('addCategoryModal')">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }
    </script>
</body>

</html>
