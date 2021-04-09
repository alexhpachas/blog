<x-app-layout>

    <div class="container py-8">

        <h1 class="text-4xl font-bold text-gray-600">{{$post->nombre}}</h1>
    
        <div class="text-lg text-gray-600 mb-2">
            {!!$post->extract!!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Contenido Principal --}}

            <div class=" lg:col-span-2">

                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">                        
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2018/10/19/10/43/social-media-3758364_960_720.jpg" alt="">
                    @endif
                </figure>
                
                <div class="text-base mt-2 text-gray-600">
                    {!!$post->body!!}
                </div>

            </div>

            {{-- Articulo Relacionado --}}

            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Mas en {{$post->categoria->nombre}}</h1>

         
                    @foreach ($similares as $similar)    
                        <ul class="mb-4">
                            <a class="flex" href="{{route('posts.show',$similar)}}">
                                @if ($similar->image)
                                    <img class="w-36  object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">    
                                @else
                                    <img class="w-36  object-cover object-center" src="https://cdn.pixabay.com/photo/2018/10/19/10/43/social-media-3758364_960_720.jpg" alt="">    
                                @endif
                                
                                <span class="ml-2 text-gray-600 font-bold justify-center">{{$similar->nombre}}</span>
                            </a>
                        </ul>                    
                        
                    @endforeach
             

            </aside>

        </div>
    </div>

    <a href="{{route('posts.index')}}">Regresar</a>

</x-app-layout>