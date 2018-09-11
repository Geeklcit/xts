<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Boutique</title>
</head>
<body>
<div class="container" >
        <h2>Produit à vendre</h2><br/>
        <form method="post" action="{{url('boutique')}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-4"></div>
            <div class="form-group col-4">
              <label for="Name">Nom prodduit:</label>
              <input type="text" class="form-control" name="name">
            </div>
          </div>
          <div class="row">
            <div class="col-4"></div>
              <div class="form-group col-4">
                <label for="Email">description produit</label>
                <input type="text" class="form-control" name="email">
              </div>
            </div>
          <div class="row">
            <div class="col-4"></div>
              <div class="form-group col-4">
                <label for="Number">Phone Number:</label>
                <input type="text" class="form-control" name="number">
              </div>
            </div>
          <div class="row">
            <div class="col-4"></div>
            <label for="Number">Photo du produit:</label>
            <div class="form-group col-4">
              <input type="file" name="filename">    
           </div>
          </div>
           
          <div class="row">
            <div class="col-4"></div>
             <div class="form-group col-4" style="margin-top:60px">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form> 
</div>
</body>
</html>