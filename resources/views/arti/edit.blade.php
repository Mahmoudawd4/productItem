@extends('./layout')

@section('content')

    <form class="form-group w-75 py-5 m-auto " method="POST" action="{{ route('arti.update', $arti->id) }}">

        @csrf

        <input type="text" name="name" class="form-control" placeholder="name" class="@error('name') is-invalid @enderror"
            value="{{ old('name') ?? $arti->name }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <input type="text" name="details" class="form-control" class="@error('details') is-invalid @enderror"
            placeholder="details" value="{{ old('details') ?? $arti->details }}">
        @error('details')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="text" name="slug" class="form-control" class="@error('slug') is-invalid @enderror" placeholder="slug"
            value="{{ old('slug') ?? $arti->slug }}">
        @error('slug')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="number" name="is_used" class="form-control" placeholder="is_used"
            class="@error('is_used') is-invalid @enderror" value="{{ old('is_used') ?? $arti->is_used }}">
        @error('is_used')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary mt-5">submit</button>
    </form>




@endsection
