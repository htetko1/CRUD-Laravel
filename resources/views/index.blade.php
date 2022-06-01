@extends('master')
@section('title')
    Simple Blog Home
@endsection

@section('content')
    <div class="container">
        <div class="row">
           <div class="col-lg-8">
               <div class="card my-4">
                   <div class="card-body">
                       <div class="d-flex justify-content-between align-items-center">
                           <div class="">
                               <h1 class="mb-0">Hello.....</h1>
                               <p class="text-black-50 mb-0">What is on yours mind ?</p>
                           </div>
                           <div class="">
                               <a href="{{ route('post.create') }}" class="btn btn-outline-primary btn-lg">Create Post</a>
                           </div>
                       </div>
                   </div>
               </div>

               @foreach($posts as $p)
               <div class="card mb-4">
                   <div class="card-body">
                       <div class="">
                           <h1 class="card-title fw-bold">{{ $p->title }}</h1>
                           <p class="text-black-50 card-text">{{ \Illuminate\Support\Str::words($p->description,50) }}</p>
                       </div>
                       <div class="d-flex justify-content-between align-items-center">
                           <p>{{ $p->created_at->format("j F Y | n:i A ") }}</p>
                           <div class="">
                               <form action="{{ route('post.destroy',$p->id) }}" class="d-inline-block" method="post" >
                                   @csrf
                                   @method("delete")
                                   <button class="btn btn-danger">Del</button>
                               </form>
                               <a href="{{ route('post.edit',$p->id) }}" class="btn btn-outline-success">Edit</a>
                               <a href="{{ route('post.show',$p->id) }}" class="btn btn-outline-primary">See More</a>

                           </div>
                       </div>
                   </div>
               </div>
               @endforeach
           </div>
        </div>
    </div>

@endsection
