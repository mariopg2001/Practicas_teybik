<x-layout.app :title="$posts->id" meta-description="Hola">

    <h1>{{ $posts->title }}</h1>
    <a href="{{route('post.index')}}">Regresar</a>

</x-layout.app>
