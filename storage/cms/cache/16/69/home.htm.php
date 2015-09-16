<?php 
use RainLab\Blog\Models\Post;
class Cms55f83cffb9457_1481780287Class extends \Cms\Classes\PageCode
{

public function onStart(){
    $this['posts'] = Post::isPublished()->orderBy('published_at', 'desc')->take(5)->with('categories')->get();
}

}
