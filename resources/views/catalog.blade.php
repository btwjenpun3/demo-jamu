@extends('layouts.jamu')

@section('content')
    <section class="mx-auto w-full max-w-7xl px-6 pb-16 pt-4 lg:px-8 lg:pb-24">
        <div class="soft-card rounded-4xl p-6 lg:p-10">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-3xl">
                    <div class="section-badge">Katalog jamu</div>
                    <h1 class="mt-4 text-5xl leading-tight md:text-6xl">Semua produk jamu dalam satu halaman katalog.</h1>
                    <p class="mt-4 text-lg leading-8 text-[#6f4a30]">
                        Halaman ini menampilkan seluruh produk dummy dengan visual, harga, dan ringkasan rasa agar lebih mudah dipresentasikan ke klien atau tim.
                    </p>
                </div>
                <div class="grid gap-3 sm:grid-cols-3 lg:w-105">
                    <div class="rounded-2xl bg-[#fff7ef] p-4 text-center">
                        <p class="text-sm uppercase tracking-[0.2em] text-[#8a5a34]">Total produk</p>
                        <p class="mt-2 text-3xl font-semibold">{{ count($products) }}</p>
                    </div>
                    <div class="rounded-2xl bg-[#fff7ef] p-4 text-center">
                        <p class="text-sm uppercase tracking-[0.2em] text-[#8a5a34]">Model</p>
                        <p class="mt-2 text-3xl font-semibold">Dummy</p>
                    </div>
                    <div class="rounded-2xl bg-[#fff7ef] p-4 text-center">
                        <p class="text-sm uppercase tracking-[0.2em] text-[#8a5a34]">Nuansa</p>
                        <p class="mt-2 text-3xl font-semibold">Klasik</p>
                    </div>
                </div>
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
                                    <h2 class="mt-4 text-3xl">{{ $product['name'] }}</h2>
                                </div>
                                <div class="rounded-full bg-[#f2d6b4] px-4 py-2 text-sm font-semibold text-[#7a4a27]">{{ $product['price'] }}</div>
                            </div>
                            <p class="mt-4 text-base leading-7 text-[#6f4a30]">{{ $product['description'] }}</p>
                            <div class="mt-6 flex flex-wrap gap-3">
                                <span class="rounded-full bg-[#fff1e2] px-4 py-2 text-sm text-[#7b5132]">{{ $product['type'] }}</span>
                                <span class="rounded-full bg-[#fff1e2] px-4 py-2 text-sm text-[#7b5132]">{{ $product['color'] }}</span>
                                <span class="rounded-full bg-[#fff1e2] px-4 py-2 text-sm text-[#7b5132]">{{ count($product['benefits']) }} poin utama</span>
                            </div>
                            <div class="mt-6">
                                <a href="{{ route('products.show', $product['slug']) }}" class="btn-primary w-full sm:w-auto">Lihat Detail</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
