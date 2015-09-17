<?php 
use Indikator\News\Models\Post;class Cms55f98d53d1564_1135729027Class extends \Cms\Classes\PageCode
{


public function onStart(){
    $this['posts'] = Post::isPublished()->orderBy('published_at', 'desc')->take(2)->get();
}

}
