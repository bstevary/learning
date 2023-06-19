@extends('layout')

@section('main')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

                    <div class="dashboard">
                        <ul>
                        
                            <li><a href="{{route('blog.create')}}"class="btn" style="
    display:inline-block ;
    background: #ff523b;
    color: #ffF;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius:  30px;
">create post  &#8594</a> </li>
                            <li><a href="{{route('categories.create')}}" class="btn-2" style="
    display:inline-block ;
    background: #2614ca;
    color: #ffF;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius:  30px;">Create Category</a></li>
                            <li><a href="{{route('categories.index')}}" class= "btn-3" style="display:inline-block ;
    background: #fc1414;
    color: #ffF;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius:  30px;">Categories List</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
                     <!-- Authentication -->

                     i
                     <form method="POST" action="{{ route('logout') }}">
                    
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                      <style>
                      .button {
                        background-color: #4CAF50; /* Green */
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 4px 2px;
                        cursor: pointer;
                      }
                      
                      .button2 {background-color: #008CBA;} /* Blue */
                      
                      
                      </style>
                    
                      
                      
                      
                      <button class="button button2">logout</button>
                      
                      
                    </x-responsive-nav-link>

</x-app-layout>


@endsection



