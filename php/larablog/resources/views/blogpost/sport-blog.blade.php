@extends('layout')
    
@section('main')
    <!-- main -->
    <main class="container">
      <section class="single-blog-post">
        <h1>Benefits of Lizzy's photography</h1>

        <p class="time-and-author">
          2 hours ago
          <span>Written By Rosey</span>
        </p>

        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{asset('images\curry.jpg')}}"/>
        </div>

        <div class="about-text">
          <p>
          It was a must-win game earlier than expected for the Golden State Warriors in their playoff run.
Facing a 2-0 deficit against the Sacramento Kings, Stephen Curry showed up when the Dubs needed him most to carry his squad to a 114-97 win at Chase Center.
The reigning Finals MVP had one of his vintage postseason performances as he dropped 36 points to go along with six rebounds, two steals and a block on 50 percent shooting from three-point range.
It was the first time he managed to outduel Sacramento's De'Aaron Fox so far in the series, especially down the stretch as Golden State extended its lead.
            <br><br>
            Stephen the chief  chef cooking way all... leading to the victory
          <ul>
            <li> 
               </li>
            <li>"Prevent steph is way hard" 
              said ....lebron James at Chase-bank center california </li>
            <li> Victory by all means
               </li>
            <li> 
              </li>
          </ul>
          </p>
        </div>
      </section>
      <section class="recommended">
        <p>Related</p>
        <div class="recommended-cards">
          <a href="">
            <div class="recommended-card">
              <img src="images/hongkong.jpg" alt="" loading="lazy" />
              <h4>
                 The daily news about  hongkong......<br>
                  for more info vist ....<br>
                  
              </h4>
            </div>
          </a>
          <a href="">
            <div class="recommended-card">
              <img src="images/mc fan.jpg" alt="" loading="lazy" />
              <h4>
                The Truth behind Manchester city  winning
              </h4>
            </div>
          </a>
          <a href="">
            <div class="recommended-card">
              <img src="images/cheif chef.jpg" alt="" loading="lazy" />
              <h4>
                cheif chef
              </h4>
            </div>
          </a>

        </div>
      </section>
    </main>

    @endsection

   