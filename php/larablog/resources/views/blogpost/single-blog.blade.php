@extends('layout')
    
@section('main')
    <!-- main -->
    <main class="container">
      <section class="single-blog-post">
        <h1>{{$post->title}}</h1>

        <p class="time-and-author">
        {{$post->created_at->diffForHumans()}}
          <span>Written By {{$post->user->name}} </span>
        </p>

        <div class="single-blog-post-ContentImage" data-aos="fade-left">
        <img src="{{asset($post->imagepath)}}" width="100px" height="100px"/> 
        </div>

        <div class="about-text">
          <p>
          {!!$post->body!!}
          </p>
        </div>
      </section>
      <section class="recommended">
        <p>Related</p>
        <div class="recommended-cards">
          <a href="">
            <div class="recommended-card">
              <img src="{{asset('images/hongkong.jpg')}}" alt="" loading="lazy" />
              <h4>
                 The daily news about  hongkong......<br>
                  for more info vist ....<br>
                  
              </h4>
            </div>
          </a>
          <a href="">
            <div class="recommended-card">
              <img src="{{asset('images/mc fan.jpg')}}" alt="" loading="lazy" />
              <h4>
                The Truth behind Manchester city  winning
              </h4>
            </div>
          </a>
          <a href="">
            <div class="recommended-card">
              <img src="{{asset('images/cheif chef.jpg')}}" alt="" loading="lazy" />
              <h4>
                cheif chef
              </h4>
            </div>
          </a>

        </div>
      </section>
    </main>

    @endsection

   
