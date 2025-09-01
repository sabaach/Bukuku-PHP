<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBS - Belajar Bersama Sabach</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">BBS</h1>
            <ul class="flex space-x-6">
                <li><a href="/" class="hover:text-blue-600">Home</a></li>
                <li><a href="#" class="hover:text-blue-600">Categories</a></li>
                <li><a href="#" class="hover:text-blue-600">About</a></li>
                <li><a href="#" class="hover:text-blue-600">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-20">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Belajar Bersama Sabach (BBS)</h2>
            <p class="text-lg mb-8">Platform berbagi pengetahuan IT layaknya Wikipedia. Semua orang bisa belajar dan berbagi!</p>
            <a href="#articles" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">Mulai Belajar</a>
        </div>
    </section>

    <!-- Search Bar -->
    <section class="max-w-3xl mx-auto py-10 px-6">
        <form class="flex">
            <input type="text" placeholder="Cari artikel IT..." class="flex-1 px-4 py-3 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-r-lg hover:bg-blue-700">Cari</button>
        </form>
    </section>

    <!-- Featured Articles -->
    <section id="articles" class="max-w-6xl mx-auto px-6 py-12">
        <h3 class="text-2xl font-bold mb-8 text-center">Artikel Terbaru</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="https://source.unsplash.com/400x200/?technology,computer" class="w-full h-40 object-cover">
                <div class="p-6">
                    <h4 class="text-lg font-bold mb-2">Apa itu AI?</h4>
                    <p class="text-gray-600 text-sm mb-4">Mengenal dasar-dasar Artificial Intelligence dan penerapannya di dunia nyata.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Baca Selengkapnya →</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="https://source.unsplash.com/400x200/?code,developer" class="w-full h-40 object-cover">
                <div class="p-6">
                    <h4 class="text-lg font-bold mb-2">Belajar Laravel</h4>
                    <p class="text-gray-600 text-sm mb-4">Framework PHP paling populer untuk membuat web modern dengan cepat.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Baca Selengkapnya →</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="https://source.unsplash.com/400x200/?cybersecurity,hacking" class="w-full h-40 object-cover">
                <div class="p-6">
                    <h4 class="text-lg font-bold mb-2">Cybersecurity</h4>
                    <p class="text-gray-600 text-sm mb-4">Pentingnya keamanan siber di era digital dan tips melindungi data.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Baca Selengkapnya →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-6 text-center">
        <p>© 2025 BBS - Belajar Bersama Sabach. All rights reserved.</p>
    </footer>

</body>
</html>
