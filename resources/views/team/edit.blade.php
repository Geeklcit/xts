<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modification des team </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Modification</h2><br  />
        <form method="post" action="{{action('TeamController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">nom:</label>
            <input type="text" class="form-control" name="nom" value="{{$team->nom}}">
          </div>
        </div>
       
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Poste</label>
              <input type="text" class="form-control" name="poste" value="{{$team->poste}}">
            </div>
        </div>

        <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="file" name="photo" value="{{$team->photo}}">    
               </div>
        </div>
       
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>