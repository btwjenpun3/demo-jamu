<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jamu Pusaka - Racikan Tradisional Nusantara</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="classic-shell min-h-screen text-[#5b371d]">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-24 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full bg-[#fff3e1]/40 blur-3xl"></div>
            <div class="absolute -right-20 top-32 h-72 w-72 rounded-full bg-[#c58f5d]/20 blur-3xl"></div>
        </div>

        <header class="relative z-10">
            <div class="mx-auto flex w-full max-w-7xl items-center justify-between px-6 py-6 lg:px-8">
                <a href="#beranda" class="flex items-center gap-3">
                    <div class="grid h-12 w-12 place-items-center rounded-2xl border border-[#8c5d35]/20 bg-[#fff8f1]/90 text-xl shadow-sm">𖦹</div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#8c5d35]">Jamu Pusaka</p>
                        <p class="text-sm text-[#7d5a42]">Racikan hangat ala warung klasik</p>
                    </div>
                </a>

                <nav class="hidden items-center gap-6 text-sm font-medium text-[#7a4a27] md:flex">
                    <a href="#produk">Produk</a>
                    <a href="{{ route('catalog') }}">Katalog</a>
                    <a href="#keunggulan">Keunggulan</a>
                    <a href="#cerita">Cerita</a>
                    <a href="#faq">FAQ</a>
                </nav>

                <a href="#pesan" class="btn-secondary hidden md:inline-flex">Pesan Sekarang</a>
            </div>
        </header>

        <main id="beranda" class="relative z-10">
            <section class="mx-auto grid w-full max-w-7xl items-center gap-12 px-6 pb-16 pt-8 lg:grid-cols-[1.15fr_0.85fr] lg:px-8 lg:pb-24 lg:pt-12">
                <div class="space-y-8">
                    <div class="section-badge w-fit">Prototype website jualan jamu</div>
                    <div class="space-y-5">
                        <h1 class="max-w-3xl text-5xl leading-tight md:text-6xl lg:text-7xl">
                            Jamu tradisional yang terasa hangat, klasik, dan meyakinkan.
                        </h1>
                        <p class="max-w-2xl text-lg leading-8 text-[#6f4a30] md:text-xl">
                            Website prototype ini menampilkan brand jamu dengan nuansa coklat muda yang warm, bahasa Indonesia yang rapi, dan data dummy agar siap dipresentasikan tanpa database.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="#produk" class="btn-primary">Lihat Racikan</a>
                        <a href="{{ route('catalog') }}" class="btn-secondary">Buka Katalog</a>
                        <a href="#pesan" class="btn-secondary">Minta Penawaran</a>
                    </div>

                    <div class="feature-grid">
                        @foreach ($highlights as $highlight)
                            <div class="soft-card rounded-3xl p-5">
                                <p class="text-sm uppercase tracking-[0.24em] text-[#8a5a34]">{{ $highlight['label'] }}</p>
                                <p class="mt-2 text-2xl font-semibold text-[#5b371d]">{{ $highlight['value'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="relative">
                    <div class="ornament-card float-slow rounded-4xl p-6 lg:p-8">
                        <div class="rounded-3xl border border-white/60 bg-[linear-gradient(180deg,rgba(255,251,245,.9),rgba(248,228,200,.8))] p-6 shadow-inner">
                            <div class="flex items-center justify-between text-sm text-[#7b5132]">
                                <span>Warung Jamu Pusaka</span>
                                <span>Sejak 1984</span>
                            </div>
                            <div class="mt-8 space-y-4">
                                <p class="text-sm uppercase tracking-[0.35em] text-[#9a6a40]">Menu unggulan hari ini</p>
                                <h2 class="text-4xl leading-tight">Beras Kencur, Kunyit Asam, Wedang Uwuh</h2>
                                <p class="text-base leading-7 text-[#6f4a30]">
                                    Disusun seperti papan menu toko jamu lama, tetapi dibungkus dengan presentasi yang bersih dan modern untuk kebutuhan prototype.
                                </p>
                            </div>

                            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                                <div class="rounded-2xl bg-[#fff7ef] p-4">
                                    <p class="text-sm text-[#8a5a34]">Waktu terbaik</p>
                                    <p class="mt-1 text-xl font-semibold">Pagi, sore, dan setelah makan</p>
                                </div>
                                <div class="rounded-2xl bg-[#fff7ef] p-4">
                                    <p class="text-sm text-[#8a5a34]">Penyajian</p>
                                    <p class="mt-1 text-xl font-semibold">Hangat atau dingin</p>
                                </div>
                            </div>

                            <div class="mt-8 flex items-center justify-between rounded-2xl border border-[#8a5a34]/10 bg-[#f7dfc1] px-5 py-4">
                                <div>
                                    <p class="text-sm uppercase tracking-[0.24em] text-[#8a5a34]">Harga mulai</p>
                                    <p class="text-3xl font-semibold text-[#5b371d]">Rp18.000</p>
                                </div>
                                <div class="rounded-full bg-[#8a5a34] px-4 py-2 text-sm font-semibold text-[#fff8f1]">Siap pesan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="galeri" class="mx-auto w-full max-w-7xl px-6 py-8 lg:px-8">
                <div class="soft-card rounded-4xl p-6 lg:p-10">
                    <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                        <div class="max-w-3xl">
                            <div class="section-badge">Slider dummy</div>
                            <h2 class="mt-4 text-4xl leading-tight md:text-5xl">Gambar dummy yang bisa digeser dan tetap nyaman dibuka di layar kecil.</h2>
                        </div>
                        <p class="max-w-2xl text-base leading-7 text-[#6f4a30]">
                            Bagian ini memakai carousel horizontal agar halaman terasa hidup saat dibuka di HP, tablet, maupun desktop.
                        </p>
                    </div>

                    <div class="mt-8">
                        <div class="carousel-shell">
                            <button type="button" class="carousel-control carousel-prev" data-carousel-prev aria-label="Sebelumnya">‹</button>
                            <div class="carousel-track" data-carousel-track tabindex="0" aria-label="Galeri dummy jamu">
                                <article class="carousel-slide">
                                    <div class="dummy-image dummy-image-1">
                                        <span class="dummy-image-label">Beras Kencur</span>
                                    </div>
                                    <div class="p-5">
                                        <p class="section-badge">Racikan pagi</p>
                                        <h3 class="mt-4 text-3xl">Hangat, lembut, dan cocok untuk menu pembuka.</h3>
                                        <p class="mt-3 text-sm leading-7 text-[#6f4a30]">Dummy visual dengan botol kaca, rempah, dan nuansa etalase jamu klasik.</p>
                                    </div>
                                </article>

                                <article class="carousel-slide">
                                    <div class="dummy-image dummy-image-2">
                                        <span class="dummy-image-label">Kunyit Asam</span>
                                    </div>
                                    <div class="p-5">
                                        <p class="section-badge">Favorit keluarga</p>
                                        <h3 class="mt-4 text-3xl">Warna hangat dengan kesan segar yang bersih.</h3>
                                        <p class="mt-3 text-sm leading-7 text-[#6f4a30]">Desain dummy ini membantu memberi impresi premium tanpa perlu foto asli.</p>
                                    </div>
                                </article>

                                <article class="carousel-slide">
                                    <div class="dummy-image dummy-image-3">
                                        <span class="dummy-image-label">Wedang Uwuh</span>
                                    </div>
                                    <div class="p-5">
                                        <p class="section-badge">Rempah Nusantara</p>
                                        <h3 class="mt-4 text-3xl">Tampilan penuh rempah untuk menonjolkan karakter klasik.</h3>
                                        <p class="mt-3 text-sm leading-7 text-[#6f4a30]">Cocok untuk showcase produk unggulan pada halaman depan prototype.</p>
                                    </div>
                                </article>
                            </div>
                            <button type="button" class="carousel-control carousel-next" data-carousel-next aria-label="Berikutnya">›</button>
                        </div>
                        <div class="mt-4 flex justify-center gap-2" data-carousel-dots aria-label="Indikator slider"></div>
                    </div>
                </div>
            </section>

            <section id="keunggulan" class="mx-auto w-full max-w-7xl px-6 py-10 lg:px-8">
                <div class="soft-card rounded-4xl p-6 lg:p-10">
                    <div class="max-w-3xl">
                        <div class="section-badge">Keunggulan</div>
                        <h2 class="mt-4 text-4xl leading-tight md:text-5xl">Dirancang untuk terasa seperti brand jamu lama yang tetap relevan.</h2>
                    </div>

                    <div class="mt-8 grid gap-5 lg:grid-cols-4 md:grid-cols-2">
                        @foreach ($benefits as $benefit)
                            <article class="product-card p-5">
                                <p class="text-lg font-semibold text-[#5b371d]">{{ $benefit['title'] }}</p>
                                <p class="mt-3 text-sm leading-7 text-[#6f4a30]">{{ $benefit['description'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="produk" class="mx-auto w-full max-w-7xl px-6 py-10 lg:px-8">
                <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                    <div>
                        <div class="section-badge">Produk andalan</div>
                        <h2 class="mt-4 text-4xl leading-tight md:text-5xl">Pilihan jamu dummy untuk katalog prototype.</h2>
                    </div>
                    <p class="max-w-2xl text-base leading-7 text-[#6f4a30]">
                        Semua data di bawah ini sengaja dibuat sebagai dummy agar mudah diubah nanti, tetapi tetap cukup detail untuk menunjukkan arah visual dan struktur katalog.
                    </p>
                </div>

                <div class="mt-8 grid gap-6 lg:grid-cols-2">
                    @foreach ($products as $product)
                        <article class="product-card overflow-hidden">
                            <div class="product-visual product-visual-{{ $loop->iteration }}">
                                <svg viewBox="0 0 600 320" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <rect x="28" y="36" width="544" height="248" rx="36" fill="rgba(255,248,241,0.42)" />
                                    <circle cx="118" cy="105" r="48" fill="rgba(255,243,223,0.78)" />
                                    <circle cx="486" cy="92" r="34" fill="rgba(255,243,223,0.55)" />
                                    <path d="M225 58C234 56 242 63 242 72V232C242 241 234 248 225 246L183 238C176 236 171 230 171 223V81C171 73 177 66 185 65L225 58Z" fill="rgba(123,81,50,0.18)" />
                                    <path d="M208 68C215 67 221 72 221 79V220C221 227 215 232 208 231L191 228C185 227 181 222 181 216V86C181 80 186 74 192 73L208 68Z" fill="rgba(255,248,241,0.95)" stroke="rgba(122,74,39,0.32)" stroke-width="2" />
                                    <path d="M189 96H219" stroke="rgba(122,74,39,0.28)" stroke-width="4" stroke-linecap="round" />
                                    <path d="M189 126H219" stroke="rgba(122,74,39,0.16)" stroke-width="4" stroke-linecap="round" />
                                    <path d="M189 154H219" stroke="rgba(122,74,39,0.16)" stroke-width="4" stroke-linecap="round" />
                                    <ellipse cx="386" cy="215" rx="118" ry="36" fill="rgba(111,67,36,0.16)" />
                                    <path d="M331 117C338 112 348 115 351 123L389 220C392 227 387 235 379 235H310C303 235 298 229 300 222L331 117Z" fill="rgba(154,106,64,0.78)" />
                                    <path d="M353 104C360 102 367 107 367 114V222C367 229 361 235 354 235H334C327 235 321 229 321 222V114C321 107 327 101 334 101L353 104Z" fill="rgba(255,248,241,0.88)" stroke="rgba(122,74,39,0.34)" stroke-width="2" />
                                    <path d="M333 136H355" stroke="rgba(122,74,39,0.25)" stroke-width="4" stroke-linecap="round" />
                                    <path d="M333 166H355" stroke="rgba(122,74,39,0.14)" stroke-width="4" stroke-linecap="round" />
                                    <path d="M333 194H355" stroke="rgba(122,74,39,0.14)" stroke-width="4" stroke-linecap="round" />
                                    <path d="M439 123C452 121 465 129 468 142L485 204C487 213 481 222 472 224L428 233C418 235 409 229 407 219L398 151C396 138 405 126 418 124L439 123Z" fill="rgba(206,146,91,0.9)" />
                                    <path d="M425 136C438 134 449 141 452 154L465 209C467 216 462 222 455 224L424 231C416 233 409 228 407 220L402 166C400 154 408 141 421 138L425 136Z" fill="rgba(255,248,241,0.92)" stroke="rgba(122,74,39,0.3)" stroke-width="2" />
                                </svg>
                                <div class="product-visual-badge">Gambar dummy produk</div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <span class="section-badge">{{ $product['tagline'] }}</span>
                                        <h3 class="mt-4 text-3xl">{{ $product['name'] }}</h3>
                                    </div>
                                    <div class="rounded-full bg-[#f2d6b4] px-4 py-2 text-sm font-semibold text-[#7a4a27]">{{ $product['price'] }}</div>
                                </div>
                                <p class="mt-4 text-base leading-7 text-[#6f4a30]">{{ $product['description'] }}</p>
                                <div class="mt-6 flex flex-wrap gap-3">
                                    <span class="rounded-full bg-[#fff1e2] px-4 py-2 text-sm text-[#7b5132]">Rempah pilihan</span>
                                    <span class="rounded-full bg-[#fff1e2] px-4 py-2 text-sm text-[#7b5132]">Rasa tradisional</span>
                                    <span class="rounded-full bg-[#fff1e2] px-4 py-2 text-sm text-[#7b5132]">Siap prototype</span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="cerita" class="mx-auto w-full max-w-7xl px-6 py-10 lg:px-8">
                <div class="grid gap-6 lg:grid-cols-[0.9fr_1.1fr]">
                    <div class="soft-card rounded-4xl p-6 lg:p-8">
                        <div class="section-badge">Alur pesan</div>
                        <h2 class="mt-4 text-4xl leading-tight">Alur sederhana seperti membeli jamu di kios langganan.</h2>
                        <div class="mt-6 space-y-5">
                            @foreach ($steps as $index => $step)
                                <div class="flex gap-4 rounded-2xl bg-[#fff7ef] p-4">
                                    <div class="grid h-11 w-11 shrink-0 place-items-center rounded-full bg-[#8a5a34] text-sm font-semibold text-[#fff8f1]">0{{ $index + 1 }}</div>
                                    <div>
                                        <p class="text-lg font-semibold text-[#5b371d]">{{ $step['title'] }}</p>
                                        <p class="mt-1 text-sm leading-6 text-[#6f4a30]">{{ $step['description'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="soft-card rounded-4xl p-6 lg:p-8">
                        <div class="section-badge">Testimoni dummy</div>
                        <h2 class="mt-4 text-4xl leading-tight">Kesan yang ingin ditonjolkan: hangat, meyakinkan, dan mudah dipahami.</h2>
                        <div class="mt-6 grid gap-5">
                            @foreach ($testimonials as $testimonial)
                                <blockquote class="rounded-2xl border border-[#8a5a34]/12 bg-[#fff7ef] p-5">
                                    <p class="text-base leading-7 text-[#6f4a30]">“{{ $testimonial['quote'] }}”</p>
                                    <footer class="mt-4">
                                        <p class="font-semibold text-[#5b371d]">{{ $testimonial['name'] }}</p>
                                        <p class="text-sm text-[#8a5a34]">{{ $testimonial['role'] }}</p>
                                    </footer>
                                </blockquote>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section id="faq" class="mx-auto w-full max-w-7xl px-6 py-10 lg:px-8">
                <div class="soft-card rounded-4xl p-6 lg:p-10">
                    <div class="section-badge">Pertanyaan umum</div>
                    <h2 class="mt-4 text-4xl leading-tight md:text-5xl">Hal yang paling sering ditanyakan saat prototype ini dilihat.</h2>
                    <div class="mt-8 grid gap-4 lg:grid-cols-3">
                        @foreach ($faqs as $faq)
                            <div class="rounded-2xl bg-[#fff7ef] p-5">
                                <p class="text-lg font-semibold text-[#5b371d]">{{ $faq['question'] }}</p>
                                <p class="mt-3 text-sm leading-7 text-[#6f4a30]">{{ $faq['answer'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="pesan" class="mx-auto w-full max-w-7xl px-6 py-10 pb-20 lg:px-8">
                <div class="ornament-card rounded-4xl p-6 lg:p-10">
                    <div class="grid gap-8 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                        <div>
                            <div class="section-badge">CTA</div>
                            <h2 class="mt-4 text-4xl leading-tight md:text-5xl">Siap dipakai untuk presentasi brand jamu atau lanjut ke tahap produk sungguhan.</h2>
                            <p class="mt-4 max-w-2xl text-base leading-7 text-[#6f4a30]">
                                Prototype ini sengaja dibuat tanpa database. Kalau nanti ingin naik kelas, struktur kontennya sudah siap untuk katalog, checkout, dan halaman admin.
                            </p>
                        </div>

                        <div class="rounded-[1.75rem] bg-[#fff8f1] p-6 shadow-sm">
                            <p class="text-sm uppercase tracking-[0.24em] text-[#8a5a34]">Hubungi kami</p>
                            <p class="mt-3 text-2xl font-semibold text-[#5b371d]">Jamu Pusaka</p>
                            <p class="mt-2 text-base leading-7 text-[#6f4a30]">0812-3456-7890</p>
                            <p class="text-base leading-7 text-[#6f4a30]">halo@jamupusaka.id</p>
                            <div class="mt-6 flex flex-wrap gap-3">
                                <a href="#produk" class="btn-primary">Lihat Menu</a>
                                <a href="#beranda" class="btn-secondary">Kembali ke atas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="relative z-10 pb-10 text-center text-sm text-[#7d5a42]">
            <p>Prototype website jamu tradisional dengan data dummy dan tampilan klasik warm brown.</p>
        </footer>
    </body>
</html>
