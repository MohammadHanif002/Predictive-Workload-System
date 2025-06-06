<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @vite('resources/css/app.css') {{-- pastikan Vite sudah di-setup --}}
</head>

<body class="bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white font-sans">

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-10 py-6 backdrop-blur-md bg-white/5 border-b border-white/10">
        <h1 class="text-2xl font-bold tracking-wide text-cyan-400">MonRahyLin</h1>
        <ul class="flex gap-6 text-sm font-medium">
            <li><a href="#" class="hover:text-cyan-400 transition">Home</a></li>
            <li><a href="#" class="hover:text-cyan-400 transition">Services</a></li>
            <li><a href="#" class="hover:text-cyan-400 transition">About</a></li>
            <li><a href="#" class="hover:text-cyan-400 transition">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-between px-10 py-20 gap-12">
        <div class="md:w-1/2 space-y-6">
            <h2
                class="text-4xl md:text-6xl font-extrabold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">
                Prediksi Beban Kerja Karyawan IT <br>Berbasis Machine Learning
            </h2>
            <p class="text-gray-300 text-lg leading-relaxed">
                Meningkatkan efisiensi alokasi kerja dengan model prediktif berbasis Linear Regression
            </p>
            <div class="flex gap-4">
                <a href="#" class="px-6 py-3 bg-cyan-500 text-white rounded-xl hover:bg-cyan-600 transition shadow-lg">
                    Lihat Demo
                </a>
                <a href="#"
                    class="px-6 py-3 border border-cyan-400 text-cyan-400 rounded-xl hover:bg-cyan-600 hover:text-white transition">
                    Baca Proposal
                </a>
            </div>
        </div>
        <div class="md:w-1/2">
            <img src="img/Businnes.jpg" alt="Business Image" class="rounded-3xl shadow-2xl">
        </div>
    </section>

    <!-- Services Section -->
    <section class="px-10 py-20 bg-black/10 backdrop-blur-lg">
        <h3 class="text-center text-3xl font-semibold mb-12 text-cyan-400">Layanan Kami</h3>
        <div class="flex justify-center">
            <a href="/prediksi" class="block hover:scale-105 transition" fle>
                <div class="bg-white/5 rounded-2xl p-6 border border-white/10 hover:border-cyan-400">
                    <h4 class="text-xl font-bold mb-2 text-cyan-300">Prediksi Beban Kerja</h4>
                    <p class="text-gray-300 text-sm">
                        Berdasarkan Pengalaman, Jumlah Proyek, dan Rating Kinerja.
                    </p>
                </div>
            </a>
            {{-- <div class="bg-white/5 rounded-2xl p-6 border border-white/10 hover:scale-105 transition">
                <h4 class="text-xl font-bold mb-2 text-cyan-300">Rekomendasi Tugas</h4>
                <p class="text-gray-300 text-sm">
                    Distribusi tugas lebih adil & efisien
                </p>
            </div> --}}
            {{-- <div class="bg-white/5 rounded-2xl p-6 border border-white/10 hover:scale-105 transition">
                <h4 class="text-xl font-bold mb-2 text-cyan-300">Visualisasi Data</h4>
                <p class="text-gray-300 text-sm">
                    Grafik korelasi & evaluasi model.
                </p>
            </div> --}}
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-10 border-t border-white/10 text-gray-400">
        &copy; {{ date('Y') }} Universitas Jember – Fakultas Ilmu Komputer
    </footer>

</body>

</html>