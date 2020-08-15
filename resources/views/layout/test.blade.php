@extends('layout/master')

@section('content')

 <!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
 
  <div class="section-title" data-aos="fade-up"> 
          <h2>TOP 1 du Jours</h2>
         
          <div class="container">
            <div class="row no-gutters">
            
              <div class="col-lg-3 box">
                <h3>A la une! </h3>
                  <h5><a href="">  POLITIQUE </a></h5>
                    <ul>
                    @foreach($actualites as $actualite)
                      <li><i class="bx bx-check"></i> {{$actualite->titre}} </li>
                      @endforeach
                    </ul>
                    <a href="economie" class="buy-btn">Voir Plus</a>
              </div>

              <div class="col-lg-3 box">
                <h3>A la une! </h3>
                  <h5><a href="">  ECONOMIES </a></h5>
                    <ul>
                    @foreach($actualites as $actualite)
                      <li><i class="bx bx-check"></i> {{$actualite->titre}} </li>
                      @endforeach
                    </ul>
                    <a href="economie" class="buy-btn">Voir Plus</a>
              </div>

              <div class="col-lg-3 box">
                <h3>A la une! </h3>
                  <h5><a href="">  SOCIETE </a></h5>
                    <ul>
                    @foreach($actualites as $actualite)
                      <li><i class="bx bx-check"></i> {{$actualite->titre}} </li>
                      @endforeach
                    </ul>
                    <a href="economie" class="buy-btn">Voir Plus</a>
              </div>

              <div class="col-lg-3 box">
                <h3>A la une! </h3>
                  <h5><a href="">  COOPERATION </a></h5>
                    <ul>
                    @foreach($actualites as $actualite)
                      <li><i class="bx bx-check"></i> {{$actualite->titre}} </li>
                      @endforeach
                    </ul>
                    <a href="economie" class="buy-btn">Voir Plus</a>
              </div>
             
            </div>
          </div>
          
     
     
    </section><!-- End Pricing Section -->


    <section id="about" class="about">
   
    
  <article>
    <div class="section-title" data-aos="fade-up">
          <h2> <a href=""> POLITIQUE </a></h2>
        </div>
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>


      </div>
      <br>
      </article>
      <!-- LES 3 DIV EN BAS  -->
      
      <div class="container">
      
      <div class="row">
      @foreach($actualites as $actualite)
        <div class="col-lg-3">
          <div class="col-lg-6">
            <img src="{{asset('storage').'/'.$actualite->photo}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h6>{{$actualite->titre}} </h6>
            <a href="">{{$actualite->auteurs->nom}}</a>
          </div>
        </div>
          @endforeach
      </div>
      
      </div>
     
     
    </section><!-- End About Section -->


    <section id="about" class="about">
   
    
   <article>
     <div class="section-title" data-aos="fade-up">
           <h2> <a href=""> ECONOMIES </a></h2>
         </div>
       <div class="container">
 
         <div class="row">
           <div class="col-lg-6">
             <img src="assets/img/about.jpg" class="img-fluid" alt="">
           </div>
           <div class="col-lg-6 pt-4 pt-lg-0 content">
             <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
             <p class="font-italic">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
               magna aliqua.
             </p>
             <ul>
               <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
               <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
               <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
             </ul>
             <p>
               Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
               velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
               culpa qui officia deserunt mollit anim id est laborum
             </p>
           </div>
         </div>
 
 
       </div>
       <br>
       </article>
       <!-- LES 3 DIV EN BAS  -->
       
       <div class="container">
       
       <div class="row">
       @foreach($actualites as $actualite)
         <div class="col-lg-3">
           <div class="col-lg-6">
             <img src="{{asset('storage').'/'.$actualite->photo}}" class="img-fluid" alt="">
           </div>
           <div class="col-lg-6 pt-4 pt-lg-0 content">
             <h6>{{$actualite->titre}} </h6>
             <a href="">{{$actualite->auteurs->nom}}</a>
           </div>
         </div>
           @endforeach
       </div>
       
       </div>
      
      
     </section><!-- End About Section -->

     <section id="about" class="about">
   
    
   <article>
     <div class="section-title" data-aos="fade-up">
           <h2> <a href=""> SOCIETE </a></h2>
         </div>
       <div class="container">
 
         <div class="row">
           <div class="col-lg-6">
             <img src="assets/img/about.jpg" class="img-fluid" alt="">
           </div>
           <div class="col-lg-6 pt-4 pt-lg-0 content">
             <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
             <p class="font-italic">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
               magna aliqua.
             </p>
             <ul>
               <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
               <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
               <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
             </ul>
             <p>
               Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
               velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
               culpa qui officia deserunt mollit anim id est laborum
             </p>
           </div>
         </div>
 
 
       </div>
       <br>
       </article>
       <!-- LES 3 DIV EN BAS  -->
       
       <div class="container">
       
       <div class="row">
       @foreach($actualites as $actualite)
         <div class="col-lg-3">
           <div class="col-lg-6">
             <img src="{{asset('storage').'/'.$actualite->photo}}" class="img-fluid" alt="">
           </div>
           <div class="col-lg-6 pt-4 pt-lg-0 content">
             <h6>{{$actualite->titre}} </h6>
             <a href="">{{$actualite->auteurs->nom}}</a>
           </div>
         </div>
           @endforeach
       </div>
       
       </div>
      
      
     </section><!-- End About Section -->

     <section id="about" class="about">
   
    
   <article>
     <div class="section-title" data-aos="fade-up">
           <h2> <a href=""> COOPERATION </a></h2>
         </div>
       <div class="container">
 
         <div class="row">
           <div class="col-lg-6">
             <img src="assets/img/about.jpg" class="img-fluid" alt="">
           </div>
           <div class="col-lg-6 pt-4 pt-lg-0 content">
             <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
             <p class="font-italic">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
               magna aliqua.
             </p>
             <ul>
               <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
               <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
               <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
             </ul>
             <p>
               Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
               velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
               culpa qui officia deserunt mollit anim id est laborum
             </p>
           </div>
         </div>
 
 
       </div>
       <br>
       </article>
       <!-- LES 3 DIV EN BAS  -->
       
       <div class="container">
       
       <div class="row">
       @foreach($actualites as $actualite)
         <div class="col-lg-3">
           <div class="col-lg-6">
             <img src="{{asset('storage').'/'.$actualite->photo}}" class="img-fluid" alt="">
           </div>
           <div class="col-lg-6 pt-4 pt-lg-0 content">
             <h6>{{$actualite->titre}} </h6>
             <a href="">{{$actualite->auteurs->nom}}</a>
           </div>
         </div>
           @endforeach
       </div>
       
       </div>
      
      
     </section><!-- End About Section -->
 <!-- debut des 3 cadre du milieu -->
 

<!-- fin  des 3 cadre du milieu -->

 
@endsection