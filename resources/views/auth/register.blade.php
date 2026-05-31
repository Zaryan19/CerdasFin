<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Daftar Akun Baru — CerdasFin</title>

    <!-- Meta Description for SEO -->
    <meta name="description" content="Buat akun CerdasFin gratis hari ini. Kuasai manajemen keuangan pribadi, pelajari modul anti-pinjol, dan dapatkan sertifikat literasi keuangan.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-canvas-white font-pp-neue-montreal antialiased">
    <div class="min-h-screen flex flex-col lg:flex-row">

        <!-- Left Column (Visual Branding & Education) - Hidden on Mobile -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-deep-fern-green to-[#07502e] text-white p-16 flex-col justify-between relative overflow-hidden">
            <!-- Decorative Glow Blobs -->
            <div class="absolute -top-40 -left-40 w-96 h-96 bg-leafy-green/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-muted-sage/10 rounded-full blur-3xl pointer-events-none"></div>

            <!-- Brand Logo -->
            <div class="flex items-center gap-3 relative z-10">
                <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center backdrop-blur-md border border-white/15">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <span class="text-2xl font-bold tracking-tight text-white">Cerdas<span class="text-leafy-green">Fin</span></span>
            </div>

            <!-- Content Area -->
            <div class="my-auto max-w-md relative z-10 space-y-8 animate-fade-in-up">
                <div class="space-y-4">
                    <div class="badge bg-white/10 text-white border border-white/10 backdrop-blur-md">Lindungi & Kelola Dana Anda</div>
                    <h1 class="text-4xl font-bold leading-tight tracking-tight">Terlindungi dari Ancaman Finansial</h1>
                    <p class="text-white/80 leading-relaxed text-sm">
                        Kami membantumu mengenali modus penipuan pinjol ilegal, bahaya judi online, serta memandu langkah pertamamu membangun investasi aman yang berizin OJK.
                    </p>
                </div>

                <!-- Mockup Safety Checklist Card -->
                <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-2xl p-6 shadow-xl space-y-4">
                    <div class="flex justify-between items-center pb-2 border-b border-white/10">
                        <span class="text-xs text-white/90 font-semibold uppercase tracking-wider">Yang Akan Kamu Dapatkan</span>
                    </div>

                    <div class="space-y-4 pt-1">
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 rounded-lg bg-leafy-green/20 flex items-center justify-center text-leafy-green">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                </svg>
                            </div>
                            <div class="text-xs">
                                <p class="font-semibold text-white">Modul Anti-Pinjol &amp; Judol</p>
                                <p class="text-white/65 mt-0.5">Pahami risiko dan kenali ciri-ciri entitas ilegal.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 rounded-lg bg-leafy-green/20 flex items-center justify-center text-leafy-green">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                </svg>
                            </div>
                            <div class="text-xs">
                                <p class="font-semibold text-white">Simulasi &amp; Kalkulator Finansial</p>
                                <p class="text-white/65 mt-0.5">Hitung kesiapan dana darurat dan perencanaan keuanganmu.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 rounded-lg bg-leafy-green/20 flex items-center justify-center text-leafy-green">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                </svg>
                            </div>
                            <div class="text-xs">
                                <p class="font-semibold text-white">Sertifikat Kelulusan Resmi</p>
                                <p class="text-white/65 mt-0.5">Dapatkan bukti peningkatan literasi keuanganmu setelah menyelesaikan modul.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Section -->
            <div class="relative z-10 flex justify-between items-center text-xs text-white/60">
                <span>© 2025 CerdasFin. Hak cipta dilindungi.</span>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-white transition-colors">Privasi</a>
                    <a href="#" class="hover:text-white transition-colors">Ketentuan</a>
                </div>
            </div>
        </div>

        <!-- Right Column (Form Register) -->
        <div class="w-full lg:w-1/2 min-h-screen bg-canvas-white flex flex-col justify-center px-6 py-12 md:px-20 lg:px-24">
            <div class="mx-auto w-full max-w-md space-y-8 animate-fade-in-up">

                <!-- Brand Logo for Mobile (Hidden on Desktop) -->
                <div class="lg:hidden flex items-center gap-2 mb-2">
                    <div class="w-8 h-8 bg-deep-fern-green rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold tracking-tight">
                        <span class="text-deep-fern-green">Cerdas</span><span class="text-terra-cotta">Fin</span>
                    </span>
                </div>

                <!-- Titles -->
                <div>
                    <h2 class="text-3xl font-extrabold text-rich-black tracking-tight mb-2">Mulai Perjalanan Belajarmu</h2>
                    <p class="text-cool-gray text-sm">
                        Daftar akun gratis sekarang untuk akses simulasi keuangan dan kelas bersertifikat.
                    </p>
                </div>

                <!-- Register Form -->
                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input id="name" 
                               type="text" 
                               name="name" 
                               value="{{ old('name') }}" 
                               class="form-input @error('name') border-red-500 focus:border-red-500 focus:ring-red-100 @enderror" 
                               required 
                               autofocus 
                               autocomplete="name" 
                               placeholder="Nama lengkap Anda">
                        
                        @error('name')
                            <p class="text-xs text-red-600 mt-1.5 flex items-center gap-1 font-medium">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input id="email" 
                               type="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               class="form-input @error('email') border-red-500 focus:border-red-500 focus:ring-red-100 @enderror" 
                               required 
                               autocomplete="username" 
                               placeholder="nama@email.com">
                        
                        @error('email')
                            <p class="text-xs text-red-600 mt-1.5 flex items-center gap-1 font-medium">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="form-label">Password</label>
                        <input id="password" 
                               type="password" 
                               name="password" 
                               class="form-input @error('password') border-red-500 focus:border-red-500 focus:ring-red-100 @enderror" 
                               required 
                               autocomplete="new-password" 
                               placeholder="Min. 8 karakter">
                        
                        @error('password')
                            <p class="text-xs text-red-600 mt-1.5 flex items-center gap-1 font-medium">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input id="password_confirmation" 
                               type="password" 
                               name="password_confirmation" 
                               class="form-input @error('password_confirmation') border-red-500 focus:border-red-500 focus:ring-red-100 @enderror" 
                               required 
                               autocomplete="new-password" 
                               placeholder="Ulangi password Anda">
                        
                        @error('password_confirmation')
                            <p class="text-xs text-red-600 mt-1.5 flex items-center gap-1 font-medium">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-primary w-full py-3 mt-4 text-sm font-semibold tracking-wide justify-center">
                        Daftar Gratis
                    </button>
                </form>

                <!-- Divider & Redirect to Login -->
                <div class="pt-6 border-t border-gray-100 text-center">
                    <p class="text-sm text-cool-gray">
                        Sudah punya akun? 
                        <a href="{{ route('login') }}" class="text-deep-fern-green hover:underline font-semibold transition-colors">
                            Masuk Sekarang
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
