<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
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
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded">
                            <i class="fas fa-users mr-2"></i> Manage Tags
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded">
                            <i class="fas fa-user-tag mr-2"></i> Manage Categories
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded">
                            <i class="fas fa-briefcase mr-2"></i> Manage Users
                        </a>
                    </li>
                    <li>
                        <a href="#categories-tags" class="block px-4 py-2 hover:bg-gray-700 rounded">
                            <i class="fas fa-tags mr-2"></i> Manage Roles
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded">
                            <i class="fas fa-chart-bar mr-2"></i> Reports
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="flex-1 p-6 bg-white">
            <header class="flex items-center justify-between pb-6 border-b">
                <h1 class="text-2xl font-semibold text-gray-700">Welcome, Admin!</h1>
                <a href="logout.php" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                    Logout
                </a>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                <div class="p-4 bg-blue-500 text-white rounded shadow-md">
                    <h2 class="text-lg font-semibold">Total Users</h2>
                    <p class="mt-2 text-2xl font-bold">1,245</p>
                </div>
                <div class="p-4 bg-green-500 text-white rounded shadow-md">
                    <h2 class="text-lg font-semibold">Active Jobs</h2>
                    <p class="mt-2 text-2xl font-bold">345</p>
                </div>
                <div class="p-4 bg-yellow-500 text-white rounded shadow-md">
                    <h2 class="text-lg font-semibold">Applications</h2>
                    <p class="mt-2 text-2xl font-bold">7,892</p>
                </div>
                <div class="p-4 bg-red-500 text-white rounded shadow-md">
                    <h2 class="text-lg font-semibold">Pending Tasks</h2>
                    <p class="mt-2 text-2xl font-bold">23</p>
                </div>
            </div>

            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Recent User Activity</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse bg-white shadow rounded-lg">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Role</th>
                                <th class="px-4 py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2">John Doe</td>
                                <td class="px-4 py-2">john.doe@example.com</td>
                                <td class="px-4 py-2">Recruiter</td>
                                <td class="px-4 py-2 text-green-500">Active</td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2">Jane Smith</td>
                                <td class="px-4 py-2">jane.smith@example.com</td>
                                <td class="px-4 py-2">Candidate</td>
                                <td class="px-4 py-2 text-yellow-500">Pending</td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2">Alice Johnson</td>
                                <td class="px-4 py-2">alice.johnson@example.com</td>
                                <td class="px-4 py-2">Admin</td>
                                <td class="px-4 py-2 text-red-500">Suspended</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <section id="categories-tags" class="mt-12">
                <header class="flex items-center justify-between pb-6 border-b">
                    <h1 class="text-2xl font-semibold text-gray-700">Manage Categories & Tags</h1>
                    <a href="add_category_tag.php" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        Add New
                    </a>
                </header>

                <div class="mt-8">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Categories</h2>
                    <div class="overflow-x-auto mb-8">
                        <table class="w-full text-left border-collapse bg-white shadow rounded-lg">
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
                    </div>

                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Tags</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse bg-white shadow rounded-lg">
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
                    </div>
                </div>
            </section>
        </main>
    </div>

</body>
</html>
