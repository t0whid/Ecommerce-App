<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        /* $table->string('name');
        $table->string('price');
        $table->string('category');
        $table->string('description');
        $table->string('gallery');
        $table->timestamps(); */
        DB::table('products')->insert([
            [
            "name" => "Samsung Galaxy Tab S8 Ultra",
            "price" => "50000",
            "category" => "Tab",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, autem nobis voluptas molestiae assumenda iusto! Maiores pariatur cumque, optio cupiditate, assumenda dolorum quasi dicta officia aperiam temporibus debitis vel odio hic eum aliquid? Laudantium ea similique commodi quia quam porro. Neque adipisci reprehenderit eius temporibus maiores amet ea corrupti incidunt, culpa voluptates laudantium quasi, similique eum tempore odio enim dignissimos. Neque corporis reprehenderit ex eligendi. Deserunt odit magni dolor veritatis repudiandae consequatur iusto quisquam? Mollitia, ut quibusdam iusto laudantium ad voluptatum atque quasi earum asperiores unde quia, ab enim sequi impedit dolorem. Enim magnam corporis praesentium quam tenetur cum ipsum.",
            "gallery" => "https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-tab-s8-ultra-1.jpg"
            ],

            [
            "name" => "Xiaomi Redmi Note 11T Pro+",
            "price" => "40000",
            "category" => "Smart Phone",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, autem nobis voluptas molestiae assumenda iusto! Maiores pariatur cumque, optio cupiditate, assumenda dolorum quasi dicta officia aperiam temporibus debitis vel odio hic eum aliquid? Laudantium ea similique commodi quia quam porro. Neque adipisci reprehenderit eius temporibus maiores amet ea corrupti incidunt, culpa voluptates laudantium quasi, similique eum tempore odio enim dignissimos. Neque corporis reprehenderit ex eligendi. Deserunt odit magni dolor veritatis repudiandae consequatur iusto quisquam? Mollitia, ut quibusdam iusto laudantium ad voluptatum atque quasi earum asperiores unde quia, ab enim sequi impedit dolorem. Enim magnam corporis praesentium quam tenetur cum ipsum.",
            "gallery" => "https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-11t-pro-plus-1.jpg"
            ],

            [
            "name" => "Oppo K10 5G",
            "price" => "40500",
            "category" => "Smart Phone",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, autem nobis voluptas molestiae assumenda iusto! Maiores pariatur cumque, optio cupiditate, assumenda dolorum quasi dicta officia aperiam temporibus debitis vel odio hic eum aliquid? Laudantium ea similique commodi quia quam porro. Neque adipisci reprehenderit eius temporibus maiores amet ea corrupti incidunt, culpa voluptates laudantium quasi, similique eum tempore odio enim dignissimos. Neque corporis reprehenderit ex eligendi. Deserunt odit magni dolor veritatis repudiandae consequatur iusto quisquam? Mollitia, ut quibusdam iusto laudantium ad voluptatum atque quasi earum asperiores unde quia, ab enim sequi impedit dolorem. Enim magnam corporis praesentium quam tenetur cum ipsum.",
            "gallery" => "https://fdn2.gsmarena.com/vv/pics/oppo/oppo-k10-1.jpg"
            ],
            
            [
            "name" => "OnePlus 10 Pro",
            "price" => "88500",
            "category" => "Smart Phone",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, autem nobis voluptas molestiae assumenda iusto! Maiores pariatur cumque, optio cupiditate, assumenda dolorum quasi dicta officia aperiam temporibus debitis vel odio hic eum aliquid? Laudantium ea similique commodi quia quam porro. Neque adipisci reprehenderit eius temporibus maiores amet ea corrupti incidunt, culpa voluptates laudantium quasi, similique eum tempore odio enim dignissimos. Neque corporis reprehenderit ex eligendi. Deserunt odit magni dolor veritatis repudiandae consequatur iusto quisquam? Mollitia, ut quibusdam iusto laudantium ad voluptatum atque quasi earum asperiores unde quia, ab enim sequi impedit dolorem. Enim magnam corporis praesentium quam tenetur cum ipsum.",
            "gallery" => "https://fdn2.gsmarena.com/vv/pics/oneplus/oneplus-10-pro-1.jpg"
            ],
            
            [
            "name" => "Realme GT Neo 3T",
            "price" => "45500",
            "category" => "Smart Phone",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, autem nobis voluptas molestiae assumenda iusto! Maiores pariatur cumque, optio cupiditate, assumenda dolorum quasi dicta officia aperiam temporibus debitis vel odio hic eum aliquid? Laudantium ea similique commodi quia quam porro. Neque adipisci reprehenderit eius temporibus maiores amet ea corrupti incidunt, culpa voluptates laudantium quasi, similique eum tempore odio enim dignissimos. Neque corporis reprehenderit ex eligendi. Deserunt odit magni dolor veritatis repudiandae consequatur iusto quisquam? Mollitia, ut quibusdam iusto laudantium ad voluptatum atque quasi earum asperiores unde quia, ab enim sequi impedit dolorem. Enim magnam corporis praesentium quam tenetur cum ipsum.",
            "gallery" => "https://fdn2.gsmarena.com/vv/pics/realme/neo-3t-1.jpg"
            ],
            
            [
            "name" => "Asus ROG Phone 5s Pro",
            "price" => "135000",
            "category" => "Smart Phone",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, autem nobis voluptas molestiae assumenda iusto! Maiores pariatur cumque, optio cupiditate, assumenda dolorum quasi dicta officia aperiam temporibus debitis vel odio hic eum aliquid? Laudantium ea similique commodi quia quam porro. Neque adipisci reprehenderit eius temporibus maiores amet ea corrupti incidunt, culpa voluptates laudantium quasi, similique eum tempore odio enim dignissimos. Neque corporis reprehenderit ex eligendi. Deserunt odit magni dolor veritatis repudiandae consequatur iusto quisquam? Mollitia, ut quibusdam iusto laudantium ad voluptatum atque quasi earum asperiores unde quia, ab enim sequi impedit dolorem. Enim magnam corporis praesentium quam tenetur cum ipsum.",
            "gallery" => "https://fdn2.gsmarena.com/vv/pics/asus/asus-rog-phone-5s-pro-00.jpg"
            ],

            [
            "name" => "Meizu 18s Pro",
            "price" => "43500",
            "category" => "Smart Phone",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, autem nobis voluptas molestiae assumenda iusto! Maiores pariatur cumque, optio cupiditate, assumenda dolorum quasi dicta officia aperiam temporibus debitis vel odio hic eum aliquid? Laudantium ea similique commodi quia quam porro. Neque adipisci reprehenderit eius temporibus maiores amet ea corrupti incidunt, culpa voluptates laudantium quasi, similique eum tempore odio enim dignissimos. Neque corporis reprehenderit ex eligendi. Deserunt odit magni dolor veritatis repudiandae consequatur iusto quisquam? Mollitia, ut quibusdam iusto laudantium ad voluptatum atque quasi earum asperiores unde quia, ab enim sequi impedit dolorem. Enim magnam corporis praesentium quam tenetur cum ipsum.",
            "gallery" => "https://fdn2.gsmarena.com/vv/pics/meizu/meizu-18s-pro-1.jpg"
            ],
            
            [
            "name" => "Nokia C21 Plus",
            "price" => "43500",
            "category" => "Smart Phone",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, autem nobis voluptas molestiae assumenda iusto! Maiores pariatur cumque, optio cupiditate, assumenda dolorum quasi dicta officia aperiam temporibus debitis vel odio hic eum aliquid? Laudantium ea similique commodi quia quam porro. Neque adipisci reprehenderit eius temporibus maiores amet ea corrupti incidunt, culpa voluptates laudantium quasi, similique eum tempore odio enim dignissimos. Neque corporis reprehenderit ex eligendi. Deserunt odit magni dolor veritatis repudiandae consequatur iusto quisquam? Mollitia, ut quibusdam iusto laudantium ad voluptatum atque quasi earum asperiores unde quia, ab enim sequi impedit dolorem. Enim magnam corporis praesentium quam tenetur cum ipsum.",
            "gallery" => "https://fdn2.gsmarena.com/vv/pics/nokia/nokia-c21-plus-all.jpg"
            ],
            [
            "name" => "Sony Xperia 1 IV",
            "price" => "43500",
            "category" => "Smart Phone",
            "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, autem nobis voluptas molestiae assumenda iusto! Maiores pariatur cumque, optio cupiditate, assumenda dolorum quasi dicta officia aperiam temporibus debitis vel odio hic eum aliquid? Laudantium ea similique commodi quia quam porro. Neque adipisci reprehenderit eius temporibus maiores amet ea corrupti incidunt, culpa voluptates laudantium quasi, similique eum tempore odio enim dignissimos. Neque corporis reprehenderit ex eligendi. Deserunt odit magni dolor veritatis repudiandae consequatur iusto quisquam? Mollitia, ut quibusdam iusto laudantium ad voluptatum atque quasi earum asperiores unde quia, ab enim sequi impedit dolorem. Enim magnam corporis praesentium quam tenetur cum ipsum.",
            "gallery" => "https://fdn2.gsmarena.com/vv/pics/sony/sony-xperia-1-iv-05.jpg"
            ],



    ]);
    }
}
