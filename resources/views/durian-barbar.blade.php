@extends('layouts.app') <!-- Sesuaikan dengan nama layout master kamu, hapus jika tidak pakai -->

@section('content')
<div class="min-h-screen bg-slate-950 py-16 px-4 sm:px-6 lg:px-8 font-sans">
    <div class="max-w-6xl mx-auto">
        
        <!-- Header / Hero Section -->
        <div class="mb-14 text-center">
            <div class="inline-block px-4 py-1.5 rounded-full bg-yellow-500/10 border border-yellow-500/20 text-yellow-400 text-sm font-semibold tracking-wide mb-4">
                E-Commerce & Profil Bisnis
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">
                Durian <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-green-400">Bar Bar</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
                Platform digital untuk mengenalkan dan memesan berbagai menu olahan durian terbaik, langsung dari layar Anda.
            </p>
        </div>

        <!-- Grid Layout Utama -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Kolom Kiri (Konten Utama: 2 Kolom) -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Card: Tentang Proyek -->
                <div class="bg-slate-900/80 backdrop-blur-sm rounded-3xl p-8 border border-slate-800 shadow-2xl">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-book-open text-yellow-400 mr-3"></i> Latar Belakang & Tujuan
                    </h2>
                    <div class="text-slate-300 space-y-4 leading-relaxed text-justify">
                        <p>
                            Website Durian Bar Bar dibangun sebagai langkah digitalisasi untuk memperluas promosi usaha yang sebelumnya belum memiliki media digital. Proyek ini merupakan hasil kolaborasi tim beranggotakan 4 orang, diciptakan sebagai bentuk kontribusi nyata untuk membantu UMKM.
                        </p>
                        <p>
                            Melalui website ini, pelanggan dapat dengan mudah melihat informasi lengkap mengenai menu, ketersediaan produk, dan lokasi outlet. Proyek ini juga menjadi wadah implementasi keahlian <em>web development</em> untuk menghadirkan solusi teknologi yang tepat guna bagi dunia usaha.
                        </p>
                    </div>
                </div>

                <!-- Card: Fitur & Halaman -->
                <div class="bg-slate-900/80 backdrop-blur-sm rounded-3xl p-8 border border-slate-800 shadow-2xl">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fa-solid fa-layer-group text-green-400 mr-3"></i> Fitur & Menu Utama
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        
                        <!-- Item Fitur 1 -->
                        <div class="bg-slate-950/50 p-5 rounded-2xl border border-slate-800 hover:border-yellow-500/50 transition-colors">
                            <div class="w-10 h-10 rounded-full bg-yellow-500/10 flex items-center justify-center mb-4">
                                <i class="fa-solid fa-utensils text-yellow-400"></i>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Katalog Menu Dinamis</h3>
                            <p class="text-sm text-slate-400 leading-relaxed">Menampilkan berbagai kategori hidangan secara lengkap seperti Es Durian, Es Dawet, Es Teler, Mie Ayam, hingga aneka cemilan.</p>
                        </div>

                        <!-- Item Fitur 2 -->
                        <div class="bg-slate-950/50 p-5 rounded-2xl border border-slate-800 hover:border-green-500/50 transition-colors">
                            <div class="w-10 h-10 rounded-full bg-green-500/10 flex items-center justify-center mb-4">
                                <i class="fa-solid fa-shield-halved text-green-400"></i>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Sistem Autentikasi</h3>
                            <p class="text-sm text-slate-400 leading-relaxed">Keamanan akses dengan fitur pendaftaran akun dan login yang terenkripsi untuk menjaga privasi pelanggan.</p>
                        </div>

                        <!-- Item Fitur 3 -->
                        <div class="bg-slate-950/50 p-5 rounded-2xl border border-slate-800 hover:border-cyan-500/50 transition-colors">
                            <div class="w-10 h-10 rounded-full bg-cyan-500/10 flex items-center justify-center mb-4">
                                <i class="fa-solid fa-circle-info text-cyan-400"></i>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Halaman Informasi</h3>
                            <p class="text-sm text-slate-400 leading-relaxed">Akses mudah ke informasi penting melalui halaman Home, About Us, Outlet, dan Contact Us.</p>
                        </div>

                        <!-- Item Fitur 4 -->
                        <div class="bg-slate-950/50 p-5 rounded-2xl border border-slate-800 hover:border-purple-500/50 transition-colors">
                            <div class="w-10 h-10 rounded-full bg-purple-500/10 flex items-center justify-center mb-4">
                                <i class="fa-solid fa-user-gear text-purple-400"></i>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Manajemen Profil</h3>
                            <p class="text-sm text-slate-400 leading-relaxed">Halaman dashboard profil sederhana yang dirancang agar pengguna dapat mengelola data pribadinya dengan nyaman.</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Kolom Kanan (Sidebar: 1 Kolom) -->
            <div class="space-y-8">
                
                <!-- Card: Detail Info -->
                <div class="bg-slate-900/80 backdrop-blur-sm rounded-3xl p-6 border border-slate-800 shadow-2xl">
                    <h3 class="text-xl font-bold text-white mb-6 border-b border-slate-800 pb-4">Informasi Proyek</h3>
                    
                    <ul class="space-y-5">
                        <li>
                            <span class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Klien</span>
                            <span class="block text-slate-200 font-medium">Toko Bar-Bar Es Dawet Durian</span>
                        </li>
                        <li>
                            <span class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Tim Pengembang</span>
                            <span class="block text-slate-200 font-medium">Kelompok 1 (4 Anggota)</span>
                        </li>
                        <li>
                            <span class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Teknologi & Tools</span>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-red-500/10 text-red-400 border border-red-500/20 rounded-lg text-xs font-bold">Laravel</span>
                                <span class="px-3 py-1 bg-blue-500/10 text-blue-400 border border-blue-500/20 rounded-lg text-xs font-bold">MySQL</span>
                                <span class="px-3 py-1 bg-teal-500/10 text-teal-400 border border-teal-500/20 rounded-lg text-xs font-bold">Tailwind CSS</span>
                                <span class="px-3 py-1 bg-indigo-500/10 text-indigo-400 border border-indigo-500/20 rounded-lg text-xs font-bold">Midtrans</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Card: Action Buttons -->
                <div class="bg-slate-900/80 backdrop-blur-sm rounded-3xl p-6 border border-slate-800 shadow-2xl">
                    <!-- Ganti href dengan link website yang sebenarnya -->
                    <a href="https://durianbarbar.example.com" target="_blank" class="flex items-center justify-center w-full py-3.5 px-4 bg-gradient-to-r from-yellow-500 to-green-500 hover:from-yellow-400 hover:to-green-400 text-slate-950 font-extrabold rounded-xl transition-all duration-300 shadow-lg shadow-green-500/25 mb-4 group">
                        <span>Kunjungi Website</span>
                        <i class="fa-solid fa-arrow-up-right-from-square ml-2 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform"></i>
                    </a>
                    
                    <!-- Ganti href dengan link repositori GitHub -->
                    <a href="https://github.com/username-kamu/durian-barbar" target="_blank" class="flex items-center justify-center w-full py-3.5 px-4 bg-slate-800 hover:bg-slate-700 text-white font-bold rounded-xl border border-slate-700 transition-colors duration-300">
                        <i class="fa-brands fa-github mr-2 text-lg"></i>
                        <span>Lihat Source Code</span>
                    </a>
                </div>
                
            </div>
        </div>
        
        <!-- Tombol Kembali -->
        <div class="mt-12 text-center">
            <!-- Sesuaikan route/url ini ke halaman portofolio utamamu -->
            <a href="{{ url('/#portfolio') }}" class="inline-flex items-center px-4 py-2 text-slate-400 hover:text-yellow-400 font-medium transition-colors group">
                <i class="fa-solid fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform"></i> 
                Kembali ke Daftar Portofolio
            </a>
        </div>

    </div>
</div>
@endsection