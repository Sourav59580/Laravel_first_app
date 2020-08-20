@extends("body.default")

@section('my-title')
Home
@endsection


@section("my-content")
   
   <div class="container p-4">

   <form method="POST" action="store-data">
   @csrf
   <input type="text" name="name" class="form-control w-50 mb-4" placeholder="Enter your name">

   <input type="number" name="class" class="form-control w-50 mb-4" placeholder="Enter your class">
   
   <input type="number" name="roll" class="form-control w-50 mb-4" placeholder="Enter your roll">

   <input type="submit" class="btn btn-primary">

   </form>

   </div>

@endsection