<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Raudhiatul',
        //     'email' => 'raudhiatul@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        // User::create([
        //     'name' => 'Dodi Setiawan',
        //     'email' => 'dodisetiawan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Propertree',
        //     'slug' => 'judul-propertree',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam blanditiis aspernatur suscipit laudantium consequuntur et? Dolorem, molestiae omnis illo ab dolor iste ipsum facilis quam modi vero nam expedita mollitia voluptatem? Aliquid, dicta. Error nisi doloremque quis dolor minus laborum sequi at veniam fuga suscipit nesciunt, aliquam dicta. Tempore consectetur voluptatem amet quidem quisquam, magni perspiciatis itaque est repellendus, necessitatibus rerum ullam sapiente sunt, voluptatibus mollitia laboriosam sit aliquid. Aliquid atque, eligendi necessitatibus, dolores officiis quaerat amet reiciendis, officia aperiam cupiditate a omnis eaque culpa id facere fugiat voluptas placeat at perferendis animi. Quasi ab commodi tempore incidunt repudiandae, alias minus autem nostrum similique dolorum, neque assumenda repellat esse voluptatem eveniet rem, laboriosam quaerat inventore amet eos! Voluptatibus quaerat corporis illum laudantium nihil aspernatur ex excepturi ab culpa blanditiis neque totam perspiciatis, quas modi velit, quidem voluptate, vero reiciendis? Adipisci eius voluptatem temporibus nobis aperiam optio a cum consectetur iusto!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Propertree Kedua',
        //     'slug' => 'judul-propertree-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam blanditiis aspernatur suscipit laudantium consequuntur et? Dolorem, molestiae omnis illo ab dolor iste ipsum facilis quam modi vero nam expedita mollitia voluptatem? Aliquid, dicta. Error nisi doloremque quis dolor minus laborum sequi at veniam fuga suscipit nesciunt, aliquam dicta. Tempore consectetur voluptatem amet quidem quisquam, magni perspiciatis itaque est repellendus, necessitatibus rerum ullam sapiente sunt, voluptatibus mollitia laboriosam sit aliquid. Aliquid atque, eligendi necessitatibus, dolores officiis quaerat amet reiciendis, officia aperiam cupiditate a omnis eaque culpa id facere fugiat voluptas placeat at perferendis animi. Quasi ab commodi tempore incidunt repudiandae, alias minus autem nostrum similique dolorum, neque assumenda repellat esse voluptatem eveniet rem, laboriosam quaerat inventore amet eos! Voluptatibus quaerat corporis illum laudantium nihil aspernatur ex excepturi ab culpa blanditiis neque totam perspiciatis, quas modi velit, quidem voluptate, vero reiciendis? Adipisci eius voluptatem temporibus nobis aperiam optio a cum consectetur iusto!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Propertree Ketiga',
        //     'slug' => 'judul-propertree-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam blanditiis aspernatur suscipit laudantium consequuntur et? Dolorem, molestiae omnis illo ab dolor iste ipsum facilis quam modi vero nam expedita mollitia voluptatem? Aliquid, dicta. Error nisi doloremque quis dolor minus laborum sequi at veniam fuga suscipit nesciunt, aliquam dicta. Tempore consectetur voluptatem amet quidem quisquam, magni perspiciatis itaque est repellendus, necessitatibus rerum ullam sapiente sunt, voluptatibus mollitia laboriosam sit aliquid. Aliquid atque, eligendi necessitatibus, dolores officiis quaerat amet reiciendis, officia aperiam cupiditate a omnis eaque culpa id facere fugiat voluptas placeat at perferendis animi. Quasi ab commodi tempore incidunt repudiandae, alias minus autem nostrum similique dolorum, neque assumenda repellat esse voluptatem eveniet rem, laboriosam quaerat inventore amet eos! Voluptatibus quaerat corporis illum laudantium nihil aspernatur ex excepturi ab culpa blanditiis neque totam perspiciatis, quas modi velit, quidem voluptate, vero reiciendis? Adipisci eius voluptatem temporibus nobis aperiam optio a cum consectetur iusto!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Propertree Keempat',
        //     'slug' => 'judul-propertree-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam blanditiis aspernatur suscipit laudantium consequuntur et? Dolorem, molestiae omnis illo ab dolor iste ipsum facilis quam modi vero nam expedita mollitia voluptatem? Aliquid, dicta. Error nisi doloremque quis dolor minus laborum sequi at veniam fuga suscipit nesciunt, aliquam dicta. Tempore consectetur voluptatem amet quidem quisquam, magni perspiciatis itaque est repellendus, necessitatibus rerum ullam sapiente sunt, voluptatibus mollitia laboriosam sit aliquid. Aliquid atque, eligendi necessitatibus, dolores officiis quaerat amet reiciendis, officia aperiam cupiditate a omnis eaque culpa id facere fugiat voluptas placeat at perferendis animi. Quasi ab commodi tempore incidunt repudiandae, alias minus autem nostrum similique dolorum, neque assumenda repellat esse voluptatem eveniet rem, laboriosam quaerat inventore amet eos! Voluptatibus quaerat corporis illum laudantium nihil aspernatur ex excepturi ab culpa blanditiis neque totam perspiciatis, quas modi velit, quidem voluptate, vero reiciendis? Adipisci eius voluptatem temporibus nobis aperiam optio a cum consectetur iusto!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
