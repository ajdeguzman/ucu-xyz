<?php 
use RainLab\Blog\Models\Post;
use RainLab\Blog\Models\Category;
class Cms55f83e5538a8c_35012829Class extends \Cms\Classes\PageCode
{

public function onStart(){
    $slug = $this->param('slug');

    $this['category'] = Category::where('slug', '=', $slug)->first();

    if( $this['category'] ){
        $post = new Post;
        $query = $post->isPublished()
                    ->orderBy('published_at', 'desc')
                    ->with('categories');
        $this['posts'] = $post->scopeFilterCategories($query, [ $this['category']->id ])->get();
    }
}

}
