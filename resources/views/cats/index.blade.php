@extends('./layout')

@section('content')
    <div class="container">


        <td><a href="{{ route('cat.create') }}" class="btn btn-info">Create</a></td>
        <table class='table' border=1>
            <tr>
                <th> # </th>
                <th>category Name</th>
                <th>action</th>



            </tr>

            @foreach ($cats as $cate)


                <tr>

                    <td>{{ $cate->id }}</td>
                    <td>{{ $cate->name }}</td>


                    <td><a class="btn btn-primary"  href="{{ url('/cat/show',$cate->id) }}">show</a></td>
                    <td><a href="{{ url('/cat/edit',$cate->id) }}" class="btn btn-success">Edit</a></td>
                    {{-- <td><a href="{{ url('/cat/delete',$cate->id) }}" class="btn btn-danger">Delete</a></td> --}}
<td>
    <td>
        <form action="{{ url('/cat/delete',$cate->id) }}" method="post">
            @method('DELETE')
            @csrf
            <input class="btn btn-danger" type="submit" value="Delete" />
         </form>

</td>



                </tr>
















            @endforeach


        </table>


    @endsection('content')
