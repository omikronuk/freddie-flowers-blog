@extends('layouts.admin')

@section('content')
    <section class=" ">
        <div class="container">
            <div class="masonry">
                <div class="masonry__container row">
                @foreach ($posts as $post)

                    <div class="col-md-4 masonry__item">
                        <div class="card card-2 text-center">
                            <div class="card__top">
                                <a href="#">
                                    <img alt="Image" src="http://playground.kawisoft.com/stack2/img/landing-{{ $post['id'] }}.jpg">
                                </a>
                            </div>
                            <div class="card__body">
                                <h4>{{ $post->title }}</h4>
                                <span class="type--fade">{{ $post->title }}</span>
                                <p>
                                    {{ $post->descripiton }}
                                </p>
                            </div>
                            <div class="card__bottom text-center">
                                <div class="card__action">
                                    <span class="h6 type--uppercase">Edit</span>
                                    <a href="{{ route('post.edit',$post->id)}}">
                                        <i class="material-icons">edit</i>
                                    </a>
                                </div>
                                <div class="card__action">
                                    <span class="h6 type--uppercase">View Comments</span>
                                    <a href="{{ route('comments', $post->id) }}">
                                        <i class="material-icons">comments</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
