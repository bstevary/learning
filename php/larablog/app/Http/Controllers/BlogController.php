<?php


namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

 


    public function index ()
    {
    $posts=Post::latest()->get();
    
        return  view("blogpost.blog",compact('posts'));
    }

    public function create()
    {
        return  view("blogpost.create-blog");
    }


  //  public function html($slug)
    //{
      //  $post=Post::where('slug' ,$slug)->first();
       // return  view("blogpost.single-blog" ,compact('post')  );
   // }
  public function html(Post $post) 

  {

    return  view("blogpost.single-blog" ,compact('post')  );

  }


    public function look()
    {
        return  view("blogpost.entertainment-blog");
    }




    public function show ()
    {
        return  view("blogpost.sport-blog");
    }

    

    public function edit (Post $post)
    {
        return  view("blogpost.edit-blog", compact('post'));
    }


    public function update (Request $request , Post $post)

    {
        $request->validate([

            'title'=>'required',
            'image'=>'required|image',
            'body'=>'required'
            ]); 
            
    
              
            $title = $request->input('title');
     
            $postId=$post->id;
            $slug = Str::slug($title, '-') ."-".$postId;
            $body = $request->input('body');
    
    
            //file appload
              $imagepath='storage/'.$request->file('image')->store('postImages.public');
    
              
              $post->title =$title;
              $post->slug =$slug;
              
              $post->body =$body;
              $post->imagepath =$imagepath;
    
              $post-> Save();
    
    
              return redirect()->back()->with('status','Post Edited Successfully');
    
      
    }


    public function store (Request $request )
    {
        $request->validate([

        'title'=>'required',
        'image'=>'required|image',
        'body'=>'required'
        ]); 
        

          
        $title = $request->input('title');
 
        $postId=Post::latest()->take(1)->first()->id +1;

        $slug = Str::slug($title, '-') ."-" .$postId;
        $user_id=Auth::user()->id;
        $body = $request->input('body');


        //file appload
          $imagepath='storage/'.$request->file('image')->store('postImages.public');

          $post =$post =new Post(); 
          $post->title =$title;
          $post->slug =$slug;
          $post->user_id =$user_id;
          $post->body =$body;
          $post->imagepath =$imagepath;

          $post-> Save();


          return redirect()->back()->with('status','Post Created Successfully');


          
    

        // postImages.public/A4G4fItGUymmuTiQG0Afg7yTq1fu0rFR3zfSQ4EZ.jpg



    }
}
