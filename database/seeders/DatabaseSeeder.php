<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
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
        User::create([
            'name'=>'Annajm Albupy',
            'username'=>'annajm07',
            'email'=>'albupyannajm83@gmail.com',
            'password'=>bcrypt('1234')
        ]);
        User::factory(5)->create();

        Post::factory(20)->create();

        
        
        // User::create([
        //     'name'=>'bintang',
        //     'email'=>'bintang@gmail.com',
        //     'password'=>bcrypt('1234')
        // ]);

        // Posts::create([
        //     'title'=>'judul pertama',
        //     'slug'=>'judul-pertama',
        //     'exerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae aliquid dolores laboriosam, tempora',
        //     'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae aliquid dolores laboriosam, tempora at officiis deserunt facere aliquam consequatur voluptas veniam autem, impedit dicta odit a recusandae quas officia suscipit eum beatae? Dolorum deserunt facere eaque, exercitationem rem fuga voluptates accusamus, aliquam labore beatae amet sapiente neque tempora, reiciendis consequuntur mollitia? Dicta excepturi debitis repellendus itaque minus distinctio perferendis assumenda maxime corrupti soluta dolor iure, quos cumque id sit neque reiciendis doloremque accusamus. Tenetur alias quam ab ipsam mollitia excepturi voluptatum possimus, obcaecati enim, odit, error cum optio assumenda repudiandae perspiciatis quis? Sint unde dolores iure nam aspernatur suscipit?',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Posts::create([
        //     'title'=>'judul kedua',
        //     'slug'=>'judul-kedua',
        //     'exerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae aliquid dolores laboriosam, tempora',
        //     'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae aliquid dolores laboriosam, tempora at officiis deserunt facere aliquam consequatur voluptas veniam autem, impedit dicta odit a recusandae quas officia suscipit eum beatae? Dolorum deserunt facere eaque, exercitationem rem fuga voluptates accusamus, aliquam labore beatae amet sapiente neque tempora, reiciendis consequuntur mollitia? Dicta excepturi debitis repellendus itaque minus distinctio perferendis assumenda maxime corrupti soluta dolor iure, quos cumque id sit neque reiciendis doloremque accusamus. Tenetur alias quam ab ipsam mollitia excepturi voluptatum possimus, obcaecati enim, odit, error cum optio assumenda repudiandae perspiciatis quis? Sint unde dolores iure nam aspernatur suscipit?',
        //     'category_id'=>2,
        //     'user_id'=>1
        // ]);

        // Posts::create([
        //     'title'=>'judul ketiga',
        //     'slug'=>'judul-ketiga',
        //     'exerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae aliquid dolores laboriosam, tempora',
        //     'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae aliquid dolores laboriosam, tempora at officiis deserunt facere aliquam consequatur voluptas veniam autem, impedit dicta odit a recusandae quas officia suscipit eum beatae? Dolorum deserunt facere eaque, exercitationem rem fuga voluptates accusamus, aliquam labore beatae amet sapiente neque tempora, reiciendis consequuntur mollitia? Dicta excepturi debitis repellendus itaque minus distinctio perferendis assumenda maxime corrupti soluta dolor iure, quos cumque id sit neque reiciendis doloremque accusamus. Tenetur alias quam ab ipsam mollitia excepturi voluptatum possimus, obcaecati enim, odit, error cum optio assumenda repudiandae perspiciatis quis? Sint unde dolores iure nam aspernatur suscipit?',
        //     'category_id'=>2,
        //     'user_id'=>1
        // ]);

        // Posts::create([
        //     'title'=>'judul keempat',
        //     'slug'=>'judul-keempat',
        //     'exerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae aliquid dolores laboriosam, tempora',
        //     'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae aliquid dolores laboriosam, tempora at officiis deserunt facere aliquam consequatur voluptas veniam autem, impedit dicta odit a recusandae quas officia suscipit eum beatae? Dolorum deserunt facere eaque, exercitationem rem fuga voluptates accusamus, aliquam labore beatae amet sapiente neque tempora, reiciendis consequuntur mollitia? Dicta excepturi debitis repellendus itaque minus distinctio perferendis assumenda maxime corrupti soluta dolor iure, quos cumque id sit neque reiciendis doloremque accusamus. Tenetur alias quam ab ipsam mollitia excepturi voluptatum possimus, obcaecati enim, odit, error cum optio assumenda repudiandae perspiciatis quis? Sint unde dolores iure nam aspernatur suscipit?',
        //     'category_id'=>3,
        //     'user_id'=>2
        // ]);

        Category::create([
            'name'=>'Web Development',
            'slug'=>'web-development'
        ]);

        Category::create([
            'name'=>'Programming',
            'slug'=>'Programming'
        ]);

        Category::create([
            'name'=>'Game Maker',
            'slug'=>'game-maker'
        ]);





    }
}
