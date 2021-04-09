<x-app-layout>
    
        <div class="container bg-center py-2">

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3">

                @foreach ($posts as $post)
                    <article class="w-full h-80 bg-center bg-cover @if($loop->first) md:col-span-2  @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2018/10/19/10/43/social-media-3758364_960_720.jpg @endif)">
                        <div class="w-full h-full px-8 flex flex-col justify-center">
                            <div>
                                {{-- Etiquetas --}}
                                @foreach ($post->tags as $tag)                                
                                    <a href="{{route('posts.etiqueta',$tag)}}" class="inline-block px-3 h-6 {{-- bg-{{$tag->color}}-600 hover:bg-red-700 --}} rounded-full" style="background-color: {{$tag->color}};">{{$tag->nombre}}</a> 
                                @endforeach
                            </div>                    
                            <h1 class="text-4xl text-white leading-8 font-bold">
                                <a href="{{route('posts.show',$post)}}">
                                    {{$post->nombre}}
                                </a>
                            </h1>
                        </div>                                                                         
                    </article>                    
                @endforeach

            </div>
            
        </div>
    
    {{$posts->links()}}

</x-app-layout>