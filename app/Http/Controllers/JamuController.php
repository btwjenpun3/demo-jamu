<?php

namespace App\Http\Controllers;

class JamuController extends Controller
{
    public function home()
    {
        return view('welcome', $this->pageData());
    }

    public function catalog()
    {
        return view('catalog', array_merge($this->pageData(), [
            'pageTitle' => 'Katalog Produk Jamu',
            'pageIntro' => 'Semua produk dummy dikumpulkan di sini supaya pengunjung bisa melihat pilihan racikan sekaligus membaca karakternya.',
        ]));
    }

    public function show(string $slug)
    {
        $product = collect($this->products())->firstWhere('slug', $slug);

        abort_unless($product, 404);

        $relatedProducts = collect($this->products())
            ->where('slug', '!=', $slug)
            ->take(3)
            ->values()
            ->all();

        return view('product-detail', array_merge($this->pageData(), [
            'pageTitle' => $product['name'],
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]));
    }

    private function pageData(): array
    {
        return [
            'highlights' => [
                ['label' => 'Resep warisan', 'value' => '12 racikan khas'],
                ['label' => 'Pesanan harian', 'value' => '1.200+ gelas'],
                ['label' => 'Bahan alami', 'value' => '100% rempah segar'],
            ],
            'products' => $this->products(),
            'benefits' => [
                [
                    'title' => 'Rempah pilihan',
                    'description' => 'Kami memakai bahan dummy yang digambarkan sebagai rempah segar, akar, dan rimpang terbaik.',
                ],
                [
                    'title' => 'Rasa klasik',
                    'description' => 'Profil rasa dibuat hangat, earthy, dan akrab seperti jamu rumahan yang diracik dengan hati.',
                ],
                [
                    'title' => 'Sajian modern',
                    'description' => 'Walau nuansanya tradisional, tampilan website tetap rapi dan cocok untuk presentasi prototype.',
                ],
                [
                    'title' => 'Mudah diubah',
                    'description' => 'Seluruh konten saat ini hanya dummy data, jadi gampang diganti kalau nanti masuk ke tahap produksi.',
                ],
            ],
            'steps' => [
                ['title' => 'Pilih racikan', 'description' => 'Tentukan varian jamu yang cocok untuk suasana hari itu.'],
                ['title' => 'Pilih ukuran', 'description' => 'Sesuaikan dengan kebutuhan, dari gelas kecil sampai botol rumahan.'],
                ['title' => 'Pesan cepat', 'description' => 'Cukup isi formulir kontak atau klik tombol pesan di bagian CTA.'],
                ['title' => 'Nikmati hangatnya', 'description' => 'Jamu disajikan dengan citra tradisional yang hangat dan meyakinkan.'],
            ],
            'testimonials' => [
                [
                    'name' => 'Ibu Ratna',
                    'role' => 'Pelanggan langganan',
                    'quote' => 'Tampilannya terasa hangat dan klasik. Kalau ini dipakai untuk toko jamu, kesannya langsung meyakinkan.',
                ],
                [
                    'name' => 'Mas Dimas',
                    'role' => 'Pecinta desain tradisional',
                    'quote' => 'Warna coklat mudanya pas, tidak terlalu gelap tapi tetap berasa heritage. Cocok untuk prototype.',
                ],
                [
                    'name' => 'Novi',
                    'role' => 'Pembeli baru',
                    'quote' => 'Bahasanya Indonesia dan susunannya enak dibaca. Saya bisa langsung paham produk yang ditawarkan.',
                ],
            ],
            'faqs' => [
                [
                    'question' => 'Apakah ini sudah terhubung ke database?',
                    'answer' => 'Belum. Semua data masih dummy agar fokus ke tampilan prototype dulu.',
                ],
                [
                    'question' => 'Bisa diubah jadi toko online sungguhan?',
                    'answer' => 'Bisa. Struktur saat ini sudah enak dijadikan pondasi untuk next step: katalog, checkout, dan admin.',
                ],
                [
                    'question' => 'Stylenya bisa dibuat lebih mewah atau lebih jadul?',
                    'answer' => 'Bisa. Nuansa dasarnya sudah dibuat fleksibel untuk diarahkan ke klasik, premium, atau pasar tradisional.',
                ],
            ],
            'menuProducts' => $this->products(),
        ];
    }

