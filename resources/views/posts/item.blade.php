<div class="blog-post">
    <h2 class="blog-post-title"><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h2>
    <p class="blog-post-meta">{{$post->created_at->format('d.m.Y H:i:s')}}</p>
    <p>{{$post->excerpt}}</p>
</div><!-- /.blog-post -->
