
<?php
require_once("../../../../vendor/autoload.php");
require '../../../../src/Controllers/Auth/RegisterController.php';

use App\Controllers\Admin\CategoriesConttroller;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $CategoriesConttroller = new CategoriesConttroller();
    $CategoriesConttroller->Categorie($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Manage Categories & Tags</title>
</head>
<body class="bg-gray-100">

    <div class="flex min-h-screen">
       
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4 text-center">
                <h1 class="text-2xl font-bold">Admin Dashboard</h1>
            </div>
            <nav class="mt-8">
                <ul class="space-y-2">
                    <li>
                        <a href="dashboard.php" class="block px-4 py-2 hover:bg-gray-700 rounded">Dashboard</a>
                    </li>
                    <li>
                        <a href="manage_users.php" class="block px-4 py-2 hover:bg-gray-700 rounded">Manage Users</a>
                    </li>
                    <li>
                        <a href="manage_roles.php" class="block px-4 py-2 hover:bg-gray-700 rounded">Manage Roles</a>
                    </li>
                    <li>
                        <a href="job_listings.php" class="block px-4 py-2 hover:bg-gray-700 rounded">Job Listings</a>
                    </li>
                    <li>
                        <a href="categories_tags.php" class="block px-4 py-2 bg-gray-700 rounded">Categories & Tags</a>
                    </li>
                    <li>
                        <a href="reports.php" class="block px-4 py-2 hover:bg-gray-700 rounded">Reports</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <div id="addCategoryModal" class=" fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white w-96 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Add New Category</h2>
                <form action="" method="POST">
                    <div class="mb-4">
                        <label for="categoryName" class="block text-gray-700 font-medium mb-2">Category Name</label>
                        <input type="text" id="categoryName" name="nom_category" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter category name">
                    </div>
                    <div class="flex justify-end space-x-4">
                        <button type="button" class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400" onclick="closeModal('addCategoryModal')">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save</button>
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
</body>
</html>
