
@extends('layout')

@section('content')

<p>categores</p>
@foreach($categores as $categore)
<p class="btn btn-info">{{$categore}}</p>
@endforeach


<hr>

@foreach($products as $key => $val)
<a class="btn btn-success" href="{{ url('product'.$val['id']) }}">{{$key}}</a>
<p>id :{{$val['id']}}</p>
<p>price :{{$val['price']}}</p>
<p>desc :{{$val['desc']}}</p>
@endforeach








@endsection('content')

