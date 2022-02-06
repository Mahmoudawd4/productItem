@extends('./layout')

@section('content')

        <div class="container mt-5">
            <h1>Articale ID :   {{$arti ->id}}</h1>

            <h1>Articale Name  :   {{$arti ->name}}</h1>

            <h1>Articale details :   {{$arti ->details}}</h1>

            <h1>Articale slug :    {{$arti ->slug}}</h1>

            <h3>Categories :</h3>
            <ul>
                @foreach ($arti->categories as $cate)   
                <li>

                    {{$cate->name}}

                </li>

                @endforeach
            </ul>




<a class="btn btn-primary" href="{{ route('arti.list') }}">All article</a>



    @endsection('content')
