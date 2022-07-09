<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Waste;

class SampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $waste = [
            [
                'merk' => 'Ale-ale',
                'kategori' => 'Kemasan Minuman',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'Wings Group',
                'berat_sampah' => '3',
            ],
            [
                'merk' => 'Ciptadent',
                'kategori' => 'Produk Perawatan Diri',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'Wings Group',
                'berat_sampah' => '1',
            ],
            [
                'merk' => 'Mie Sedaap',
                'kategori' => 'Kemasan Makanan',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'Wings Group',
                'berat_sampah' => '5',
            ],
            [
                'merk' => 'Indomie',
                'kategori' => 'Kemasan Makanan',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'Indofood',
                'berat_sampah' => '10',
            ],
            [
                'merk' => 'Indomilk',
                'kategori' => 'Kemasan Minuman',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'Indofood',
                'berat_sampah' => '3',
            ],
            [
                'merk' => 'Lifebuoy',
                'kategori' => 'Produk Perawatan Diri',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'Unilever',
                'berat_sampah' => '4',
            ],
            [
                'merk' => 'Rexona',
                'kategori' => 'Produk Perawatan Diri',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'Unilever',
                'berat_sampah' => '2',
            ],
            [
                'merk' => 'Rinso',
                'kategori' => 'Produk Rumah Tangga',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'Unilever',
                'berat_sampah' => '6',
            ],
            [
                'merk' => 'Molto',
                'kategori' => 'Produk Rumah Tangga',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'Unilever',
                'berat_sampah' => '4',
            ],
            [
                'merk' => 'Buavita',
                'kategori' => 'Kemasan Minuman',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'Unilever',
                'berat_sampah' => '1',
            ],
        ];

        foreach ($waste as $key => $value) {
            Waste::create($value);
        }
    }
}
