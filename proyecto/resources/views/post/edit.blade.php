<x-layout.app :title="$posts->id" meta-description="Hola">

    <h1>Formulario de edicion</h1>
    <form action="{{ route('post.update', $posts) }}" method="POST">
        @csrf @method('PATCH')
        @include('post.form-fields')
        <button type="submit">Enviar</button>
    </form>
    <a href="{{route('post.index')}}">Regresar</a>

</x-layout.app>
