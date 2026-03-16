<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductVariation;

class ProductSeeder extends Seeder
{
    public function run(): void
    {

        // Variation presets
        $braceletVariations = [
            ['name' => '13cm - 14cm', 'price' => 90],
            ['name' => '15cm - 16cm', 'price' => 90],
            ['name' => '17cm - 18cm', 'price' => 90],
            ['name' => 'Custom Size', 'price' => 110],
        ];

        $keychainVariations = [
            ['name' => 'Standard', 'price' => 100],
            ['name' => 'Custom Charm', 'price' => 125],
        ];

        $phonecharmVariations = [
            ['name' => 'Standard', 'price' => 80],
            ['name' => 'Custom Charm', 'price' => 100],
        ];


        $products = [

            [
                'name' => 'Sanrio Pompompurin Bracelet',
                'slug' => 'pompompurin-bracelet',
                'category' => 'Bracelet',
                'image' => 'images/products/productimg_1.png',
                'description' => 'Sanrio Characters Inspired Chained Bracelets.',
                'base_price' => 90,
                'variations' => $braceletVariations
            ],

            [
                'name' => 'Sanrio Cinnamoroll Bracelet',
                'slug' => 'cinnamoroll-bracelet',
                'category' => 'Bracelet',
                'image' => 'images/products/productimg_2.png',
                'description' => 'Sanrio Characters Inspired Chained Bracelets.',
                'base_price' => 90,
                'variations' => $braceletVariations
            ],

            [
                'name' => 'Sanrio My Melody Bracelet',
                'slug' => 'mymelody-bracelet',
                'category' => 'Bracelet',
                'image' => 'images/products/productimg_3.png',
                'description' => 'Sanrio Characters Inspired Chained Bracelets.',
                'base_price' => 90,
                'variations' => $braceletVariations
            ],

            [
                'name' => 'Sanrio Hello Kitty Bracelet',
                'slug' => 'hello-kitty-bracelet',
                'category' => 'Bracelet',
                'image' => 'images/products/productimg_4.png',
                'description' => 'Sanrio Characters Inspired Chained Bracelets.',
                'base_price' => 90,
                'variations' => $braceletVariations
            ],

            [
                'name' => 'Sanrio Keroppi Bracelet',
                'slug' => 'keroppi-bracelet',
                'category' => 'Bracelet',
                'image' => 'images/products/productimg_5.png',
                'description' => 'Sanrio Characters Inspired Chained Bracelets.',
                'base_price' => 90,
                'variations' => $braceletVariations
            ],

            [
                'name' => 'Sanrio Kuromi Bracelet',
                'slug' => 'kuromi-bracelet',
                'category' => 'Bracelet',
                'image' => 'images/products/productimg_6.png',
                'description' => 'Sanrio Characters Inspired Chained Bracelets.',
                'base_price' => 90,
                'variations' => $braceletVariations
            ],

            [
                'name' => 'Marnie Pink Ver. Bracelet',
                'slug' => 'marnie-pink-ver-bracelet',
                'category' => 'Bracelet',
                'image' => 'images/products/productimg_7.png',
                'description' => 'When Marnie Was There Inspired Chained Bracelets.',
                'base_price' => 90,
                'variations' => $braceletVariations
            ],

            [
                'name' => 'Marnie Blue Ver. Bracelet',
                'slug' => 'marnie-blue-ver-bracelet',
                'category' => 'Bracelet',
                'image' => 'images/products/productimg_8.png',
                'description' => 'When Marnie Was There Inspired Chained Bracelets.',
                'base_price' => 90,
                'variations' => $braceletVariations
            ],

            [
                'name' => 'Sophie Green Ver. Bracelet',
                'slug' => 'sophie-green-ver-bracelet',
                'category' => 'Bracelet',
                'image' => 'images/products/productimg_9.png',
                'description' => 'Howl\'s Moving Castle Inspired Chained Bracelets.',
                'base_price' => 90,
                'variations' => $braceletVariations
            ],

            [
                'name' => 'Howl Pink Ver. Bracelet',
                'slug' => 'howl-pink-ver-bracelet',
                'category' => 'Bracelet',
                'image' => 'images/products/productimg_10.png',
                'description' => 'Howl\'s Moving Castle Inspired Chained Bracelets.',
                'base_price' => 90,
                'variations' => $braceletVariations
            ],

            // ========== KEYCHAINS ==========

            [
                'name' => 'Lavender Purple Keychain',
                'slug' => 'lavender-purple-keychain',
                'category' => 'Keychain',
                'image' => 'images/products/keychain1.png',
                'description' => 'Lavender purple themed keychain.',
                'base_price' => 100,
                'variations' => $keychainVariations
            ],

            [
                'name' => 'Persian Yellow Keychain',
                'slug' => 'persian-yellow-keychain',
                'category' => 'Keychain',
                'image' => 'images/products/keychain2.png',
                'description' => 'Persian yellow themed keychain.',
                'base_price' => 100,
                'variations' => $keychainVariations
            ],

            [
                'name' => 'Teal Blue Keychain',
                'slug' => 'teal-blue-keychain',
                'category' => 'Keychain',
                'image' => 'images/products/keychain3.png',
                'description' => 'Teal blue themed keychain.',
                'base_price' => 100,
                'variations' => $keychainVariations
            ],

            [
                'name' => 'Nena Pink Keychain',
                'slug' => 'nena-pink-keychain',
                'category' => 'Keychain',
                'image' => 'images/products/keychain4.png',
                'description' => 'Nena pink themed keychain.',
                'base_price' => 100,
                'variations' => $keychainVariations
            ],

            // ========== PHONE CHARMS ==========
            [
                'name' => 'Bad Phone Charm',
                'slug' => 'bad-phone-charm',
                'category' => 'Phone Charm',
                'image' => 'images/products/phonecharm1.png',
                'description' => 'Wave to Earth inspired phone charm.',
                'base_price' => 80,
                'variations' => $phonecharmVariations
            ],

            [
                'name' => 'Nouvelle Vague Phone Charm',
                'slug' => 'nouvelle-vague-phone-charm',
                'category' => 'Phone Charm',
                'image' => 'images/products/phonecharm2.png',
                'description' => 'Wave to Earth inspired phone charm.',
                'base_price' => 80,
                'variations' => $phonecharmVariations
            ],

            [
                'name' => 'Daisy Phone Charm',
                'slug' => 'daisy-phone-charm',
                'category' => 'Phone Charm',
                'image' => 'images/products/phonecharm3.png',
                'description' => 'Wave to Earth inspired phone charm.',
                'base_price' => 80,
                'variations' => $phonecharmVariations
            ],

            [
                'name' => 'Summer Flows Phone Charm',
                'slug' => 'summer-flows-phone-charm',
                'category' => 'Phone Charm',
                'image' => 'images/products/phonecharm4.png',
                'description' => 'Wave to Earth inspired phone charm.',
                'base_price' => 80,
                'variations' => $phonecharmVariations
            ],

        ];


        foreach ($products as $productData) {

            $variations = $productData['variations'];
            unset($productData['variations']);

            $product = Product::create($productData);

            foreach ($variations as $variation) {

                ProductVariation::create([
                    'product_id' => $product->id,
                    'name' => $variation['name'],
                    'price' => $variation['price'],
                ]);

            }
        }
    }
}