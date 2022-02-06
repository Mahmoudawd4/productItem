@extends('./layout')

@section('content')



<form class="form-group w-75 py-5 m-auto " method="POST" action="{{route('arti.store')}}" >

    @csrf

  <input type="text" name="name"  class="form-control" placeholder="name" value="" >

  <input type="text" name="details"  class="form-control" placeholder="details" value="" >

  <input type="text" name="slug"  class="form-control" placeholder="slug" value="" >

  <input type="number" name="is_used"  class="form-control" placeholder="is_used" value="" >

  <h6>Select Categories : </h6>
        @foreach ($cates as $cate)
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="category_ids[]" id="" value="{{$cate->id}}" >
              <label class="form-check-label">
                {{$cate->name}}
              </label>
            </div>

    @endforeach


  <button type="submit" class="btn btn-primary mt-5">submit</button>

</form>



@endsection
