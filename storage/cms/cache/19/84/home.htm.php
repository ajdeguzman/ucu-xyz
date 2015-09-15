<?php 
use Indikator\News\Models\Post;class Cms55f8388f0fba8_1098677618Class extends \Cms\Classes\PageCode
{


public function onStart(){
    $this['posts'] = Post::isPublished()->orderBy('published_at', 'desc')->take(2)->get();
}

}
