
{{-- usa il layout di nome ''layout''' --}}
@extends('layouts.layout')

{{-- se basta una sola parola per occupare il segnaposto si può scrivere così --}}
@section('title','pagina principale')

{{-- altirmenti ci vuole sempre la chiusura della end section --}}

@section('main-content')
<section>
    <h5 class="my-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur minima amet rerum facere distinctio voluptatibus quo? Quia libero at possimus quisquam adipisci itaque quasi cupiditate nulla? Consequatur quam at quae.</h5>
</section>

@endsection
