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
        // $this->call(UsersTableSeeder::class);
        \Illuminate\Database\Eloquent\Model::unguard();
        $this->call('PostTableSeeder');
        $this->call('TagTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('CategoryPostTableSeeder');
    }
}

class PostTableSeeder extends Seeder
{
    public function run()
    {
        App\Post::truncate();
        factory(App\Post::class , 20)->create();
    }
}

class TagTableSeeder extends Seeder
{
    public function run()
    {
        App\Tag::truncate();
        factory(App\Tag::class , 10)->create();
    }
}

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        App\Category::truncate();
        factory(App\Category::class , 10)->create();
    }
}

class CategoryPostTableSeeder extends Seeder
{
    public function run()
    {
        App\CategoryPost::truncate();
        factory(App\CategoryPost::class , 20)->create();
    }
}
