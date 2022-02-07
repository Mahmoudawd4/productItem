@extends('./layout')

@section('content')



    <form class="form-group w-75 py-5 m-auto " method="POST" action="{{ route('arti.store') }}">

        @csrf

        <input type="text" name="name" class="form-control" class="@error('name') is-invalid @enderror" placeholder="name"
        value="{{ old('name')}}" >

        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="text" name="details" class="form-control" class="@error('details') is-invalid @enderror" placeholder="details" value="{{ old('details')}}">
        @error('details')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

        <input type="text" name="slug" class="form-control" class="@error('slug') is-invalid @enderror" placeholder="slug" value="{{ old('slug')}}">

        @error('slug')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

        <input type="number" name="is_used" class="form-control" class="@error('is_used') is-invalid @enderror"  placeholder="is_used" value="{{ old('is_used')}}">

        @error('is_used')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror



        <h6>Select Categories : </h6>
        @error('category_ids')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        @foreach ($cates as $cate)
            <div class="form-check">
                <input type="checkbox" class="form-check-input" lass="@error('category_ids[]') is-invalid @enderror"  name="category_ids[]" id="" value="{{ $cate->id }}">
                <label class="form-check-label">
                    {{ $cate->name }}
                </label>


            </div>

        @endforeach


        <button type="submit" class="btn btn-primary mt-5">submit</button>

    </form>



@endsection
