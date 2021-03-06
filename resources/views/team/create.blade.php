<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajout de travailleurs</title>
    <!--link rel="stylesheet" href="{{asset('css/app.css')}}"-->
    <link href="css/bootstrap.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
   
    <script src="js/jquery-3.3.1.js"></script>  
    <script src="js/bootstrap.min.js"></script>  
    
  </head>
  <body>
    <div class="container">
            <div class="form-group">
      <h2 style="text-align:center;">Ajout des membres</h2><br/>
      <form method="post" action="{{url('team')}}" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="titre">nom:</label>
            <input type="text" class="form-control" name="nom">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="descriptions">poste</label>
            <input  type="texte" class="form-control" name="poste" > 
          </div>
          </div>
       
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="photo">    
         </div>
        </div>
         
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
    </div>
      </form>
    </div>
   
  </body>
</html>