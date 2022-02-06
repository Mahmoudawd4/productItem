@extends('./layout')

@section('content')

        <div class="container mt-5">
            <h1>category ID : {{$cate ->id}}</h1>

            <h1>category Name :{{$cate ->name}}</h1>


            <h1>article Name :</h1>

            <ul>
                @foreach ($cate->articles as $article) 
                <li>
                    {{$article->name}}
                </li>
                @endforeach
            </ul>




<a href="{{ route('cat.list') }}">All cates</a>



    @endsection('content')
