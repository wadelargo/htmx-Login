<div class="min-h-screen flex flex-col">
    <!-- Sidebar -->
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row">
        <aside class="bg-gray-900 w-full md:w-64 lg:w-64 min-h-screen">
            <div class="px-6 py-4 text-white">
                <div class="text-lg font-semibold">Admin Dashboard</div>
            </div>
            <nav class="mt-5">
                <a href="#" class="block px-6 py-2 mt-1 text-sm text-gray-400 hover:bg-gray-700 hover:text-white transition duration-300">Dashboard</a>
                <a href="#" class="block px-6 py-2 mt-1 text-sm text-gray-400 hover:bg-gray-700 hover:text-white transition duration-300">Users</a>
                <a href="#" class="block px-6 py-2 mt-1 text-sm text-gray-400 hover:bg-gray-700 hover:text-white transition duration-300">Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-gray-100 p-6">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Dashboard</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Example cards -->
                <div class="bg-white shadow-lg rounded-lg p-6 transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <h2 class="text-2xl font-semibold text-gray-800">Card Title</h2>
                    <p class="mt-4 text-gray-600">Some description about this card.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <h2 class="text-2xl font-semibold text-gray-800">Card Title</h2>
                    <p class="mt-4 text-gray-600">Some description about this card.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <h2 class="text-2xl font-semibold text-gray-800">Card Title</h2>
                    <p class="mt-4 text-gray-600">Some description about this card.</p>
                </div>
            </div>
        </main>
    </div>
</div>

<style>
    body {
        font-family: 'Inter', sans-serif;
    }

    a {
        transition: all 0.3s ease;
    }

    aside {
        transition: background-color 0.3s ease;
    }

    aside:hover {
        background-color: #2d3748;
    }

    main {
        background-color: #f7fafc;
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
</style>