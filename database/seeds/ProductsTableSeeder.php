<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //BOLSOS DAMAS
        {
            Product::create([
                'name' => 'Bolso Dama1',
                'slug' => 'bolsosdama-1',
                'details' => 'Hermoso bolso para dama en cuero',
                'price' => rand(100000, 300000),
                'category_id' => 1,
                'image' => 'products/dummy/bolsosdama/image0.jpg',
                'images' => '["products/dummy/bolsosdama/image0_1.jpg", "products/dummy/bolsosdama/image0_2.jpg", "products/dummy/bolsosdama/image0_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Bolso Dama2',
                'slug' => 'bolsosdama-2',
                'details' => 'Hermoso bolso para dama en cuero',
                'price' => rand(100000, 300000),
                'category_id' => 1,
                'image' => 'products/dummy/bolsosdama/image1.jpg',
                'images' => '["products/dummy/bolsosdama/image1_1.jpg", "products/dummy/bolsosdama/image1_2.jpg", "products/dummy/bolsosdama/image1_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }{
            Product::create([
                'name' => 'Bolso Dama3',
                'slug' => 'bolsosdama-3',
                'details' => 'Hermoso bolso para dama en cuero',
                'price' => rand(100000, 300000),
                'category_id' => 1,
                'image' => 'products/dummy/bolsosdama/image2.jpg',
                'images' => '["products/dummy/bolsosdama/image2_1.jpg", "products/dummy/bolsosdama/image2_2.jpg", "products/dummy/bolsosdama/image2_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        //BILLETERAS CABALLEROS
        {
            Product::create([
                'name' => 'Billetera Caballero1',
                'slug' => 'billeteracaballero-1',
                'details' => 'Diferentes colores y terminados, 100% cuero autenticado',
                'price' => rand(80000, 200000),
                'category_id' => 2,
                'image' => 'products/dummy/billeterashombre/image0.jpg',
                'images' => '["products/dummy/billeterashombre/image0_1.jpg", "products/dummy/billeterashombre/image0_2.jpg", "products/dummy/billeterashombre/image0_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Billetera Caballero2',
                'slug' => 'billeteracaballero-2',
                'details' => 'Diferentes colores y terminados, 100% cuero autenticado',
                'price' => rand(80000, 200000),
                'category_id' => 2,
                'image' => 'products/dummy/billeterashombre/image1.jpg',
                'images' => '["products/dummy/billeterashombre/image1_1.jpg", "products/dummy/billeterashombre/image1_2.jpg", "products/dummy/billeterashombre/image1_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Billetera Caballero3',
                'slug' => 'billeteracaballero-3',
                'details' => 'Diferentes colores y terminados, 100% cuero autenticado',
                'price' => rand(80000, 200000),
                'category_id' => 2,
                'image' => 'products/dummy/billeterashombre/image2.jpg',
                'images' => '["products/dummy/billeterashombre/image2_1.jpg", "products/dummy/billeterashombre/image2_2.jpg", "products/dummy/billeterashombre/image2_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        //MALETAS
        {
            Product::create([
                'name' => 'Maleta1',
                'slug' => 'maleta-1',
                'details' => 'Hermosas maletas para todo tipo',
                'price' => rand(100000, 350000),
                'category_id' => 3,
                'image' => 'products/dummy/maletas/image0.jpg',
                'images' => '["products/dummy/maletas/image0_1.jpg", "products/dummy/maletas/image0_2.jpg", "products/dummy/maletas/image0_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Maleta2',
                'slug' => 'maleta-2',
                'details' => 'Hermosas maletas para todo tipo',
                'price' => rand(100000, 350000),
                'category_id' => 3,
                'image' => 'products/dummy/maletas/image1.jpg',
                'images' => '["products/dummy/maletas/image1_1.jpg", "products/dummy/maletas/image1_2.jpg", "products/dummy/maletas/image1_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Maleta3',
                'slug' => 'maleta-3',
                'details' => 'Hermosas maletas para todo tipo',
                'price' => rand(100000, 350000),
                'category_id' => 3,
                'image' => 'products/dummy/maletas/image2.jpg',
                'images' => '["products/dummy/maletas/image2_1.jpg", "products/dummy/maletas/image2_2.jpg", "products/dummy/maletas/image2_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        //GORRAS
        {
            Product::create([
                'name' => 'Gorra1',
                'slug' => 'gorra-1',
                'details' => 'Gorra en diferentes colores y estilos',
                'price' => rand(100000, 150000),
                'category_id' => 4,
                'image' => 'products/dummy/gorras/image0.jpg',
                'images' => '["products/dummy/gorras/image0_1.jpg", "products/dummy/gorras/image0_2.jpg", "products/dummy/gorras/image0_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Gorra2',
                'slug' => 'gorra-2',
                'details' => 'Gorra en diferentes colores y estilos',
                'price' => rand(100000, 150000),
                'category_id' => 4,
                'image' => 'products/dummy/gorras/image1.jpg',
                'images' => '["products/dummy/gorras/image1_1.jpg", "products/dummy/gorras/image1_2.jpg", "products/dummy/gorras/image1_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Gorra3',
                'slug' => 'gorra-3',
                'details' => 'Gorra en diferentes colores y estilos',
                'price' => rand(100000, 150000),
                'category_id' => 4,
                'image' => 'products/dummy/gorras/image2.jpg',
                'images' => '["products/dummy/gorras/image2_1.jpg", "products/dummy/gorras/image2_2.jpg", "products/dummy/gorras/image2_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        //CORREAS
        {
            Product::create([
                'name' => 'Correa1',
                'slug' => 'correa-4',
                'details' => 'correas diferentes colores y estilos',
                'price' => rand(50000, 100000),
                'category_id' => 5,
                'image' => 'products/dummy/correas/image0.jpg',
                'images' => '["products/dummy/correas/image0_1.jpg", "products/dummy/correas/image0_2.jpg", "products/dummy/correas/image0_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Correa2',
                'slug' => 'correa-2',
                'details' => 'correas diferentes colores y estilos',
                'price' => rand(50000, 100000),
                'category_id' => 5,
                'image' => 'products/dummy/correas/image1.jpg',
                'images' => '["products/dummy/correas/image1_1.jpg", "products/dummy/correas/image1_2.jpg", "products/dummy/correas/image1_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Correa3',
                'slug' => 'correa-3',
                'details' => 'correas diferentes colores y estilos',
                'price' => rand(50000, 100000),
                'category_id' => 5,
                'image' => 'products/dummy/correas/image2.jpg',
                'images' => '["products/dummy/correas/image2_1.jpg", "products/dummy/correas/image2_2.jpg", "products/dummy/correas/image2_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        //GUANTES UNISEX
        {
            Product::create([
                'name' => 'Guantes Cuero Unisex',
                'slug' => 'guantes-1',
                'details' => 'Guantes unisex para todo tipo de clima resistentes al agua',
                'price' => rand(90000, 99999),
                'category_id' => 6,
                'image' => 'products/dummy/guantes/image0.jpg',
                'images' => '["products/dummy/guantes/image0_1.jpg", "products/dummy/guantes/image0_2.jpg", "products/dummy/guantes/image0_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Guantes de cuero forrados',
                'slug' => 'guantes-2',
                'details' => 'Guantes clasicos elegantes',
                'price' => rand(90000, 99999),
                'category_id' => 6,
                'image' => 'products/dummy/guantes/image1.jpg',
                'images' => '["products/dummy/guantes/image1_1.jpg", "products/dummy/guantes/image1_2.jpg", "products/dummy/guantes/image1_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Guantes cortos',
                'slug' => 'guantes-3',
                'details' => 'Gran calidad y de uso diario para todo tipo de ocasión',
                'price' => rand(90000, 99999),
                'category_id' => 6,
                'image' => 'products/dummy/guantes/image2.jpg',
                'images' => '["products/dummy/guantes/image2_1.jpg", "products/dummy/guantes/image2_2.jpg", "products/dummy/guantes/image2_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        //CARTERAS PARA DAMA
        {
            Product::create([
                'name' => 'Cartera tipo bolsa',
                'slug' => 'carteras-1',
                'details' => 'Te ofrece gran calidad y comodidad a la hora de llevarla',
                'price' => rand(90000, 99999),
                'category_id' => 7,
                'image' => 'products/dummy/carteras/image0.jpg',
                'images' => '["products/dummy/carteras/image0_1.jpg", "products/dummy/carteras/image0_2.jpg", "products/dummy/carteras/image0_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Cartera corta',
                'slug' => 'carteras-2',
                'details' => 'Gran calidad y elegancia',
                'price' => rand(90000, 99999),
                'category_id' => 7,
                'image' => 'products/dummy/carteras/image1.jpg',
                'images' => '["products/dummy/carteras/image1_1.jpg", "products/dummy/carteras/image1_2.jpg", "products/dummy/carteras/image1_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Cartera clasica',
                'slug' => 'carteras-3',
                'details' => 'Elegancia y calidad, multiples funciones, todo tipo de ocasión',
                'price' => rand(90000, 99999),
                'category_id' => 7,
                'image' => 'products/dummy/carteras/image2.jpg',
                'images' => '["products/dummy/carteras/image2_1.jpg", "products/dummy/carteras/image2_2.jpg", "products/dummy/carteras/image2_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        //CANGUROS
        {
            Product::create([
                'name' => 'Canguro de cuero cafe',
                'slug' => 'canguros-1',
                'details' => 'Gran calidad y elegancia, multiespacioso',
                'price' => rand(90000, 99999),
                'category_id' => 8,
                'image' => 'products/dummy/canguros/image0.jpg',
                'images' => '["products/dummy/canguros/image0_1.jpg", "products/dummy/canguros/image0_2.jpg", "products/dummy/canguros/image0_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Canguro clasico',
                'slug' => 'canguros-2',
                'details' => 'Canguro básico, espacioso, útil para toda ocasión',
                'price' => rand(90000, 99999),
                'category_id' => 8,
                'image' => 'products/dummy/canguros/image1.jpg',
                'images' => '["products/dummy/canguros/image1_1.jpg", "products/dummy/canguros/image1_2.jpg", "products/dummy/canguros/image1_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        {
            Product::create([
                'name' => 'Canguro elegante',
                'slug' => 'canguros-3',
                'details' => 'Elegancia y practicidad, no tendras problema en guardar muchas cosas',
                'price' => rand(90000, 99999),
                'category_id' => 8,
                'image' => 'products/dummy/canguros/image2.jpg',
                'images' => '["products/dummy/canguros/image2_1.jpg", "products/dummy/canguros/image2_2.jpg", "products/dummy/canguros/image2_3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }

        $products = Product::all();
        foreach ($products as $product) {
            if($product->id % 3 == 0) {
                $product->featured = true;
                $product->save();
            }
        }
    }
}
