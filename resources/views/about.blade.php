
@extends('layouts.default')


@section('content')

<section>
        <div class="container about" style="display:block; margin-left:auto;margin-right:auto; margin-top:30px;" >
          <div class="row">
            <h1 > à propos de XTS</h1><br>
            <br> <h3 style="display:block; margin-left:auto;margin-right:auto"> Toujours à votre services</h3>
         <p style="text-align:justify center; ">
           <img src="image/log.png" style="width:150; height:100; float:left"/>


Créé en Juillet 2018, Xaragne Tech Services (XTS) est une entreprise de type société de services en ingénierie informatique (SSII) qui offre un certain nombre de solutions aux professionnels et particuliers.

L’exigence de qualité qui est une valeur a XTS constitue le fondement de notre démarche .Ainsi, XTS vous accompagne dans cette quête perpétuelle de qualité en traçant avec vous les lignes du futur.

XTS a pour vocation de cultiver l’excellence et de fournir les meilleurs prestation possibles dans la réalisation des études et la supervision de l’exécution des projets qui lui sont confiés  elle s’engage pour une bonne maîtrise de la qualité des prestations qu’elle propose à ses clients, à assurer le respect scrupuleux des délais d’exécutions des travaux.

         </p>
         </div>
       </div>
</section>

<section class="container" id="team" style="margin-top:30px;">
        <h1> ÉQUIPE</h1>
        <div class="underliner"></div>
        <p>&nbsp;</p>
        <p style="color:black; text-align:center;"> la meilleur équipe à votre services
            Des passionnés de l’informatique toujours à la recherche de la meiileur solution</p>
        <div class="container">
          <div class="row">

            @foreach($team as $team)

            <div class="col-4">
            <div class="item">
                 
            <figure class="card card-team">
              <div class="profile-img">
                <img src="{{asset('images/'. $team['photo'])}}" style="display: block; margin-left: auto;margin-right: auto;" >
              </div>
              <figcation>
                <p style="text-align:center;" class="text-md-center">
                  <strong> {{ $team->nom }} </strong><br>
                  <i>	{{ $team->poste }} </i><br>
                </p>
              </figcation>
            </figure>
         </div>
      </div>
      @endforeach
          </div>
        </div>
   
       
     

@endsection
