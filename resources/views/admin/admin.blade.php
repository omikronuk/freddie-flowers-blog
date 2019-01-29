@extends('layouts.admin')

@section('content')
    <section class=" ">
        <div class="container">
            <div class="masonry">
                <div class="masonry__container row">

                    <div class="col-md-4 masonry__item">
                        <div class="card card-2 text-center">
                            <div class="card__top">
                                <a href="#">
                                    <img alt="Image" src="img/landing-8.jpg">
                                </a>
                            </div>
                            <div class="card__body">
                                <h4>Photography 101</h4>
                                <span class="type--fade">Understanding the fundamentals</span>
                                <p>
                                    Construct mockups or production-ready pages in-browser with Variant Page Builder
                                </p>
                            </div>
                            <div class="card__bottom text-center">
                                <div class="card__action">
                                    <span class="h6 type--uppercase">Edit</span>
                                    <a href="">
                                        <i class="material-icons">edit</i>
                                    </a>
                                </div>
                                <div class="card__action">
                                    <span class="h6 type--uppercase">View Comments</span>
                                    <a href="/view_comments">
                                        <i class="material-icons">comments</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
