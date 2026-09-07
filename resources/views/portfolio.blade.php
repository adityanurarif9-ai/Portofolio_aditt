<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aditya Nur Arif | Portfolio & Software Engineer</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- FontAwesome & Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }

        /* Keyframe Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-12px) rotate(1deg); }
        }
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 30px rgba(14, 165, 233, 0.2); }
            50% { shadow: 0 0 50px rgba(14, 165, 233, 0.5); }
        }
        @keyframes shine {
            100% { left: 125%; }
        }

        .animate-float { animation: float 5s ease-in-out infinite; }
        .animate-float-delayed { animation: float 6s ease-in-out 2s infinite; }
        .glow-effect { animation: pulseGlow 4s infinite; }

        /* Scroll Reveal Utility */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Glassmorphism & Interactive Cards */
        .glass-card {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .shine-box {
            position: relative;
            overflow: hidden;
        }
        .shine-box::after {
            content: '';
            position: absolute;
            top: -50%; left: -50%;
            width: 200%; height: 200%;
            background: linear-gradient(60deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
            transform: rotate(30deg);
            transition: all 0.6s;
            opacity: 0;
        }
        .shine-box:hover::after {
            opacity: 1;
            animation: shine 1.2s ease-in-out;
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 antialiased selection:bg-cyan-500 selection:text-white overflow-x-hidden">

    <!-- BACKGROUND GLOW ORBS -->
    <div class="fixed top-[-10%] left-[-10%] w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-[150px] pointer-events-none"></div>
    <div class="fixed bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-cyan-500/15 rounded-full blur-[150px] pointer-events-none"></div>

    <!-- NAVBAR -->
    <nav class="fixed w-full z-50 backdrop-blur-md bg-slate-950/80 border-b border-slate-800/80 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#home" class="text-2xl font-extrabold tracking-tight group flex items-center gap-3">
                <span class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center text-white text-lg shadow-lg shadow-cyan-500/30 group-hover:rotate-12 transition-transform duration-300">A</span>
                <span>Aditya.Dev<span class="text-cyan-400">.</span></span>
            </a>

            <div class="hidden lg:flex items-center space-x-8 text-sm font-semibold text-slate-300">
                <a href="#home" class="hover:text-cyan-400 transition-colors">Home</a>
                <a href="#about" class="hover:text-cyan-400 transition-colors">About</a>
                <a href="#education" class="hover:text-cyan-400 transition-colors">Education</a>
                <a href="#skills" class="hover:text-cyan-400 transition-colors">Skills</a>
                <a href="#portfolio" class="hover:text-cyan-400 transition-colors">Portfolio</a>
                <a href="#experience" class="hover:text-cyan-400 transition-colors">Experience</a>
            </div>

            <a href="#contact" class="hidden sm:inline-flex px-6 py-2.5 rounded-full bg-slate-800 border border-slate-700 text-slate-200 font-bold text-sm hover:bg-slate-700 hover:text-cyan-300 hover:scale-105 transition-all">
                Hubungi Saya
            </a>
        </div>
    </nav>

    <!-- 1. HOME SECTION -->
    <section id="home" class="min-h-screen flex items-center pt-24 pb-16 relative">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center w-full">
            
            <!-- Teks & Tombol (Kiri) -->
            <div class="lg:col-span-7 space-y-6 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-900 border border-slate-800 text-cyan-400 text-sm font-semibold shadow-lg">
                    <span class="w-2.5 h-2.5 rounded-full bg-cyan-400 animate-ping"></span>
                    <span>Available for Projects & Collaboration</span>
                </div>
                
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black leading-tight tracking-tight">
                    Crafting <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-500 bg-clip-text text-transparent">Digital Solution</span> & Creative Game.
                </h1>
                
                <p class="text-lg text-slate-400 leading-relaxed max-w-2xl">
                    Halo, saya <strong class="text-white">Aditya Nur Arif</strong>. Seorang Web Developer & UI/UX Designer yang memadukan logika pemrograman dengan estetika visual.
                </p>

                <!-- TOMBOL DOWNLOAD CV & PORTFOLIO -->
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="cv-aditya.pdf" download class="px-8 py-4 rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold shadow-xl shadow-cyan-500/20 hover:shadow-cyan-500/40 hover:scale-105 transition-all flex items-center gap-3">
                        <i class="fa-solid fa-file-arrow-down text-xl"></i> Download CV
                    </a>
                    <a href="#portfolio" class="px-8 py-4 rounded-full glass-card text-slate-200 font-bold hover:bg-slate-800 hover:scale-105 transition-all flex items-center gap-3">
                        <i class="fa-solid fa-layer-group"></i> Lihat Karya
                    </a>
                </div>
            </div>

            <!-- FOTO PROFIL & Animated Graphic Card (Kanan) -->
            <div class="lg:col-span-5 flex justify-center reveal">
                <div class="relative w-full max-w-sm">
                    <!-- Efek cahaya di belakang kartu -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-cyan-500 to-blue-600 rounded-[2rem] blur-2xl opacity-30 glow-effect"></div>
                    
                    <div class="relative glass-card p-8 rounded-[2rem] shadow-2xl animate-float text-center border-t border-l border-white/10">
                        
                        <!-- AREA FOTO PROFIL -->
                        <div class="relative w-36 h-36 mx-auto mb-6">
                            <div class="absolute inset-0 bg-gradient-to-tr from-cyan-400 to-blue-600 rounded-full animate-pulse blur-md opacity-40"></div>
                            <img src="adit_foto.png" onerror="this.src='https://ui-avatars.com/api/?name=Aditya+Nur+Arif&background=0ea5e9&color=fff&size=512'" alt="Foto Profil" class="relative z-10 w-36 h-36 rounded-full border-4 border-slate-900 object-cover shadow-xl">
                        </div>
                        
                        <h3 class="text-2xl font-bold text-white mb-1">Aditya Nur Arif</h3>
                        <p class="text-sm text-cyan-400 font-medium mb-6">Dev & Designer</p>
                        
                        <!-- Kode Dekorasi -->
                        <div class="space-y-2 font-mono text-xs text-left text-slate-400 bg-slate-950/80 p-4 rounded-xl border border-slate-800/50">
                            <p><span class="text-pink-500">const</span> <span class="text-blue-400">stack</span> = [</p>
                            <p class="pl-4"><span class="text-amber-300">'JS'</span>, <span class="text-amber-300">'Python'</span>, <span class="text-amber-300">'PHP'</span>,</p>
                            <p class="pl-4"><span class="text-amber-300">'Figma'</span>, <span class="text-amber-300">'GDevelop'</span></p>
                            <p>];</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 2. ABOUT ME SECTION -->
    <section id="about" class="py-24 bg-slate-900/30 border-y border-slate-800/40 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-6 reveal">
                    <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">About Me</span>
                    <h2 class="text-4xl font-extrabold text-white">Logika, Kreativitas & Keseimbangan</h2>
                    <p class="text-slate-400 leading-relaxed text-justify">
                        Saya sangat antusias dalam merancang antarmuka visual yang indah sekaligus membangun sistem <em>backend</em> yang fungsional. Mulai dari merangkai baris kode hingga mendesain <em>prototype</em>, saya selalu menikmati proses menciptakan karya digital.
                    </p>
                    <p class="text-slate-400 leading-relaxed text-justify">
                        Di luar dunia IT, saya memegang teguh nilai kepemimpinan dan budaya. Saya aktif di berbagai organisasi seperti Majelis Perwakilan Kelas (MPK), Pramuka, Paskibraka, serta ditunjuk sebagai Brand Ambassador. 
                    </p>
                    
                    <!-- Hobbies Badges -->
                    <div class="pt-4">
                        <p class="text-sm font-bold text-slate-300 mb-3">Hobi & Minat di Luar Kode:</p>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm font-medium flex items-center gap-2">
                                <i class="fa-solid fa-futbol"></i> Sepak Bola & Futsal
                            </span>
                            <span class="px-4 py-2 rounded-xl bg-amber-500/10 border border-amber-500/30 text-amber-400 text-sm font-medium flex items-center gap-2">
                                <i class="fa-solid fa-drum"></i> Kesenian Kentongan
                            </span>
                            <span class="px-4 py-2 rounded-xl bg-blue-500/10 border border-blue-500/30 text-blue-400 text-sm font-medium flex items-center gap-2">
                                <i class="fa-solid fa-person-running"></i> Jogging
                            </span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 reveal">
                    <div class="p-6 rounded-3xl glass-card hover:border-cyan-500/50 hover:-translate-y-2 transition-all duration-300 animate-float">
                        <i class="fa-solid fa-code text-3xl text-cyan-400 mb-4"></i>
                        <h4 class="font-bold text-white text-lg">Tech Enthusiast</h4>
                        <p class="text-xs text-slate-400 mt-2">Mengeksplorasi bahasa pemrograman, framework, dan engine baru.</p>
                    </div>
                    <div class="p-6 rounded-3xl glass-card hover:border-blue-500/50 hover:-translate-y-2 transition-all duration-300 animate-float-delayed">
                        <i class="fa-solid fa-bullhorn text-3xl text-blue-400 mb-4"></i>
                        <h4 class="font-bold text-white text-lg">Leadership</h4>
                        <p class="text-xs text-slate-400 mt-2">Berpengalaman memimpin organisasi dan komunikasi publik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. EDUCATION SECTION (PENDIDIKAN) -->
    <section id="education" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16 reveal">
                <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">Pendidikan</span>
                <h2 class="text-4xl font-extrabold text-white mt-2">Latar Belakang Pendidikan</h2>
            </div>

            <div class="max-w-3xl mx-auto space-y-8 reveal">
                <!-- Card Education: SMK Telkom Purwokerto -->
                <div class="p-8 rounded-[2rem] glass-card border border-slate-800 hover:border-cyan-500/50 transition-all duration-300 flex flex-col md:flex-row items-start gap-6">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center text-white text-2xl shrink-0 shadow-lg shadow-cyan-500/20">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="space-y-3 flex-1">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <h3 class="text-2xl font-bold text-white">SMK Telkom Purwokerto</h3>
                            <span class="px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-semibold w-fit">
                                Rekayasa Perangkat Lunak (RPL)
                            </span>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Fokus pada pengembangan perangkat lunak, pemrograman web, basis data, desain UI/UX, dan logika algoritma. Aktif dalam organisasi sekolah serta kegiatan kepemimpinan dan minat seni budaya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. SKILLS SECTION -->
    <section id="skills" class="py-24 bg-slate-900/30 border-t border-slate-800/40 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16 reveal">
                <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">Keahlian</span>
                <h2 class="text-4xl font-extrabold text-white mt-2">Tech Stack & Tools</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Skill 1: Programming -->
                <div class="p-8 rounded-[2rem] glass-card hover:border-cyan-500 hover:shadow-[0_0_30px_rgba(6,182,212,0.15)] transition-all duration-300 shine-box group reveal">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Programming & Web</h3>
                    <p class="text-slate-400 text-sm mb-6">Mengembangkan aplikasi web dan logika sistem dengan arsitektur modern.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">HTML & CSS</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">JavaScript</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">PHP</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">Python</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">C#</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">Laravel</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">MySQL</span>
                    </div>
                </div>

                <!-- Skill 2: UI/UX & Graphic Design -->
                <div class="p-8 rounded-[2rem] glass-card hover:border-blue-500 hover:shadow-[0_0_30px_rgba(59,130,246,0.15)] transition-all duration-300 shine-box group reveal">
                    <div class="w-14 h-14 rounded-2xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-pen-nib"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Design & Visual</h3>
                    <p class="text-slate-400 text-sm mb-6">Merancang UI/UX interaktif, wireframing, dan visual branding yang menarik.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">Figma</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">Canva</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">Adobe Illustrator</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">Wireframing</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">Prototyping</span>
                    </div>
                </div>

                <!-- Skill 3: Tools & Game Engine -->
                <div class="p-8 rounded-[2rem] glass-card hover:border-indigo-500 hover:shadow-[0_0_30px_rgba(99,102,241,0.15)] transition-all duration-300 shine-box group reveal">
                    <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-indigo-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-gamepad"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Game Dev & Tools</h3>
                    <p class="text-slate-400 text-sm mb-6">Mengembangkan game 2D dan memanfaatkan alur kerja developer yang efisien.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">GDevelop</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">Git & GitHub</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">VS Code</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">XAMPP</span>
                        <span class="px-3 py-1 text-xs font-semibold rounded-lg bg-slate-800 text-slate-300 border border-slate-700">Composer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PORTFOLIO SECTION -->
    <section id="portfolio" class="py-24 border-t border-slate-800/40 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 reveal">
                <div>
                    <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">Portofolio</span>
                    <h2 class="text-4xl font-extrabold text-white mt-2">Project Terpilih</h2>
                </div>
                <p class="text-slate-400 text-sm max-w-md mt-4 md:mt-0">
                    Kumpulan proyek web development, desain UI/UX, game interaktif, dan branding visual yang telah saya kerjakan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Project 1: DurianBarBarFIXED -->

<div class="glass-card rounded-3xl overflow-hidden group reveal">
    <!-- Bagian Gambar Project -->
    <div class="h-64 relative overflow-hidden border-b border-slate-700/50">
        <!-- Ganti 'ss_durian.png' dengan nama file screenshot aslimu -->
        <img src="{{ asset('image/ss_durian.png') }}" alt="Bar Bar Es Duren Project" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
        
        <!-- Overlay gelap yang hilang saat di-hover -->
        <div class="absolute inset-0 bg-slate-900/50 group-hover:bg-transparent transition-colors duration-500 z-0"></div>
        
        <!-- Badge Kategori -->
        <div class="absolute top-4 right-4 bg-cyan-500/80 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-md z-10 shadow-lg">Web App</div>
    </div>
    
    <!-- Bagian Teks Project -->
    <div class="p-8">
        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-cyan-400 transition-colors">Bar Bar Es Duren</h3>
        <p class="text-slate-400 text-sm leading-relaxed mb-6">Aplikasi web e-commerce berbasis Laravel lengkap dengan integrasi gateway pembayaran Midtrans untuk proses checkout yang mulus.</p>
        <div class="flex flex-wrap gap-2">
            <span class="text-xs font-semibold px-2.5 py-1 bg-slate-800 text-cyan-400 rounded-md border border-slate-700">Laravel</span>
            <span class="text-xs font-semibold px-2.5 py-1 bg-slate-800 text-cyan-400 rounded-md border border-slate-700">Midtrans</span>
            <span class="text-xs font-semibold px-2.5 py-1 bg-slate-800 text-cyan-400 rounded-md border border-slate-700">MySQL</span>
        </div>
    </div>
</div>

                <!-- Project 2: PPDB UI Mockup -->
                <div class="glass-card rounded-3xl overflow-hidden group reveal">
    <!-- Bagian Gambar Project -->
    <div class="h-64 relative overflow-hidden border-b border-slate-700/50">
        <!-- Ganti 'ss_durian.png' dengan nama file screenshot aslimu -->
        <img src="{{ asset('image/website_sekolah.png') }}" alt="UI PPDB SMK Telkom Purwokerto" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
        
        <!-- Overlay gelap yang hilang saat di-hover -->
        <div class="absolute inset-0 bg-slate-900/50 group-hover:bg-transparent transition-colors duration-500 z-0"></div>
        
        <!-- Badge Kategori -->
        <div class="absolute top-4 right-4 bg-cyan-500/80 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-md z-10 shadow-lg">Web App</div>
    </div>
    
    <!-- Bagian Teks Project -->
    <div class="p-8">
        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-cyan-400 transition-colors">PPDB SMK Telkom Purwokerto</h3>
        <p class="text-slate-400 text-sm leading-relaxed mb-6">Desain dan antarmuka web Penerimaan Peserta Didik Baru (PPDB) interaktif lengkap dengan formulir pendaftaran multi-step, tabel nilai, dan verifikasi dokumen.</p>
        <div class="flex flex-wrap gap-2">
            <span class="text-xs font-semibold px-2.5 py-1 bg-slate-800 text-cyan-400 rounded-md border border-slate-700">HTML5</span>
            <span class="text-xs font-semibold px-2.5 py-1 bg-slate-800 text-cyan-400 rounded-md border border-slate-700">CSS3 / Tailwind</span>
            <span class="text-xs font-semibold px-2.5 py-1 bg-slate-800 text-cyan-400 rounded-md border border-slate-700">JavaScript</span>
        </div>
    </div>
</div>
                <!-- Project 3: GDevelop Game -->
                <div class="glass-card rounded-3xl overflow-hidden group reveal">
    <!-- Bagian Gambar Project -->
    <div class="h-64 relative overflow-hidden border-b border-slate-700/50">
        <!-- Ganti 'ss_durian.png' dengan nama file screenshot aslimu -->
        <img src="{{ asset('game.png') }}" alt="GDevelop Game" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
        
        <!-- Overlay gelap yang hilang saat di-hover -->
        <div class="absolute inset-0 bg-slate-900/50 group-hover:bg-transparent transition-colors duration-500 z-0"></div>
        
        <!-- Badge Kategori -->
        <div class="absolute top-4 right-4 bg-cyan-500/80 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-md z-10 shadow-lg">Web App</div>
    </div>
    
    <!-- Bagian Teks Project -->
    <div class="p-8">
        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-cyan-400 transition-colors">GDevelop Game</h3>
        <p class="text-slate-400 text-sm leading-relaxed mb-6">Game sederhana dibuat dengan GDevelop, termasuk mekanika permainan, grafik, dan suara.</p>
        <div class="flex flex-wrap gap-2">
            <span class="text-xs font-semibold px-2.5 py-1 bg-slate-800 text-cyan-400 rounded-md border border-slate-700">GDevelop</span>
        </div>
    </div>
</div>
                <!-- Project 4: Prime Atelier Branding -->
                <div class="glass-card rounded-[2rem] overflow-hidden group hover:border-emerald-500/50 transition-all duration-500 reveal">
                    <div class="h-56 bg-slate-800/80 relative overflow-hidden flex items-center justify-center p-6 bg-gradient-to-br from-slate-900 to-emerald-950">
                        <i class="fa-solid fa-bottle-droplet text-6xl text-emerald-400/30 group-hover:scale-125 transition-transform duration-500"></i>
                        <span class="absolute top-4 right-4 px-3 py-1 rounded-full text-xs font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">Visual Branding</span>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-emerald-400 transition-colors">Prime Atelier Hair Tonic</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">
                            Perancangan identitas produk, label kemasan cetak (sticker label), serta konsep visual display untuk lini produk perawatan rambut Prime Atelier.
                        </p>
                        <div class="flex items-center gap-3 font-mono text-xs text-emerald-400">
                            <span>Figma</span> • <span>Adobe Illustrator</span> • <span>Branding</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. EXPERIENCE & ORGANIZATIONS SECTION -->
    <section id="experience" class="py-24 bg-slate-900/30 border-t border-slate-800/40 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16 reveal">
                <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">Pengalaman</span>
                <h2 class="text-4xl font-extrabold text-white mt-2">Organisasi & Kepemimpinan</h2>
            </div>

            <div class="max-w-4xl mx-auto space-y-6 reveal">
                <!-- Exp 1 -->
                <div class="p-8 rounded-3xl glass-card border-l-4 border-l-cyan-400 flex flex-col sm:flex-row items-start justify-between gap-4 hover:bg-slate-900/60 transition-all">
                    <div>
                        <h3 class="text-xl font-bold text-white">Wakil Ketua Majelis Perwakilan Kelas (MPK)</h3>
                        <p class="text-cyan-400 text-sm font-semibold mt-1">SMK Telkom Purwokerto</p>
                        <p class="text-slate-400 text-sm mt-3 leading-relaxed">
                            Mengkoordinasikan pengawasan fungsi organisasi siswa, memimpin penyampaian aspirasi, serta menyusun pengumuman dan agenda resmi sekolah.
                        </p>
                    </div>
                </div>

                <!-- Exp 2 -->
                <div class="p-8 rounded-3xl glass-card border-l-4 border-l-blue-500 flex flex-col sm:flex-row items-start justify-between gap-4 hover:bg-slate-900/60 transition-all">
                    <div>
                        <h3 class="text-xl font-bold text-white">Brand Ambassador Sekolah</h3>
                        <p class="text-blue-400 text-sm font-semibold mt-1">SMK Telkom Purwokerto</p>
                        <p class="text-slate-400 text-sm mt-3 leading-relaxed">
                            Mewakili sekolah dalam public speaking, pembuatan konten promosi digital, dan mempresentasikan keunggulan institusi kepada calon siswa baru.
                        </p>
                    </div>
                </div>

                <!-- Exp 3 -->
                <div class="p-8 rounded-3xl glass-card border-l-4 border-l-indigo-500 flex flex-col sm:flex-row items-start justify-between gap-4 hover:bg-slate-900/60 transition-all">
                    <div>
                        <h3 class="text-xl font-bold text-white">Anggota Aktif Paskibraka (Pastema) & Pramuka</h3>
                        <p class="text-indigo-400 text-sm font-semibold mt-1">SMK Telkom Purwokerto</p>
                        <p class="text-slate-400 text-sm mt-3 leading-relaxed">
                            Melatih kedisiplinan, kerjasama tim, serta kepemimpinan lapangan dalam berbagai kegiatan upacara resmi dan perkemahan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CONTACT SECTION -->
    <section id="contact" class="py-24 bg-slate-900/40 border-t border-slate-800/40 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Info Kontak (Kiri) -->
                <div class="lg:col-span-5 space-y-6 reveal">
                    <span class="text-cyan-400 font-bold uppercase tracking-widest text-xs">Kontak</span>
                    <h2 class="text-4xl font-extrabold text-white">Mari Berdiskusi & Bekerja Sama</h2>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Punya ide proyek menarik, butuh bantuan pengembangan website, atau ingin berkolaborasi? Jangan ragu untuk menghubungi saya!
                    </p>

                    <div class="space-y-4 pt-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 text-lg">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 uppercase font-semibold">Lokasi</p>
                                <p class="text-sm font-semibold text-slate-200">Banyumas, Jawa Tengah, Indonesia</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 text-lg">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 uppercase font-semibold">Email Direct</p>
                                <p class="text-sm font-semibold text-slate-200">aditya.nur.arif@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Kontak (Kanan) -->
                <div class="lg:col-span-7 reveal">
                    <form onsubmit="event.preventDefault(); alert('Terima kasih! Pesan Anda berhasil terkirim.');" class="glass-card p-8 sm:p-10 rounded-[2rem] space-y-6 border border-slate-800">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold text-slate-300 uppercase mb-2">Nama Lengkap</label>
                                <input type="text" required placeholder="Masukkan nama Anda" class="w-full px-5 py-4 rounded-xl bg-slate-950/80 border border-slate-800 text-slate-100 placeholder-slate-600 focus:outline-none focus:border-cyan-500 transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-300 uppercase mb-2">Alamat Email</label>
                                <input type="email" required placeholder="nama@email.com" class="w-full px-5 py-4 rounded-xl bg-slate-950/80 border border-slate-800 text-slate-100 placeholder-slate-600 focus:outline-none focus:border-cyan-500 transition-colors">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-300 uppercase mb-2">Subjek Pesan</label>
                            <input type="text" required placeholder="Topik diskusi atau kolaborasi" class="w-full px-5 py-4 rounded-xl bg-slate-950/80 border border-slate-800 text-slate-100 placeholder-slate-600 focus:outline-none focus:border-cyan-500 transition-colors">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-300 uppercase mb-2">Pesan</label>
                            <textarea rows="4" required placeholder="Tuliskan pesan atau detail proyek Anda di sini..." class="w-full px-5 py-4 rounded-xl bg-slate-950/80 border border-slate-800 text-slate-100 placeholder-slate-600 focus:outline-none focus:border-cyan-500 transition-colors"></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40 hover:scale-[1.02] transition-all">
                            Kirim Pesan <i class="fa-solid fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-8 bg-slate-950 border-t border-slate-900 text-center text-slate-500 text-sm">
        <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p>© 2026 Aditya Nur Arif. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#home" class="hover:text-cyan-400 transition-colors">Kembali ke Atas <i class="fa-solid fa-arrow-up ml-1"></i></a>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FOR SCROLL REVEAL ANIMATION -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const reveals = document.querySelectorAll('.reveal');

            const revealOnScroll = () => {
                const windowHeight = window.innerHeight;
                reveals.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 100;

                    if (elementTop < windowHeight - elementVisible) {
                        element.classList.add('active');
                    }
                });
            };

            window.addEventListener('scroll', revealOnScroll);
            revealOnScroll(); // Trigger awal saat halaman dimuat
        });
    </script>
</body>
</html>