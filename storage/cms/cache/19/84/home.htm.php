<?php 
use Indikator\News\Models\Post;class Cms55f84245cc122_167787470Class extends \Cms\Classes\PageCode
{


public function onStart(){
    $this['posts'] = Post::isPublished()->orderBy('published_at', 'desc')->take(2)->get();
}

}
