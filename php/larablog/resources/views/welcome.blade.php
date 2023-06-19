@extends('layout')

@section('header')

       <!-- header -->
       <header class="header" style=" background-image: url({{asset("images/hongkong.jpg")}});">
        <div class="header-text">
          <h1>Aquila Blog</h1>
          <h4>Dashboard of verified news...</h4>
        </div>
        <div class="overlay"></div>
      </header>



@endsection

@section('main')

<main class="container">
        <h2 class="header-title">Latest Blog Posts</h2>
        <section class="cards-blog latest-blog">
          <div class="card-blog-content">
            <img src="images/buggatii.jpeg" alt="" />
            <p>
              2 hours ago
              <span style="float: right">Written By Aquila</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html"
                >Still the fastest car in 2023...</a
              >
            </h4>
          </div>

          @foreach($posts as $post)
        <div class="card-blog-content">
          <img src="{{asset($post->imagepath)}}" width="500px" height="500px"/>
          <p>
            {{$post->created_at->diffForHumans()}}
            <span>Written By {{$post->user->name}}</span>
          </p>
          <h4 style="font-weight: bolder">
          
            <a href="{{route('single-blog.html',$post)}}">{{$post->title}}

            </a>
          </h4>
        </div>



        @endforeach


          <div class="card-blog-content">
            <img src="{{asset('images/formula 1.jpg')}}" width="600px" height="600"/>
            <p>
              23 hours ago
              <span style="float: right">Written By Haron</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html">formula 1 kicks in LA</a>
            </h4>
          </div>

          <div class="card-blog-content">
            <img src="images/pic3.jpg" alt="" />
            <p>
              2 days ago
              <span style="float: right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html"
                >WRC Safari Rally Back To Kenya After 19 Years</a
              >
            </h4>
          </div>
        

          <div class="card-blog-content">
            <img src="images/winning team.jpg" width="600px" height="600px"/>
            <p>
              3 days ago
              <span style="float: right">Written By Jacob subb</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html">Premier League 2023/2024 Fixtures</a>
            </h4>
          </div>
        </section>
      </main>
      <script>

function find_min(nums) {
  let min_num = Number.INFINITY; // bigger than all other numbers
  for (let num of nums) {
    if (num < min_num) {
      // (Fill in the missing line here)
    }
  }
  return min_num;
}

      </script>

@endsection

<