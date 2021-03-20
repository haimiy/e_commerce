<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->insert([
        	[
        	'name'=> 'Gauni',
        	'quantity'=> 20,
        	'price'=>80000,
        	'description'=> 'For lady',
        	'gallery'=> 'https://i.pinimg.com/474x/9b/69/54/9b6954ee01ed50691d05e0a975f09c9d.jpg'
        	],
        	[
        	'name'=> 'lady_cloth',
        	'quantity'=> 30,
        	'price'=>10000,
        	'description'=> 'For lady ni gauni zuri sana',
        	'gallery'=> 'https://i.pinimg.com/236x/ac/1c/ed/ac1ced83a040e141e30601bd7237fd1c--hijab-ideas-arab-women.jpg'
        	],
        	[
        	'name'=> 'Baibui',
        	'quantity'=> 2,
        	'price'=>5000,
        	'description'=> 'zuri',
        	'gallery'=> 'https://i.pinimg.com/736x/6a/28/11/6a281120779e52e6845d1e260ab8d968.jpg'
        	],
        	[
        	'name'=> 'product4',
        	'quantity'=> 2,
        	'price'=>100,
        	'description'=> 'zuri',
        	'gallery'=> 'https://c8.alamy.com/comp/2D2BWRB/arab-female-in-traditional-dress-with-traditional-jewelry-2D2BWRB.jpg'
        	],
        	[
        	'name'=> 'product5',
        	'quantity'=> 10,
        	'price'=>1000,
        	'description'=> 'zuri',
        	'gallery'=> 'https://i.pinimg.com/736x/a7/43/7f/a7437f221b09c7dc4d7a22c807a029bf.jpg'
        	]

        ]);
    }
}
