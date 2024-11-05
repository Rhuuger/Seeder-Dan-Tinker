<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dengan Tailwind CSS</title>
    @vite('resources/css/app.css') <!-- Tautkan CSS yang sudah diproses -->
    <script src="https://cdn.tailwindcss.com"></script>     
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0">
                        <a href="#" class="text-lg font-bold text-blue-600">Brand</a>
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-500 hover:bg-gray-100 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                            <a href="#" class="text-gray-500 hover:bg-gray-100 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">About</a>
                            <a href="#" class="text-gray-500 hover:bg-gray-100 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Services</a>
                            <a href="#" class="text-gray-500 hover:bg-gray-100 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="text-gray-500 hover:bg-gray-100 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="#" class="text-gray-500 hover:bg-gray-100 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="#" class="text-gray-500 hover:bg-gray-100 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">Services</a>
                <a href="#" class="text-gray-500 hover:bg-gray-100 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <main class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold">Welcome to the Tailwind Navbar Example</h1>
        </div>
    </main>
</body>
</html>
