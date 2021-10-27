<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::truncate();

         $user = User::factory()->create();

         Category::truncate();

         $personal = Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

         $family = Category::create([
             'name' => 'Family',
             'slug' => 'family'
         ]);

         $work = Category::create([
             'name' => 'Work',
             'slug' => 'work'
         ]);

         Post::truncate();

         Post::create([
             'user_id' => $user->id,
             'category_id' => $family->id,
             'title' => 'My Family Post',
             'slug' => 'my-family-post',
             'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus ornare. Sed cras ornare arcu dui. Aenean et tortor at risus viverra adipiscing. Enim diam vulputate ut pharetra sit amet. Cursus vitae congue mauris rhoncus aenean vel elit. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Cum sociis natoque penatibus et magnis. Phasellus vestibulum lorem sed risus. Viverra nam libero justo laoreet sit amet. At ultrices mi tempus imperdiet nulla. Ut placerat orci nulla pellentesque dignissim enim sit amet venenatis. Mauris cursus mattis molestie a. Turpis massa tincidunt dui ut. At tellus at urna condimentum mattis pellentesque id nibh. Aliquet risus feugiat in ante metus dictum at tempor commodo. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Aliquet bibendum enim facilisis gravida neque. Egestas sed tempus urna et pharetra pharetra massa massa ultricies.</p>',
         ]);

         Post::create([
             'user_id' => $user->id,
             'category_id' => $work->id,
             'title' => 'My Work Post',
             'slug' => 'my-work-post',
             'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus ornare. Sed cras ornare arcu dui. Aenean et tortor at risus viverra adipiscing. Enim diam vulputate ut pharetra sit amet. Cursus vitae congue mauris rhoncus aenean vel elit. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Cum sociis natoque penatibus et magnis. Phasellus vestibulum lorem sed risus. Viverra nam libero justo laoreet sit amet. At ultrices mi tempus imperdiet nulla. Ut placerat orci nulla pellentesque dignissim enim sit amet venenatis. Mauris cursus mattis molestie a. Turpis massa tincidunt dui ut. At tellus at urna condimentum mattis pellentesque id nibh. Aliquet risus feugiat in ante metus dictum at tempor commodo. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Aliquet bibendum enim facilisis gravida neque. Egestas sed tempus urna et pharetra pharetra massa massa ultricies.</p>',
         ]);

         Post::create([
             'user_id' => $user->id,
             'category_id' => $personal->id,
             'title' => 'My Personal Post',
             'slug' => 'my-personal-post',
             'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus ornare. Sed cras ornare arcu dui. Aenean et tortor at risus viverra adipiscing. Enim diam vulputate ut pharetra sit amet. Cursus vitae congue mauris rhoncus aenean vel elit. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Cum sociis natoque penatibus et magnis. Phasellus vestibulum lorem sed risus. Viverra nam libero justo laoreet sit amet. At ultrices mi tempus imperdiet nulla. Ut placerat orci nulla pellentesque dignissim enim sit amet venenatis. Mauris cursus mattis molestie a. Turpis massa tincidunt dui ut. At tellus at urna condimentum mattis pellentesque id nibh. Aliquet risus feugiat in ante metus dictum at tempor commodo. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Aliquet bibendum enim facilisis gravida neque. Egestas sed tempus urna et pharetra pharetra massa massa ultricies.</p>',
         ]);
    }
}
