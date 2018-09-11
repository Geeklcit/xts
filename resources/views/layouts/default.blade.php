<!DOCTYPE html>

<html>
 
<head>
 
 @include('layouts.head')
 
</head>
 
<body>
<div class="container-fluid">
 
    <header class="container-fluid">
              
          @include('layouts.menu')
              
    </header>
 <div class="container">

    @yield('content')
 </div>
 

    <div class="container-fluid">
 
        @include('layouts.footer')
  
    </div>
  
</div>
 

</body>
 
</html>