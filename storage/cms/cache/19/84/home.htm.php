<?php 
use Indikator\News\Models\Post;class Cms55f90be342bec_2125733060Class extends \Cms\Classes\PageCode
{


public function onStart(){
    $this['posts'] = Post::isPublished()->orderBy('published_at', 'desc')->take(2)->get();
}

}
