<x-layout.app title="Crear nuevo post" meta-description="Formulario para crear un post">

    {{-- @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach --}}
<form action="{{ route('post.store') }}" method="POST">
    @csrf
    @include('post.form-fields')
   
    <button type="submit">Enviar</button>
</form>
<br/>
<a href="{{route('post.index')}}">Regresar</a>


</x-layout.app>
