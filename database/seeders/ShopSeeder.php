<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Umkm;
use App\Models\Batik;
use App\Models\Media;

class ShopSeeder extends Seeder
{
    public function run(): void
    {
        // === Categories ===
        $categories = [
            ['name' => 'Batik Tulis', 'slug' => 'batik-tulis', 'description' => 'Batik tradisional tulis tangan'],
            ['name' => 'Batik Cap', 'slug' => 'batik-cap', 'description' => 'Batik dengan teknik cap'],
            ['name' => 'Batik Print', 'slug' => 'batik-print', 'description' => 'Batik modern printing'],
        ];
        foreach ($categories as $cat) {
            Category::firstOrCreate(['slug' => $cat['slug']], $cat);
        }

        // === UMKM ===
        $umkm = Umkm::firstOrCreate(
            ['name' => 'Batik Madura Indah'],
            [
                'owner'  => 'Siti Aminah',
                'phone'  => '08123456789',
                'about'  => 'Pengrajin batik khas Madura dengan kualitas premium.',
                'address' => 'Pamekasan, Madura',
            ]
        );

        // === Batik Produk ===
        $batiks = [
            [
                'title'       => 'Batik Tulis Sekar Jagad',
                'slug'        => 'batik-tulis-sekar-jagad',
                'sku'         => 'BT001',
                'description' => 'Batik Tulis Sekar Jagad adalah karya seni batik tulis khas Indonesia yang memadukan keindahan motif klasik dengan sentuhan elegan modern. Setiap helai kain dibuat dengan tangan oleh pengrajin berpengalaman, memastikan detail motif dan warna yang sempurna. Motif “Sekar Jagad” melambangkan keharmonisan, keanggunan, dan kemakmuran, sehingga cocok dikenakan untuk berbagai acara formal maupun kasual.',
                'material'    => 'Katun',
                'size'        => 'L',
                'quality'     => 'Premium',
                'gender'      => 'unisex',
                'price'       => 250000,
                'stock'       => 10,
                'category_id' => Category::where('slug', 'batik-tulis')->value('id'),
                'umkm_id'     => $umkm->id,
                'user_id'     => null,
                'image'       => 'batiks/batik-tulis-sekar-jagad.png', // tambahkan kolom image jika ada
            ],
            [
                'title'       => 'Batik Cap Parang',
                'slug'        => 'batik-cap-parang',
                'sku'         => 'BC001',
                'description' => 'Batik Cap Parang adalah batik dengan motif klasik Parang yang terkenal di Nusantara. Dibuat menggunakan teknik cap tradisional, setiap motif dicetak dengan presisi tinggi, menghasilkan pola yang konsisten dan rapi. Motif Parang melambangkan kekuatan, keteguhan, dan keberanian, menjadikan batik ini cocok untuk dikenakan dalam acara formal maupun semi-formal.',
                'material'    => 'Katun Primis',
                'size'        => 'M',
                'quality'     => 'Standar',
                'gender'      => 'unisex',
                'price'       => 150000,
                'stock'       => 20,
                'category_id' => Category::where('slug', 'batik-cap')->value('id'),
                'umkm_id'     => $umkm->id,
                'user_id'     => null,
                'image'       => 'batiks/batik-cap-parang.png',
            ],
            [
                'title'       => 'Batik Print Modern',
                'slug'        => 'batik-print-modern',
                'sku'         => 'BP001',
                'description' => 'Batik Print Modern adalah batik kontemporer yang memadukan desain stylish dengan kenyamanan sehari-hari. Dibuat menggunakan teknik printing modern, setiap motif tercetak dengan warna tajam dan detail yang presisi, sehingga cocok untuk gaya kasual maupun formal.',
                'material'    => 'Polyester',
                'size'        => 'XL',
                'quality'     => 'Good',
                'gender'      => 'unisex',
                'price'       => 100000,
                'stock'       => 15,
                'category_id' => Category::where('slug', 'batik-print')->value('id'),
                'umkm_id'     => $umkm->id,
                'user_id'     => null,
                'image'       => 'batiks/batik-print-modern.png',
            ],
            [
                'title'       => 'Batik Tulis Rafflesia',
                'slug'        => 'batik-tulis-rafflesia',
                'sku'         => 'BT002',
                'description' => 'Batik Tulis Rafflesia menampilkan motif bunga Rafflesia yang eksotis. Dibuat dengan tangan, setiap detail motif terlihat alami dan elegan, cocok untuk acara formal maupun kasual.',
                'material'    => 'Katun Premium',
                'size'        => 'L',
                'quality'     => 'Premium',
                'gender'      => 'unisex',
                'price'       => 275000,
                'stock'       => 12,
                'category_id' => Category::where('slug', 'batik-tulis')->value('id'),
                'umkm_id'     => $umkm->id,
                'user_id'     => null,
                'image'       => 'batiks/batik-tulis-rafflesia.png',
            ],
            [
                'title'       => 'Batik Cap Mega Mendung',
                'slug'        => 'batik-cap-mega-mendung',
                'sku'         => 'BC002',
                'description' => 'Batik Cap Mega Mendung menghadirkan motif awan khas tradisional dengan warna biru menawan. Praktis, cepat, dan tetap tampil elegan.',
                'material'    => 'Katun Primis',
                'size'        => 'M',
                'quality'     => 'Standar',
                'gender'      => 'unisex',
                'price'       => 160000,
                'stock'       => 18,
                'category_id' => Category::where('slug', 'batik-cap')->value('id'),
                'umkm_id'     => $umkm->id,
                'user_id'     => null,
                'image'       => 'batiks/batik-cap-mega-mendung.png',
            ],
            [
                'title'       => 'Batik Print Geometrik',
                'slug'        => 'batik-print-geometrik',
                'sku'         => 'BP002',
                'description' => 'Batik Print Geometrik mengusung desain modern dengan motif garis dan bentuk geometrik. Cocok untuk tampilan stylish sehari-hari.',
                'material'    => 'Polyester',
                'size'        => 'XL',
                'quality'     => 'Good',
                'gender'      => 'unisex',
                'price'       => 110000,
                'stock'       => 20,
                'category_id' => Category::where('slug', 'batik-print')->value('id'),
                'umkm_id'     => $umkm->id,
                'user_id'     => null,
                'image'       => 'batiks/batik-print-geometrik.png',
            ],
            [
                'title'       => 'Batik Tulis Bunga Matahari',
                'slug'        => 'batik-tulis-bunga-matahari',
                'sku'         => 'BT003',
                'description' => 'Batik Tulis Bunga Matahari menghadirkan motif bunga ceria dengan warna hangat. Setiap batik dibuat dengan detail tangan yang rapi dan elegan.',
                'material'    => 'Katun Premium',
                'size'        => 'L',
                'quality'     => 'Premium',
                'gender'      => 'unisex',
                'price'       => 280000,
                'stock'       => 10,
                'category_id' => Category::where('slug', 'batik-tulis')->value('id'),
                'umkm_id'     => $umkm->id,
                'user_id'     => null,
                'image'       => 'batiks/batik-tulis-bunga-matahari.png',
            ],
            [
                'title'       => 'Batik Cap Truntum',
                'slug'        => 'batik-cap-truntum',
                'sku'         => 'BC003',
                'description' => 'Batik Cap Truntum menampilkan motif tradisional simbol kasih sayang dan keberuntungan. Praktis dan elegan, cocok untuk segala acara.',
                'material'    => 'Katun Primis',
                'size'        => 'M',
                'quality'     => 'Standar',
                'gender'      => 'unisex',
                'price'       => 155000,
                'stock'       => 15,
                'category_id' => Category::where('slug', 'batik-cap')->value('id'),
                'umkm_id'     => $umkm->id,
                'user_id'     => null,
                'image'       => 'batiks/batik-cap-truntum.png',
            ],
        ];

        foreach ($batiks as $data) {
            $batik = Batik::firstOrCreate(['slug' => $data['slug']], $data);

            // Tambahkan Media (gambar dummy dari public/images/batiks)
            Media::firstOrCreate([
                'mediable_id'   => $batik->id,
                'mediable_type' => Batik::class,
                'file_path'     => 'images/' . $data['image'],
            ], [
                'type'          => 'image',
                'alt'           => $batik->title,
                'order'         => 0,
            ]);
        }
    }
}
