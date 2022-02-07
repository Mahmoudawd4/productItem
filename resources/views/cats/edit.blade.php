@extends('./layout')

@section('content')

<form class="form-group w-75 py-5 m-auto " method="POST" action="{{ route('cat.update', $cate->id ) }}">

    @csrf

  <input type="text" name="name"  class="form-control" class="@error('name') is-invalid @enderror" placeholder="name" value="{{ old('name') ?? $cate ->name}}">


  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


  <button type="submit" class="btn btn-primary mt-5">submit</button>
</form>




@endsection
