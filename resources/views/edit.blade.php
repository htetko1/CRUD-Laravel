@extends('master')
@section('title')
    Simple Blog Edit
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h1 class="mb-0">Edit Post</h1>
                            </div>
                            <div class="">
                                <a href="{{ route('post.index') }}" class="btn btn-outline-primary btn-lg">Home</a>
                            </div>
                        </div>
                        <form action="{{ route('post.update',$post->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="" class="form-label">Post Title</label>
                                <input type="text" value="{{ $post->title }}" class="form-control-lg form-control" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Post Description</label>
                                <textarea type="text" rows="10"  class="form-control-lg form-control" name="description">{{ $post->description }}</textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-lg btn-primary">Update Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
