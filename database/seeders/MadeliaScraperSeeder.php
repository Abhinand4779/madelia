<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class MadeliaScraperSeeder extends Seeder
{
    public function run()
    {
        // 1. Seed Categories
        $categoriesJson = file_get_contents(__DIR__ . '/scraped_public_categories.json');
        $categories = json_decode($categoriesJson, true);

        foreach ($categories as $cat) {
            $name = $cat['name'];
            $slug = Str::slug($name);
            
            Category::firstOrCreate(
                ['slug' => $slug],
                [
                    'name' => $name,
                    'parent_id' => null,
                    'image_url' => null, // We didn't scrape category images
                ]
            );
        }

        // 2. Seed Products
        $productsJson = file_get_contents(__DIR__ . '/parsed_products.json');
        $products = json_decode($productsJson, true);

        foreach ($products as $prod) {
            $data = $prod['data'];
            // data format: [id, Name, ..., ..., "Choose...", ...]
            $name = $data[1];
            $image_url = $prod['image'];
            
            if (!$name) continue;
            
            // Generate a random price since it wasn't in the admin table dump
            $price = rand(1000, 5000); 
            
            // Assign to a random category for now
            $category = Category::inRandomOrder()->first();

            Product::firstOrCreate(
                ['name' => $name],
                [
                    'description' => 'A beautifully crafted product by Madelia.',
                    'price' => $price,
                    'category_id' => $category ? $category->id : null,
                    'image_path' => $image_url,
                ]
            );
        }

        $this->command->info('Scraped Categories and Products have been seeded!');
    }
}
