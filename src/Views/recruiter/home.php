<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Recruiter Dashboard</title>
</head>
<body class="bg-gray-100">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-indigo-700 text-white">
            <div class="p-4 text-center">
                <h1 class="text-2xl font-bold">Recruiter Dashboard</h1>
            </div>
            <nav class="mt-8">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-indigo-600 rounded">
                            <i class="fas fa-briefcase mr-2"></i> My Job Posts
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-indigo-600 rounded">
                            <i class="fas fa-users mr-2"></i> Applicants
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-indigo-600 rounded">
                            <i class="fas fa-chart-line mr-2"></i> Statistics
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-indigo-600 rounded">
                            <i class="fas fa-cog mr-2"></i> Settings
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="flex-1 p-6 bg-white">
            <header class="flex items-center justify-between pb-6 border-b">
                <h1 class="text-2xl font-semibold text-gray-700">Welcome, Recruiter!</h1>
                <a href="logout.php" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                    Logout
                </a>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                <div class="p-4 bg-blue-500 text-white rounded shadow-md">
                    <h2 class="text-lg font-semibold">Active Job Posts</h2>
                    <p class="mt-2 text-2xl font-bold">12</p>
                </div>
                <div class="p-4 bg-green-500 text-white rounded shadow-md">
                    <h2 class="text-lg font-semibold">Total Applicants</h2>
                    <p class="mt-2 text-2xl font-bold">432</p>
                </div>
                <div class="p-4 bg-yellow-500 text-white rounded shadow-md">
                    <h2 class="text-lg font-semibold">Pending Reviews</h2>
                    <p class="mt-2 text-2xl font-bold">8</p>
                </div>
                <div class="p-4 bg-purple-500 text-white rounded shadow-md">
                    <h2 class="text-lg font-semibold">Interviews Scheduled</h2>
                    <p class="mt-2 text-2xl font-bold">5</p>
                </div>
            </div>

            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Recent Applicants</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse bg-white shadow rounded-lg">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Job Title</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2">John Doe</td>
                                <td class="px-4 py-2">Software Engineer</td>
                                <td class="px-4 py-2 text-green-500">Reviewed</td>
                                <td class="px-4 py-2">
                                    <button class="px-3 py-1 bg-indigo-500 text-white rounded hover:bg-indigo-600">Details</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2">Jane Smith</td>
                                <td class="px-4 py-2">Project Manager</td>
                                <td class="px-4 py-2 text-yellow-500">Pending</td>
                                <td class="px-4 py-2">
                                    <button class="px-3 py-1 bg-indigo-500 text-white rounded hover:bg-indigo-600">Details</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2">Alice Johnson</td>
                                <td class="px-4 py-2">UI/UX Designer</td>
                                <td class="px-4 py-2 text-red-500">Rejected</td>
                                <td class="px-4 py-2">
                                    <button class="px-3 py-1 bg-indigo-500 text-white rounded hover:bg-indigo-600">Details</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>
</html>


</body>
</html>