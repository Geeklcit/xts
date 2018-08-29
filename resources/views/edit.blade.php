<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modification des services </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Modification</h2><br  />
        <form method="post" action="{{action('ServicesController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">titre:</label>
            <input type="text" class="form-control" name="titre" value="{{$services->titre}}">
          </div>
        </div>
       
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">description</label>
              <input type="text" class="form-control" name="descriptions" value="{{$services->descriptions}}">
            </div>
        </div>

        <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="file" name="filename" value="{{$services->filename}}">    
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