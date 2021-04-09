@props(['post'])
<article class=" mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if ($post->image)
    <img class=" w-full h-72 object-cover  object-center" src="{{Storage::url($post->image->url)}}" alt="">
    @else
    <img class=" w-full h-72 object-cover  object-center" src="https://cdn.pixabay.com/photo/2018/10/19/10/43/social-media-3758364_960_720.jpg" alt="">
    
    @endif
        <div class=" px-6 py-4">                        
            <h1 class=" text-xl font-bold mb-2">
                <a href="{{route('posts.show',$post)}}">
                    {{$post->nombre}}
                </a>                                
            </h1>
        <div class="text-gray-700 text-base">
            {!!$post->extract!!}
        </div>                                                                                                             
    </div>   

    <div class=" px-6 py-4 pt-4">
        @foreach ($post->tags as $tag)
            <a class=" inline-block bg-{{$tag->color}}-600 rounded-full px-3 py-1 text-sm mr-2 font-bold" href="{{route('posts.etiqueta',$tag)}}">{{$tag->nombre}}</a>                                
        @endforeach
    </div>                                                                       
</article>