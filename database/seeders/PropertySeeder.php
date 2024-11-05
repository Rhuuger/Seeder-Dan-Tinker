<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    public function run()
    {
        // Data dummy menggunakan array
        $properties = [
            [
                'name' => 'Luxury House',
                'price' => 12000000000,
                'location' => 'Jakarta',
                'size' => '500 m2',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'description' => 'Rumah mewah dengan fasilitas lengkap.'
            ],
            [
                'name' => 'Modern Apartment',
                'price' => 4500000000,
                'location' => 'BSD',
                'size' => '150 m2',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'description' => 'Apartemen modern dengan akses transportasi yang mudah.'
            ],
            [
                'name' => 'Cozy Villa',
                'price' => 7500000000,
                'location' => 'Bali',
                'size' => '300 m2',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'description' => 'Vila nyaman di dekat pantai.'
            ],
            [
                'name' => 'ssa Townhouse',
                'price' => 35000000,
                'location' => 'Tangerangs',
                'size' => '120 m3',
                'bedrooms' => 4,
                'bathrooms' => 10,
                'description' => 'Townhouse minimalis dengan desain tradisional.'
            ],
            [
                'name' => 'Penthousesss',
                'price' => 20000,
                'location' => 'Jakartas',
                'size' => '800 m4',
                'bedrooms' => 1,
                'bathrooms' => 0,
                'description' => 'Penthouse mewah dengan pemandangan kotasss.'
            ]
        ];

        // Loop untuk memasukkan data ke database
        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}
