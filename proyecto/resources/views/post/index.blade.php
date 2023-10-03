

<x-layout.app title="blog" meta-description="Descripcion delBlog">

<h1>BLOG</h1> 
<a href="{{route('post.create')}}">Crear nuevo post</a>  
{{-- @dump($posts) --}}
    @foreach ($post as $posts)
      <div style="display: flex; align-items:baseline">
        <h2>
          <a href="{{route('post.show', $posts)}}">{{$posts->title}}</a>
        </h2> &nbsp; 
        <a href="{{ route('post.edit', $posts) }}">Edit</a>&nbsp;&nbsp;
        <form action="{{ route('post.destroy', $posts) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Delete</button>
        </form>
    </div>   
    @endforeach

</x-layout.app>