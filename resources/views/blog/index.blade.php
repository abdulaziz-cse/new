@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container">
    <div class="row">
            <div class="col-md-3 offset-md-3">


                @foreach ($posts as $post)
                    @hasanyrole('subscriber|super-admin')
                        @include('_blog-box')
                    @else
                        @if(empty($post->is_permium))
                            @include('_blog-box')
                        @else
                        <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title"> {{ $post->title }} </h5>
                                  <p class="card-text"></p>
                                  <a href="/subscribe" class="btn btn-primary">Subscribe Now</a>
                                </div>
                              </div>
                        @endif
                    @endhasanyrole

                @endforeach


        </div>
    </div>
</div>
@endsection
