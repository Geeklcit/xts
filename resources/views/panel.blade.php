<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
   
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <a href="{{action('ServicesController@create')}}" class="btn btn-primary">ajouter</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>titre </th>
        <th>image</th>
        <th>Description</th>
        <th colspan="4">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($services as $services)
    
      <tr>
        <td>{{$services['id']}}</td>
        <td>{{$services['titre']}}</td>
        <td> <img src="{{asset('images/'. $services['file'])}}" style="width:250px; height:100px;"/></td>
        <td>{{$services['descriptions']}}</td>
        
        
        <td><a href="{{action('ServicesController@edit', $services['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ServicesController@destroy', $services['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
       
        <td><a href="{{action('ServicesController@show', $services['id'])}}" class="btn btn-warning">Publier</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>