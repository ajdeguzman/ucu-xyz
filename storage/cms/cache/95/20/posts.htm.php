<?php 
use RainLab\Blog\Models\Post;
class Cms55f83e6826242_1887720348Class extends \Cms\Classes\PageCode
{

public function onStart(){
    $this['posts'] = Post::isPublished()
                        ->orderBy('published_at', 'desc')
                        ->take(5)
                        ->with('categories')
                        ->get();
}
public function onLoadMorePosts(){
        $postsCount = (int) post('postsCount');

        $this['posts'] = Post::isPublished()
            ->orderBy('published_at', 'desc')
            ->skip( $postsCount * 5 )
            ->take(5)
            ->with('categories')
            ->get();
}

}
