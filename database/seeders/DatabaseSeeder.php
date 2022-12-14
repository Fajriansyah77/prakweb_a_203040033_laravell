<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Fajriansyah',
            'username' => 'fajriansyah',
            'email' => 'easieryousay@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
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
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, placeat?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum optio necessitatibus sapiente? Esse error quia optio ratione beatae deleniti dolor. Officiis quam, asperiores nesciunt tempora iure enim dicta quibusdam sunt aliquam temporibus quia omnis. Provident vitae blanditiis nam sequi esse, natus fugiat distinctio ratione fuga harum expedita voluptas unde?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, placeat?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum optio necessitatibus sapiente? Esse error quia optio ratione beatae deleniti dolor. Officiis quam, asperiores nesciunt tempora iure enim dicta quibusdam sunt aliquam temporibus quia omnis. Provident vitae blanditiis nam sequi esse, natus fugiat distinctio ratione fuga harum expedita voluptas unde?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, placeat?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum optio necessitatibus sapiente? Esse error quia optio ratione beatae deleniti dolor. Officiis quam, asperiores nesciunt tempora iure enim dicta quibusdam sunt aliquam temporibus quia omnis. Provident vitae blanditiis nam sequi esse, natus fugiat distinctio ratione fuga harum expedita voluptas unde?',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul empat',
        //     'slug' => 'judul-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, placeat?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rerum optio necessitatibus sapiente? Esse error quia optio ratione beatae deleniti dolor. Officiis quam, asperiores nesciunt tempora iure enim dicta quibusdam sunt aliquam temporibus quia omnis. Provident vitae blanditiis nam sequi esse, natus fugiat distinctio ratione fuga harum expedita voluptas unde?',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
