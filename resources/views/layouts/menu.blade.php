<div class="container-fluid" style="border-raduis:10px; background-color:black ;">
        <nav class="navbar navbar-expand-lg  navbar-inverse" >
        <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Call +221 77 226 28 90</a>
            </div>
              <ul class="nav navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Follow us</a></li>
                <li class="nav-item"><a class="nav-link"  href="#"><i class="fa fa-facebook"></i></a>  </li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"></i></a> </li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-google-plus"></i></a> </li>
                <li class="nav-item"><a class="nav-link"  href="#"><i class="fa fa-instagram"></i></a> </li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                <li><span class="glyphicon glyphicon-log-in"></span>
                    <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/login"><span class="glyphicon glyphicon-user"></span>Login</a></li>
                    <li><span class="glyphicon glyphicon-log-in"></span>

                    
                
<!-- Button trigger modal -->
<!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
    Login
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div >
              <div class="row main">
                  <div class="main-login main-center">
                  <h5>S'authentifier </h5>
                      <form class="" method="post" action="login.php">
                          
                              <div class="form-group">
                              <label for="email" class="cols-sm-2 control-label"> Email</label>
                              <div class="cols-sm-10">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                      <input type="email" class="form-control" name="email" id="email"  placeholder="Entrer votre mail"/>
                                  </div>
                              </div>
                          </div>
                          
  
                          <div class="form-group">
                              <label for="password" class="cols-sm-2 control-label">Password</label>
                              <div class="cols-sm-10">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                      <input type="password" class="form-control" name="password" id="password"  placeholder="Entrer votre mot de pass"/>
                                  </div>
                              </div>
                          </div>
  
  
                          <div class="form-group" >
                              <button type="submit" name="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Valider</a>
                          </div>
  
                          <div class="form-group ">
                              <a href="inscription.php" target="_blank"  id="button" class="btn btn-primary btn-lg btn-block login-button">s'inscrire</a>
                          </div>
                          
                                      
                      </form>
                  </div>
              </div>
          </div>
        
        ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" tpype="submit" >valider</button>
        </div>
      </div>
    </div>
  </div>
  
  
                
                </li>
              </ul>
        </div>
    
          </nav> </div>

    <div class="container-fluid" style="background-color:white;">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="image/log.png" height="70"/> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">notre équipe</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">solutions</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">téléphonie</a>
                <a class="dropdown-item" href="#">Réseaux et system</a>
                <a class="dropdown-item" href="#">Développement</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  



<div class="container-fluid carou" style="margin-top:0%">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="img" src="{{URL :: asset ('./image/image4.jpg')}}" alt="first image">
        <div class="carousel-caption d-none d-md-block">
            <h1>Xaragne Tech service</h1>
            <p>Des solutions adaptées à vos besoin,vous satisfaire est notre principal soucis.</p>
        </div>
        </div>

        <div class="carousel-item">
        <img class="img" src="image/fond.jpg" alt="Chicago" >
        <div class="carousel-caption d-none d-md-block">
            <h1>Xaragne Tech service</h1>
            <p>Des solutions adaptées à vos besoin,vous satisfaire est notre principal soucis.</p>
        </div>
        </div>

        <div class="carousel-item">
        <img class="img" src="image/image4.jpg" alt="New York" >
            <div class="carousel-caption d-none d-md-block">
            <h1>Xaragne Tech service</h1>
            <p>Des solutions adaptées à vos besoin,vous satisfaire est notre principal soucis.</p>
        </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Precedent</span>
    </a>
    <a class="right carousel-control-next" href="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>