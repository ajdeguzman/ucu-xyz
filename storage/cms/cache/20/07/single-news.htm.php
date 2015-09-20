<?php 
use Indikator\News\Models\Post;class Cms55fd761af0cb9_1924019528Class extends \Cms\Classes\PageCode
{


public function onStart(){
    $slug = $this->param('slug');
    $this['post'] = Post::where('slug', '=', $slug)
                            ->isPublished()
                            ->first();
    if( !$this['post'] )
        return Redirect::to('/404');
    $this->page->settings['title'] =  $this["post"]->title;
}


}
