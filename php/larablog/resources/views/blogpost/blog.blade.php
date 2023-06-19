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
          <li><a href="">latest blog</a></li>
          <li><a href="">Health</a></li>
          <li><a href="{{route('entertainment-blog.look')}}">Entertainment</a></li>
          <li><a href="{{route('sport-blog.show')}}">Sports</a></li>
          <li><a href="">Nature</a></li>
        </ul>
      </div>
      <section class="cards-blog latest-blog">

 @foreach($posts as $post)
        <div class="card-blog-content">

       @auth
     @if(auth () ->user()->id=== $post ->user->id)
     <div class="post-buttons" style="display: flex;">
          <a href="{{route('blog.edit' ,$post)}}" style=" padding: 10px 20px;
  background-color: #4caf50;
  margin-right: 10px;
  color: #fff;
  margin-bottom: 7px;
  display: inline-block;
 ">Edit</a>
          <form action="" method="">
          <input type="submit" value="Delete" style="padding: 10px 13px;
  background-color: red;
  color: #fff;
  margin-bottom: 7px;
  border: none;
  font-size: 16px;
  cursor:progress">
          </form>
          

        </div>
        @endif

       @endauth
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
          <img src="images/pic1.jpg" alt="" />
          <p>
            2 hours ago
            <span>Written By john weak </span>
          </p>
          <h4>
            <a href="{{route('single-blog.html', $post)}}">Benefits of getting covid 19 vaccination</a>
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
            &#128512	
          😁	&#128513
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
            &#10084;&#65039;&#10084;&#65039;
            &#10084;&#65039;
            &#10084;&#65039;
            &#10084;&#65039;
            &#10084;&#65039;
        
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="images\mc fan.jpg" alt=""  width="500px" height="500px"/>
          <p>
            3 days ago
            <span>Written By shakira mugambi</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="/single-blog.">Premier League 2023/2024 Fixtures</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="images/apples ben.jpg" alt="" />
          <p>
            2 weeks ago
            <span>Written By Naomi Mukani</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="/single-blog">12 Health Benefits Of Pomegranate Fruit</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="{{asset('images/lebrom james.jpg')}}" width="500px" height="500px"/>
          <p>
            1 day ago
            <span>Written By Haron masayi </span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="/single-blog.html">lakers knocked out off season by denver  .<br>.joker is no joke
            </a>
          </h4>
        </div>
      
        <!-- pagination -->
        
      </section>
      <div class="pagination" id="pagination">
          <a href="">&laquo;</a>
          <a class="active" href="">1</a>
          <a href="">2</a>
          <a href="">3</a>
          <a href="">4</a>
          <a href="">5</a>
          <a href="">&raquo;</a>
        </div>
    </main>
 @endsection
       