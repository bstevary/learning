@extends('layout')

@section('head')

<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
@endsection
@section('main')

<main class="container"style="background color: #ffff;">

<section id="contact-us">
    <h1 style="padding-top: 50px;">Edit post</h1>


    @if(session('status'))


    <p style="color: #fff; width:100%;font-size:18px;font-weight:600;text-align:center;background:#5cb85c;padding:17px 0;margin-bottom:6px;">
    {{ session('status') }}</p>


    @endif

    <!---------contactform-->
    <div class="contact-form">

    <form action="{{route('blog.update',$post)}}" method="post"  enctype="multipart/form-data">

        @method('put')

    @csrf
        <!------title---->
        <label for="title"> <span>Title</span>  </label>
        <input type="text" id="title" name="title"  value="{{$post->title}}"/>

        @error('title')
        {{--The $attributevalue field is/must  the $validationrule----}}

        <p style="color: red; margin-bottom: 24px;"> {{$message}}</p>
       @enderror
        <!--------image--->
        <label for="image"> <span>Image</span>  </label>
        <input type="file" id="image" name="image" value="{{old('image')}}"/>
        @error('image')
        {{--The $attributevalue field is/must  the $validationrule----}}

        <p style="color: red; margin-bottom: 24px;"> {{$message}}</p>
       @enderror
        <!--------body------>
        <label for="body"> <span>Body</span>  </label>
        <textarea name="body" id="body"  >{{$post->body}}</textarea>
        @error('body')
        {{--The $attributevalue field is/must  the $validationrule----}}

        <p style="color: red; margin-bottom: 24px;"> {{$message}}</p>
       @enderror
        <!------button------>

         <input type="submit" value="Submit"/>

    </form>
    </div>
</section>

</main>

@section('script')

<script>
                        CKEDITOR.replace( 'body' );
                </script>

@endsection

@endsection