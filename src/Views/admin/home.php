<?php

require_once __DIR__ . '../../../Config/DatabaseConnection.php';

use App\Config\DatabaseConnection;

$db = new DatabaseConnection();
$connexion = $db->connect();
$totalUsers = $connexion->query("SELECT COUNT(*) AS count FROM users")->fetch(PDO::FETCH_ASSOC)['count'];
$totalCandidats = $connexion->query("SELECT COUNT(*) AS count FROM candidats")->fetch(PDO::FETCH_ASSOC)['count'];
$totalRecruteurs = $connexion->query("SELECT COUNT(*) AS count FROM recruteurs")->fetch(PDO::FETCH_ASSOC)['count'];
$totaloffresemploi = $connexion->query("SELECT COUNT(*) AS count FROM offresemploi")->fetch(PDO::FETCH_ASSOC)['count'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Admin Dashboard</title>
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
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded" data-target="dashboard">
                            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded" data-target="manage-tags">
                            <i class="fas fa-tags mr-2"></i> Manage Tags
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded" data-target="manage-categories">
                            <i class="fas fa-folder-open mr-2"></i> Manage Categories
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded" data-target="manage-roles">
                            <i class="fas fa-user-tag mr-2"></i> Manage Roles
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded" data-target="manage-users">
                            <i class="fas fa-users mr-2"></i> Manage Users
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

   
        <main class="flex-1 p-6 bg-white">
           
            <section id="dashboard" class="block">
                <header class="flex items-center justify-between pb-6 border-b">
                    <h1 class="text-2xl font-semibold text-gray-700">Welcome, Admin!</h1>
                    <a href="logout.php" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                        Logout
                    </a>
                </header>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                    <div class="p-4 bg-blue-500 text-white rounded shadow-md">
                        <h2 class="text-lg font-semibold">Total Users</h2>
                        <p class="mt-2 text-2xl font-bold"><?= $totalUsers ?></p>
                    </div>
                    <div class="p-4 bg-green-500 text-white rounded shadow-md">
                        <h2 class="text-lg font-semibold">Total Candidats</h2>
                        <p class="mt-2 text-2xl font-bold"><?= $totalCandidats ?></p>
                    </div>
                    <div class="p-4 bg-yellow-500 text-white rounded shadow-md">
                        <h2 class="text-lg font-semibold">Total Recruiters</h2>
                        <p class="mt-2 text-2xl font-bold"><?= $totalRecruteurs ?></p>
                    </div>
                    <div class="p-4 bg-red-500 text-white rounded shadow-md">
                        <h2 class="text-lg font-semibold">Total offres emploi</h2>
                        <p class="mt-2 text-2xl font-bold"><?= $totaloffresemploi ?></p>
                    </div>
                </div>
            </section>

           
            <section id="manage-tags" class="hidden">
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

         
            <section id="manage-categories" class="hidden">
                <h1 class="text-2xl font-semibold text-gray-700 mb-4">Manage Categories</h1>
                <button id="addCategoryBtn" class="mb-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600" onclick="openModal('addCategoryModal')">
                    Add New Category
                </button>
                <table class="w-full border-collapse bg-white shadow rounded-lg">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2">Category Name</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2">Technology</td>
                            <td class="px-4 py-2">Jobs in the tech industry</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                                <a href="#" class="text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2">Healthcare</td>
                            <td class="px-4 py-2">Jobs in the healthcare industry</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                                <a href="#" class="text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

           
            <section id="manage-roles" class="hidden">
                <h1 class="text-2xl font-semibold text-gray-700 mb-4">Manage Roles</h1>
                <button id="addRoleBtn" class="mb-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Add New Role
                </button>
                <table class="w-full border-collapse bg-white shadow rounded-lg">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2">Role Name</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2">Admin</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                                <a href="#" class="text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2">Recruiter</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                                <a href="#" class="text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

           
            <section id="manage-users" class="hidden">
                <h1 class="text-2xl font-semibold text-gray-700 mb-4">Manage Users</h1>
                <table class="w-full border-collapse bg-white shadow rounded-lg">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Role</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2">John Doe</td>
                            <td class="px-4 py-2">john@example.com</td>
                            <td class="px-4 py-2">Recruiter</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                                <a href="#" class="text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2">Jane Smith</td>
                            <td class="px-4 py-2">jane@example.com</td>
                            <td class="px-4 py-2">Admin</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                                <a href="#" class="text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
       
<div id="addTagModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white w-96 p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">Add New Tag</h2>
        <form>
            <div class="mb-4">
                <label for="tagName" class="block text-gray-700 font-medium mb-2">Tag Name</label>
                <input type="text" id="tagName" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter tag name">
            </div>
            <div class="flex justify-end space-x-4">
                <button type="button" class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400" onclick="closeModal('addTagModal')">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save</button>
            </div>
        </form>
    </div>
</div>


<div id="addCategoryModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white w-96 p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">Add New Category</h2>
        <form>
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
        
        document.querySelectorAll('a[data-target]').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                document.querySelectorAll('main > section').forEach(section => {
                    section.classList.add('hidden');
                });
                const target = link.getAttribute('data-target');
                document.getElementById(target).classList.remove('hidden');
            });
        });
    </script>
</body>
</html>
