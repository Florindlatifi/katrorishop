<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date("Y-m-d H:i:s"); 

        $users = array(
            array('name'=>'Blend Pajaziti', 'email'=> 'blendpajaziti@email.com', 'password'=>bcrypt('password')),
            array('name'=>'Gazmend Rexhepi', 'email'=> 'gazmendrexhepi@email.com', 'password'=>bcrypt('password')),
            array('name'=>'Fisnik Fejzullahu', 'email'=> 'fisnikfejzullahu@email.com', 'password'=>bcrypt('password')),
        );

        $categories = array(
            array('name'=>'Automjete', 'postcount'=>'1'),
            array('name'=>'Biznes dhe punë', 'postcount'=>'1'),
            array('name'=>'Teknologji', 'postcount'=>'1'),
            array('name'=>'Shtëpi dhe familje', 'postcount'=>'1'),
            array('name'=>'Shërbime', 'postcount'=>'1'),
            array('name'=>'Motoçiklizëm', 'postcount'=>'1'),
            array('name'=>'Sport', 'postcount'=>'1'),
            array('name'=>'Modë', 'postcount'=>'1'),
            array('name'=>'Patundshmëri', 'postcount'=>'1'),
            array('name'=>'Të tjera', 'postcount'=>'1'),
        );

        $locations = array(
            array('city'=>'Bujanovc'),
            array('city'=>'Medvegjë'),
            array('city'=>'Preshevë'),
        );

        $posts = array(
            array(
                'title'=>'Volkswagen Golf 4',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec convallis est. Sed semper, tellus vitae lobortis interdum, urna leo euismod velit, sed faucibus lectus lacus eu erat. Donec convallis a magna vel mattis. Maecenas neque velit, ultricies imperdiet venenatis ac, lacinia ut libero. Curabitur non arcu sem. Quisque semper auctor elementum.',
                'price'=>'3250',
                'img_1'=>'https://www.sgs-engineering.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/v/w/vw_golf_mk4_2.jpg',
                'img_2'=>'',
                'img_3'=>'',
                'img_4'=>'',
                'img_5'=>'',
                'user_name'=>'Blend Pajaziti',
                'category_name'=>'Automjete',
                'location_name'=>'Bujanovc',
                'user_id'=>'1',
                'category_id'=>'1',
                'location_id'=>'1',
                'created_at' => $date,
            ),
            array(
                'title'=>'Elektro instalues',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec convallis est. Sed semper, tellus vitae lobortis interdum, urna leo euismod velit, sed faucibus lectus lacus eu erat. Donec convallis a magna vel mattis. Maecenas neque velit, ultricies imperdiet venenatis ac, lacinia ut libero. Curabitur non arcu sem. Quisque semper auctor elementum.',
                'price'=>'0',
                'img_1'=>'https://5.imimg.com/data5/AA/KM/MY-41511385/electric-wires-500x500.jpg',
                'img_2'=>'',
                'img_3'=>'',
                'img_4'=>'',
                'img_5'=>'',
                'user_name'=>'Blend Pajaziti',
                'category_name'=>'Biznes dhe punë',
                'location_name'=>'Medvegjë',
                'user_id'=>'1',
                'category_id'=>'2',
                'location_id'=>'2',
                'created_at' => $date,
            ),
            array(
                'title'=>'Samsung Galaxy S6',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec convallis est. Sed semper, tellus vitae lobortis interdum, urna leo euismod velit, sed faucibus lectus lacus eu erat. Donec convallis a magna vel mattis. Maecenas neque velit, ultricies imperdiet venenatis ac, lacinia ut libero. Curabitur non arcu sem. Quisque semper auctor elementum.',
                'price'=>'270',
                'img_1'=>'https://www.vipershop.rs/wp-content/uploads/2015/11/s6-edge-crni.jpg',
                'img_2'=>'',
                'img_3'=>'',
                'img_4'=>'',
                'img_5'=>'',
                'user_name'=>'Blend Pajaziti',
                'category_name'=>'Teknologji',
                'location_name'=>'Preshevë',
                'user_id'=>'1',
                'category_id'=>'3',
                'location_id'=>'3',
                'created_at' => $date,
            ),
            array(
                'title'=>'Mobilje shtëpiake',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec convallis est. Sed semper, tellus vitae lobortis interdum, urna leo euismod velit, sed faucibus lectus lacus eu erat. Donec convallis a magna vel mattis. Maecenas neque velit, ultricies imperdiet venenatis ac, lacinia ut libero. Curabitur non arcu sem. Quisque semper auctor elementum.',
                'price'=>'500',
                'img_1'=>'https://www.homechoicestores.com/assets/img/500px/12700-3_01.jpg',
                'img_2'=>'',
                'img_3'=>'',
                'img_4'=>'',
                'img_5'=>'',
                'user_name'=>'Blend Pajaziti',
                'category_name'=>'Shtëpi dhe familje',
                'location_name'=>'Bujanovc',
                'user_id'=>'1',
                'category_id'=>'4',
                'location_id'=>'1',
                'created_at' => $date,
            ),
            array(
                'title'=>'Auto Servis',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec convallis est. Sed semper, tellus vitae lobortis interdum, urna leo euismod velit, sed faucibus lectus lacus eu erat. Donec convallis a magna vel mattis. Maecenas neque velit, ultricies imperdiet venenatis ac, lacinia ut libero. Curabitur non arcu sem. Quisque semper auctor elementum.',
                'price'=>'0',
                'img_1'=>'https://repairmymotor.com/assets/frant/location_images/manchester/repair.jpg',
                'img_2'=>'',
                'img_3'=>'',
                'img_4'=>'',
                'img_5'=>'',
                'user_name'=>'Gazmend Rexhepi',
                'category_name'=>'Shërbime',
                'location_name'=>'Medvegjë',
                'user_id'=>'2',
                'category_id'=>'5',
                'location_id'=>'2',
                'created_at' => $date,
            ),
            array(
                'title'=>'Harley Davidson',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec convallis est. Sed semper, tellus vitae lobortis interdum, urna leo euismod velit, sed faucibus lectus lacus eu erat. Donec convallis a magna vel mattis. Maecenas neque velit, ultricies imperdiet venenatis ac, lacinia ut libero. Curabitur non arcu sem. Quisque semper auctor elementum.',
                'price'=>'13000',
                'img_1'=>'https://cdn.shopify.com/s/files/1/0927/7720/products/65b32d25-012a-522d-8bc6-4d30e444d545.jpg?v=1518466390',
                'img_2'=>'',
                'img_3'=>'',
                'img_4'=>'',
                'img_5'=>'',
                'user_name'=>'Gazmend Rexhepi',
                'category_name'=>'Motoçiklizëm',
                'location_name'=>'Preshevë',
                'user_id'=>'2',
                'category_id'=>'6',
                'location_id'=>'3',
                'created_at' => $date,
            ),
            array(
                'title'=>'Nike Mercurial',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec convallis est. Sed semper, tellus vitae lobortis interdum, urna leo euismod velit, sed faucibus lectus lacus eu erat. Donec convallis a magna vel mattis. Maecenas neque velit, ultricies imperdiet venenatis ac, lacinia ut libero. Curabitur non arcu sem. Quisque semper auctor elementum.',
                'price'=>'120',
                'img_1'=>'https://www.evangelistasports.com/image/cache/catalog/products/PRODUCTS%20PICS/SHOES%20NEW/NIKE/DarkLightning/831964-013-500x500.jpg',
                'img_2'=>'',
                'img_3'=>'',
                'img_4'=>'',
                'img_5'=>'',
                'user_name'=>'Gazmend Rexhepi',
                'category_name'=>'Sport',
                'location_name'=>'Bujanovc',
                'user_id'=>'2',
                'category_id'=>'7',
                'location_id'=>'1',
                'created_at' => $date,
            ),
            array(
                'title'=>'Orë Rolex',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec convallis est. Sed semper, tellus vitae lobortis interdum, urna leo euismod velit, sed faucibus lectus lacus eu erat. Donec convallis a magna vel mattis. Maecenas neque velit, ultricies imperdiet venenatis ac, lacinia ut libero. Curabitur non arcu sem. Quisque semper auctor elementum.',
                'price'=>'1200',
                'img_1'=>'https://www.grayandsons.com/blog/wp-content/uploads/2017/04/Pre-Owned-Rolex-Submariner-116610LN.jpg',
                'img_2'=>'',
                'img_3'=>'',
                'img_4'=>'',
                'img_5'=>'',
                'user_name'=>'Fisnik Fejzullahu',
                'category_name'=>'Modë',
                'location_name'=>'Medvegjë',
                'user_id'=>'3',
                'category_id'=>'8',
                'location_id'=>'2',
                'created_at' => $date,
            ),
            array(
                'title'=>'Banesa në shitje',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec convallis est. Sed semper, tellus vitae lobortis interdum, urna leo euismod velit, sed faucibus lectus lacus eu erat. Donec convallis a magna vel mattis. Maecenas neque velit, ultricies imperdiet venenatis ac, lacinia ut libero. Curabitur non arcu sem. Quisque semper auctor elementum.',
                'price'=>'80000',
                'img_1'=>'http://thegeorges.com/wp-content/uploads/2015/04/our-building-washington.jpg',
                'img_2'=>'',
                'img_3'=>'',
                'img_4'=>'',
                'img_5'=>'',
                'user_name'=>'Fisnik Fejzullahu',
                'category_name'=>'Patundshmëri',
                'location_name'=>'Preshevë',
                'user_id'=>'3',
                'category_id'=>'9',
                'location_id'=>'3',
                'created_at' => $date,
            ),
            array(
                'title'=>'Shitet lopa',
                'description'=>'Tpermasit makiato me plum, tperparit makiato pa plum',
                'price'=>'650',
                'img_1'=>'https://5.imimg.com/data5/LP/BK/MY-9714600/holstein-friesian-cow-500x500.jpg',
                'img_2'=>'',
                'img_3'=>'',
                'img_4'=>'',
                'img_5'=>'',
                'user_name'=>'Fisnik Fejzullahu',
                'category_name'=>'Të tjera',
                'location_name'=>'Bujanovc',
                'user_id'=>'3',
                'category_id'=>'10',
                'location_id'=>'1',
                'created_at' => $date,
            ),
        );

        DB::table('users')->insert($users);

        DB::table('categories')->insert($categories);

        DB::table('locations')->insert($locations);

        DB::table('posts')->insert($posts);

    }
}
