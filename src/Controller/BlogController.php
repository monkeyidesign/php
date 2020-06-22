<?php
namespace App\Controller;


class BlogController
{
    private const POSTS = [
        [
            'id' => 1,
            'slug' => 'first-post',
            'title' => 'First Post'
        ],
        [
            'id' => 2,
            'slug' => 'another-post',
            'title' => 'This is another post!'
        ],
        [
            'id' => 3,
            'slug' => 'last-post',
            'title' => 'This is the last post'
        ]
    ];
    public function list(){
        return self::POSTS;
    }
    public function post($id){
        return self::POSTS[array_search($id, array_column(self::POSTS, 'id'))];
    }
    public function postBySlug($slug){
        return self::POSTS[array_search($slug, array_column(self::POSTS, 'slug'))];
    }
}