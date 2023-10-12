
{{-- usa il layout di nome ''layout''' --}}
@extends('layouts.layout')

{{-- se basta una sola parola per occupare il segnaposto si può scrivere così --}}
@section('title','pagina principale')

{{-- altirmenti ci vuole sempre la chiusura della end section --}}

@section('main-content')
<section>
    @foreach ($comics as $comic)
         {{ $comic['title']}} 
        <br>
    @endforeach
</section>

@endsection
