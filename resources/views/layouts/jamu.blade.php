<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $pageTitle ?? 'Jamu Pusaka - Racikan Tradisional Nusantara' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="classic-shell min-h-screen text-[#5b371d]">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-24 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full bg-[#fff3e1]/40 blur-3xl"></div>
            <div class="absolute -right-20 top-32 h-72 w-72 rounded-full bg-[#c58f5d]/20 blur-3xl"></div>
        </div>

        <header class="relative z-10">
            <div class="mx-auto flex w-full max-w-7xl flex-col gap-4 px-6 py-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <div class="grid h-12 w-12 place-items-center rounded-2xl border border-[#8c5d35]/20 bg-[#fff8f1]/90 text-xl shadow-sm">𖦹</div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#8c5d35]">Jamu Pusaka</p>
                        <p class="text-sm text-[#7d5a42]">Racikan hangat ala warung klasik</p>
                    </div>
                </a>

                <nav class="flex flex-wrap items-center gap-4 text-sm font-medium text-[#7a4a27] lg:justify-end lg:gap-6">
                    <a href="{{ route('home') }}">Beranda</a>
                    <a href="{{ route('catalog') }}">Katalog</a>
                    <a href="{{ route('catalog') }}#produk">Produk</a>
                    <a href="{{ route('home') }}#faq">FAQ</a>
                </nav>
            </div>
        </header>

        <main class="relative z-10">
            @yield('content')
        </main>

        <footer class="relative z-10 px-6 pb-10 text-center text-sm text-[#7d5a42] lg:px-8">
            <p>Prototype website jamu tradisional dengan data dummy dan tampilan klasik warm brown.</p>
        </footer>
    </body>
</html>
