<?php 
use RainLab\Blog\Models\Post;
class Cms55f83db421fed_617582402Class extends \Cms\Classes\PageCode
{

public function onStart(){
    $slug = $this->param('slug');
    $this['post'] = Post::where('slug', '=', $slug)
                            ->isPublished()
                            ->with('categories')
                            ->first();
    if( !$this['post'] )
        return Redirect::to('/404');

    // only to change the title to be more pleasant
    $this->page->settings['title'] = "Post - " . $this["post"]->title;
}


}
