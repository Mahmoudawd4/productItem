@extends('./layout')

@section('content')

<form class="form-group w-75 py-5 m-auto " method="POST" action="{{ route('arti.update', $arti->id ) }}">

    @csrf

    <input type="text" name="name"  class="form-control" placeholder="name" value="{{ old('name') ?? $arti ->name}}" >

    <input type="text" name="details"  class="form-control" placeholder="details" value="{{ old('details') ?? $arti ->details}}" >

    <input type="text" name="slug"  class="form-control" placeholder="slug" value="{{ old('slug') ?? $arti ->slug}}" >

    <input type="number" name="is_used"  class="form-control" placeholder="is_used" value="{{ old('is_used') ?? $arti ->is_used}}" >

  <button type="submit" class="btn btn-primary mt-5">submit</button>
</form>




@endsection
