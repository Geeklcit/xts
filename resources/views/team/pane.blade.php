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
     <a href="{{action('TeamController@create')}}" class="btn btn-primary">ajouter</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>nom </th>
        <th>image</th>
        <th>poste</th>
        <th colspan="4">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($team as $team)
    
      <tr>
        <td>{{$team['id']}}</td>
        <td>{{$team['nom']}}</td>
        <td> <img src="{{asset('../images/'. $team['photo'])}}" style="width:250px; height:100px;"/></td>
        <td>{{$team['poste']}}</td>
        
        
        <td><a href="{{action('TeamController@edit', $team['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('TeamController@destroy', $team['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
       
        <td><a href="{{action('TeamController@show', $team['id'])}}" class="btn btn-warning">Publier</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>