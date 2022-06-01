@extends('master')
@section('title')
{{$post->title}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h1 class="mb-0">Post Detail</h1>
                                <p class="text-black-50 mb-0">What is on yours mind ?</p>
                            </div>
                            <div class="">
                                <a href="{{ route('post.index') }}" class="btn btn-outline-primary btn-lg">Home</a>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="">
                                <h1 class="card-title fw-bold">{{ $post->title }}</h1>
                                <p class="text-black-50 card-text">{{ $post->description }}</p>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>

@endsection
