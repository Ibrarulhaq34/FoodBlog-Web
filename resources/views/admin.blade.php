@extends('layout.layout')

@section('container')
<!DOCTYPE html>
<html>
<head>
  <title>ADMIN</title>
  <style>
    .form {
      display: none;
    }
    .active-form {
      display: block;
    }
  </style>
</head>
<body>
  <h1 class="text-center">ADMIN</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Date</th>
    <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($blogs as $blog)
    <tr>
      <th scope="row">{{ $blog->id }}</th>
      <td>{{ $blog->title  }}</td>
      <td>{{ \Illuminate\Support\Str::limit($blog->content,$limit=50,$end="...")  }}</td>
     <td>{{ $blog->date  }}</td>
     <td><a href="/delete/{{$blog->id}}" class="btn btn-danger" >Delete</a></td>
    </tr>
    @endforeach
   </tbody>
</table>
  @if ($errors->has('message'))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>{{$errors->first('message')}}</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
						</div>
						@endif
  <div class="container">
<form method="post" action="/addblog">
@csrf
<div class="mb-3">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
</div>
<div class="mb-3">
  <label for="content" class="form-label">Content</label>
  <textarea class="form-control" id="content" name="content" rows="3" placeholder="Content"></textarea>
</div>
<div class="mb-3">
  <label for="date" class="form-label">Date</label>
  <input type="date" class="form-control" id="date" name="date" placeholder="Date">
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  

  <script>
    function showForm(formId) {
      var forms = document.getElementsByClassName('form');
      for (var i = 0; i < forms.length; i++) {
        forms[i].classList.remove('active-form');
      }
      var form = document.getElementById(formId);
      form.classList.add('active-form');
    }
  </script>
</body>
</html>


@endsection