@extends('layout')



@section('main')
    <!-- main -->
    <main class="container">
      <h2 class="header-title">All Blog Posts</h2>
      <div class="searchbar">
        <form action="">
          <input type="text" placeholder="Search..." name="search" />

          <button type="submit">
            <i class="fa fa-search"></i>
          </button>

        </form>
      </div>
      <div class="categories">
        <ul>
          <li><a href="blog">latest blog</a></li>
          <li> <a href="">Health</a></li>
          <li><a href="{{route('entertainment-blog.look')}}">Entertainment</a></li>
          <li><a href="{{route('sport-blog.show')}}">Sports</a></li>
          <li><a href="">Nature</a></li>
        </ul>
      </div>
      <section class="cards-blog latest-blog">

        <div class="card-blog-content">
          <img src="images/entertainment movie.jpg" alt="" />
          <p>
            2 hours ago
            <span>Written By john weak </span>
          </p>
          <h4>
            <a href="/single-blog">Benefits of getting covid 19 vaccination</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="images/music.jazz.jpg" width="500px" height="500px" />
          <p>
            23 hours ago
            <span>Written By Aquila Muriuki</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Top 10 Music Stories Never Told</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="images/formula 1.jpg" width="500px"  height="500px"/>
          <p>
            2 days ago
            <span>Written By Marybar</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">WRC formula 1 back on season <br>at miami</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="images\mc fan.jpg" alt=""  width="500px" height="500px"/>
          <p>
            3 days ago
            <span>Written By shakira mugambi</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Premier League 2023/2024 Fixtures</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="images/apples ben.jpg" alt="" />
          <p>
            2 weeks ago
            <span>Written By Naomi Mukani</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">12 Health Benefits Of Pomegranate Fruit</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="{{asset('images/lebrom james.jpg')}}" width="500px" height="500px"/>
          <p>
            1 day ago
            <span>Written By Haron masayi </span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">lakers knocked out off season by denver  .<br>.joker is no joke

            </a>
          </h4>
        </div>
      
       



        <!-- pagination -->
        <div class="pagination" id="pagination">
          <a href="">&laquo;</a>
          <a class="active" href="">1</a>
          <a href="">2</a>
          <a href="">3</a>
          <a href="">4</a>
          <a href="">5</a>
          <a href="">&raquo;</a>
        </div>
      </section>
    </main>
 @endsection
      