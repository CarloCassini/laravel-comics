
{{-- usa il layout di nome ''layout''' --}}
@extends('layouts.layout');

{{-- se basta una sola parola per occupare il segnaposto si può scrivere così --}}
@section('title','pagina principale')

{{-- altirmenti ci vuole sempre la chiusura della end section --}}
@section('header-content')
<div class="debug p-5">header</div>
 @endsection

@section('main-content')
<section>
    <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur minima amet rerum facere distinctio voluptatibus quo? Quia libero at possimus quisquam adipisci itaque quasi cupiditate nulla? Consequatur quam at quae.</h5>
</section>

@endsection

@section('footer-content')
<div class="debug p-5">footer</div>
@endsection