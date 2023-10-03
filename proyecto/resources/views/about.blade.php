{{-- @extends('layouts.app2') --}}
{{-- @section('title',"about") --}}

{{-- @section('content') --}}
{{-- <x-layout title="Homre"> --}}
  
{{-- @component('components.layout') --}}

    {{-- <h1>about</h1>    


</x-layout>

@endsection --}}
<x-layout.app title="Homre" :sum="2+2" meta-description="Descripcion About">
<x-slot name="title">ABOUT</x-slot>
  


    <h1>about</h1>    
</x-layout>
