@extends('./layout')

@section('content')
    <div class="container">


        <td><a href="{{ route('arti.create') }}" class="btn btn-info">Create</a></td>
        <table class='table' border=1>
            <tr>
                <th> # </th>
                <th>arti Name</th>
                <th>arti details</th>
                <th>arti slug</th>
                <th>categroy name</th>
                <th>action</th>



            </tr>

            @foreach ($arti as $art)
                <tr>

                    <td>{{ $art->id }}</td>
                    <td>{{ $art->name }}</td>
                    <td>{{ $art->details }}</td>
                    <td>{{ $art->slug }}</td>
                    <td>
                        @foreach ($art->categories as $cate) {{-- categories  function bta3t el model --}}


                            {{ $cate->name }} /
                        @endforeach
                    </td>




                    <td><a class="btn btn-primary" href="{{ url('/arti/show', $art->id) }}">show</a></td>
                    <td><a href="{{ url('/arti/edit', $art->id) }}" class="btn btn-success">Edit</a></td>
                    {{-- <td><a href="{{ url('/cat/delete',$cate->id) }}" class="btn btn-danger">Delete</a></td> --}}
                    <td>
                    <td>
                        <form action="{{ url('/arti/delete', $art->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <input class="btn btn-danger" type="submit" value="Delete" />
                        </form>

                    </td>



                </tr>
















            @endforeach


        </table>


    @endsection('content')
