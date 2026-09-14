<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Bar Es Duren - Project Detail | Aditya Nur Arif</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] },
                    colors: {
                        dark: '#0f172a',
                        darker: '#020617',
                        brand: { DEFAULT: '#06b6d4' }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-card {
            background: linear-gradient(145deg, rgba(30, 41, 59, 0.4) 0%, rgba(15, 23, 42, 0.6) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
    </style>
</head>
<body class="bg-darker text-slate-300 font-sans antialiased overflow-x-hidden relative min-h-screen pb-20">

    <!-- Tombol Kembali -->
    <div class="max-w-4xl mx-auto px-6 pt-12 pb-6">
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-slate-400 hover:text-brand transition-colors font-medium">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Portofolio
        </a>
    </div>

    <!-- Header Proyek -->
    <div class="max-w-4xl mx-auto px-6 lg:px-8 mb-12">
        <div class="flex items-center gap-3 mb-4">
            <span class="px-3 py-1 rounded-full bg-cyan-500/20 text-cyan-400 text-xs font-bold border border-cyan-500/30">Web App</span>
            <span class="text-sm text-slate-500">2026</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Bar Bar Es Duren (E-Commerce)</h1>
        <p class="text-lg text-slate-400 leading-relaxed">
            Platform pemesanan dan manajemen e-commerce yang dirancang khusus untuk operasional Bar Bar Es Duren. Fokus pada alur checkout yang cepat dan integrasi pembayaran.
        </p>
    </div>

    <!-- Gambar Utama Proyek -->
    <div class="max-w-5xl mx-auto px-6 lg:px-8 mb-16">
        <div class="glass-card p-2 rounded-3xl">
            <!-- Ganti dengan nama screenshot aslimu jika berbeda -->
            <img src="{{ asset('image/ss_durian.png') }}" alt="Tampilan Bar Bar Es Duren" class="w-full h-auto rounded-2xl border border-slate-700/50">
        </div>
    </div>

    <!-- Penjelasan Kodingan / Konten -->
    <div class="max-w-4xl mx-auto px-6 lg:px-8 space-y-12">
        
        <!-- Tech Stack -->
        <section>
            <h2 class="text-2xl font-bold text-white mb-6 border-b border-slate-800 pb-2">Teknologi yang Digunakan</h2>
            <div class="flex flex-wrap gap-4">
                <div class="px-4 py-2 bg-slate-900 rounded-xl border border-slate-800 flex items-center gap-2">
                    <i class="fa-brands fa-laravel text-red-500 text-xl"></i> <span class="font-semibold text-white">Laravel</span>
                </div>
                <div class="px-4 py-2 bg-slate-900 rounded-xl border border-slate-800 flex items-center gap-2">
                    <i class="fa-brands fa-php text-indigo-400 text-xl"></i> <span class="font-semibold text-white">PHP</span>
                </div>
                <div class="px-4 py-2 bg-slate-900 rounded-xl border border-slate-800 flex items-center gap-2">
                    <i class="fa-solid fa-database text-slate-400 text-xl"></i> <span class="font-semibold text-white">MySQL</span>
                </div>
                <div class="px-4 py-2 bg-slate-900 rounded-xl border border-slate-800 flex items-center gap-2">
                    <i class="fa-solid fa-money-bill-transfer text-emerald-400 text-xl"></i> <span class="font-semibold text-white">Midtrans API</span>
                </div>
            </div>
        </section>

        <!-- Detail Fitur / Penjelasan Code -->
        <section class="space-y-6">
            <h2 class="text-2xl font-bold text-white border-b border-slate-800 pb-2">Sorotan Teknis (Technical Highlights)</h2>
            
            <div class="glass-card p-6 rounded-2xl">
                <h3 class="text-lg font-bold text-white mb-3">1. Sistem Routing & Migrasi Database</h3>
                <p class="text-slate-400 leading-relaxed">
                    Struktur database dirancang menggunakan fitur migrasi bawaan Laravel untuk menjaga konsistensi relasi antar tabel (seperti relasi `Users`, `Orders`, dan `Products`). Routing dikelompokkan secara dinamis untuk memisahkan hak akses antara admin dan pelanggan.
                </p>
            </div>

            <div class="glass-card p-6 rounded-2xl">
                <h3 class="text-lg font-bold text-white mb-3">2. Integrasi Midtrans Payment Gateway</h3>
                <p class="text-slate-400 leading-relaxed">
                    Proses checkout tidak lagi manual. Saya mengintegrasikan Midtrans Snap API agar pelanggan bisa memilih berbagai metode pembayaran (QRIS, Bank Transfer, E-Wallet). Status pembayaran akan ter-update otomatis ke database MySQL menggunakan sistem *webhook/callback*.
                </p>
            </div>
        </section>

    </div>

</body>
</html>