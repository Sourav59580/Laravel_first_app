@extends("body.default")

@section('my-title')
Home
@endsection


@section("my-content")
<form class="w-50 m-4">
<input type="text" class="form-control mb-3 input">
<input type="submit" class="btn btn-primary" value="Submit">

</form>

<script>
  $(document).ready(function(){
      $("form").submit(function (e) {
          e.preventDefault();
          var value = $(".input").val();
          window.location = "{{ url('about') }}/"+value;
        })
  })

</script>


@endsection