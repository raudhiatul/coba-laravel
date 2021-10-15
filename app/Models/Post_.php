<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// extends Model
class Post 
{
    private static $blog_posts = [
        [
        "title" => "Propertree Important",
        "slug" => "propertree-important",
        "author" => "Raul",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam dolore natus, est, vel dolorum quia enim, deserunt voluptatum nisi nobis excepturi atque? Voluptatum soluta illum ad ipsam accusamus libero similique sint quam commodi. Id facere libero modi atque esse perspiciatis quo delectus, inventore corrupti minima natus beatae labore sapiente quaerat. Praesentium sequi esse nulla ea laboriosam vitae, nostrum dolor incidunt, neque, voluptas necessitatibus at eligendi! Odio nostrum aliquid laudantium? Blanditiis perspiciatis animi tenetur saepe quod sunt unde nulla in facilis, voluptatibus, debitis similique, assumenda fugit reiciendis? Doloremque distinctio perspiciatis sequi qui explicabo, ab quidem obcaecati itaque? Sed, animi recusandae."
        ],
        [
            "title" => "Propertree is Good",
            "slug" => "propertree-is-good",
            "author" => "Dani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam dolore natus, est, vel dolorum quia enim, deserunt voluptatum nisi nobis excepturi atque? Voluptatum soluta illum ad ipsam accusamus libero similique sint quam commodi. Id facere libero modi atque esse perspiciatis quo delectus, inventore corrupti minima natus beatae labore sapiente quaerat. Praesentium sequi esse nulla ea laboriosam vitae, nostrum dolor incidunt, neque, voluptas necessitatibus at eligendi! Odio nostrum aliquid laudantium? Blanditiis perspiciatis animi tenetur saepe quod sunt unde nulla in facilis, voluptatibus, debitis similique, assumenda fugit reiciendis? Doloremque distinctio perspiciatis sequi qui explicabo, ab quidem obcaecati itaque? Sed, animi recusandae."    
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            // $post = [];
            // foreach($posts as $p) {
            //     if($p["slug"] === $slug) {
            //         $post = $p;
            //     }
            // }

            return $posts->firstWhere('slug', $slug);
        }
}
