@extends('layout')

@section('content')

<ul>
@foreach($product as $product)
<li href="">{{$product}}</li>
@endforeach
</ul>
<a class="btn btn-primary" href="{{ url('/home') }}">back</a>


@endsection('content')
