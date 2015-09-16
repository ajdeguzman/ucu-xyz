<?php 
use Indikator\News\Models\Post;class Cms55f8fefa0906a_941266828Class extends \Cms\Classes\PageCode
{


public function onStart(){
    $slug = $this->param('slug');
    $this['post'] = Post::where('slug', '=', $slug)
                            ->isPublished()
                            ->first();
    if( !$this['post'] )
        return Redirect::to('/404');

    // only to change the title to be more pleasant
    $this->page->settings['title'] =  $this["post"]->title;
}


}