    private function products(): array
    {
        return [
            [
                'slug' => 'beras-kencur',
                'name' => 'Jamu Beras Kencur',
                'description' => 'Rasa manis hangat dengan aroma kencur yang lembut. Cocok untuk menemani aktivitas pagi.',
                'long_description' => 'Racikan dummy ini dibuat untuk memberi kesan ramah, lembut, dan mudah diterima banyak orang. Profil rasanya hangat namun ringan, sehingga ideal untuk pembuka katalog dan varian paling familiar.',
                'price' => 'Rp18.000',
                'tagline' => 'Favorit keluarga',
                'type' => 'Hangat manis',
                'color' => 'Coklat keemasan',
                'content' => 'Beras, kencur, gula aren, jahe, rempah ringan',
                'how_to_drink' => 'Nikmati pada pagi hari atau saat tubuh ingin rasa yang lebih bersahabat.',
                'benefits' => ['Menampilkan kesan klasik', 'Mudah diterima pembeli baru', 'Cocok untuk menu pembuka'],
            ],
            [
                'slug' => 'kunyit-asam',
                'name' => 'Kunyit Asam',
                'description' => 'Kesegaran asam yang seimbang dengan hangatnya kunyit. Pas untuk rutinitas setelah makan.',
                'long_description' => 'Varian ini memberi nuansa yang lebih segar, cerah, dan aktif. Cocok untuk halaman katalog karena warnanya kuat dan mudah menonjol di antara racikan lain.',
                'price' => 'Rp20.000',
                'tagline' => 'Rasa segar klasik',
                'type' => 'Segar asam',
                'color' => 'Kuning tembaga',
                'content' => 'Kunyit, asam jawa, gula batu, daun pandan',
                'how_to_drink' => 'Enak diminum dingin saat siang atau setelah makan berat.',
                'benefits' => ['Warna tampil kuat', 'Rasanya bersih dan ringan', 'Populer untuk banyak usia'],
            ],
            [
                'slug' => 'wedang-uwuh',
                'name' => 'Wedang Uwuh',
                'description' => 'Perpaduan rempah Nusantara dengan warna cantik dan sensasi hangat yang menenangkan.',
                'long_description' => 'Produk ini cocok untuk menunjukkan identitas tradisional yang paling kuat. Visualnya penuh rempah dan punya karakter visual yang lebih ramai untuk memperkaya katalog.',
                'price' => 'Rp22.000',
                'tagline' => 'Hangat dari rempah',
                'type' => 'Rempah hangat',
                'color' => 'Merah bata',
                'content' => 'Cengkeh, kayu secang, jahe, kapulaga, serai',
                'how_to_drink' => 'Sajikan hangat agar aroma rempahnya lebih terasa.',
                'benefits' => ['Paling tradisional', 'Visual penuh karakter', 'Cocok untuk menu premium'],
            ],
            [
                'slug' => 'temulawak-madu',
                'name' => 'Temulawak Madu',
                'description' => 'Racikan lembut dengan sentuhan madu untuk rasa yang lebih bulat dan mudah dinikmati siapa saja.',
                'long_description' => 'Temulawak madu diposisikan sebagai varian yang halus dan bersahabat. Ia memberi keseimbangan antara kesan tradisional dan rasa yang modern.',
                'price' => 'Rp21.000',
                'tagline' => 'Lembut dan bersahabat',
                'type' => 'Lembut madu',
                'color' => 'Coklat madu',
                'content' => 'Temulawak, madu, air hangat, rempah pelengkap',
                'how_to_drink' => 'Bagus untuk dinikmati sore hari sebagai penutup aktivitas.',
                'benefits' => ['Kesan premium', 'Rasa lebih bulat', 'Cocok untuk menu paket'],
            ],
        ];
    }
}
