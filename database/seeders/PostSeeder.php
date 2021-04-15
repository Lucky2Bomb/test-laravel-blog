<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('posts')->insert([
                'category_id' => rand(1, 10),
                'title' => 'Post ' . $i,
                'slug' => 'post-' . $i,
                'description' => 'Description of post ' . $i,
                'text' => '<p>Phasellus ut tempus neque, eu facilisis nulla. Proin sit amet consequat odio. Vestibulum sed diam eu mi faucibus posuere quis ac nunc. Suspendisse elementum arcu ac ex imperdiet ultricies. Quisque dictum orci ex, a luctus ex cursus et. Quisque pretium massa sit amet augue maximus iaculis. Cras posuere sem sit amet tortor dignissim, nec molestie tellus congue. Aenean non elementum augue. Quisque vestibulum nibh nulla, id fringilla metus efficitur ut. Nullam vehicula magna id ullamcorper maximus. Nunc eget tempus sem. Nam ultricies mattis viverra. Curabitur sed elementum lacus, ac fermentum orci. Duis finibus ligula ut purus convallis, sed molestie ex imperdiet. Sed porttitor turpis quis libero tincidunt, ac faucibus purus dignissim. Phasellus ac interdum metus. ' . '<br>' . $i . '</p>',
            ]);
        }
    }
}
