
{{-- usa il layout di nome ''layout''' --}}
@extends('layouts.layout')

{{-- se basta una sola parola per occupare il segnaposto si può scrivere così --}}
@section('title','pagina principale')

{{-- altirmenti ci vuole sempre la chiusura della end section --}}

@section('main-content')

<section>
    <div class="d-flex flex-wrap">
        
        @foreach ($comics as $comic)
        <div class="col-3 my-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$comic['thumb']}}" class="card-img-top" >
                <div class="card-body">
                    <p class="card-text"> {{ $comic['title']}} </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
