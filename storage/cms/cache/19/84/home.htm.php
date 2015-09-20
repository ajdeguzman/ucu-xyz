<?php 
use Indikator\News\Models\Post;class Cms55fe5b30bc2be_858599694Class extends \Cms\Classes\PageCode
{


public function onStart(){
    $this['posts'] = Post::isPublished()->orderBy('published_at', 'desc')->take(2)->get();
}

}
