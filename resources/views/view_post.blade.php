@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <article>
                        <div class="article__title text-center">
                            <h1 class="h2"> {{ $title }}</h1>
                            <span> {{ $created_at }} in </span>
                            <span>
                                        <a href="#">Web Design</a>
                                    </span>
                        </div>
                        <!--end article title-->
                        <div class="article__body">
                            <img alt="Image" src="img/blog-1.jpg" />
                            {{ $description }}
                        </div>

                    </article>
                    <!--end item-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>


    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="comments">
                        <h3>4 Comments</h3>
                        <ul class="comments__list">
                            <li>
                                <div class="comment">
                                    <div class="comment__avatar">
                                        <img alt="Image" src="img/avatar-round-1.png" />
                                    </div>
                                    <div class="comment__body">
                                        <h5 class="type--fine-print">Anne Brady</h5>
                                        <div class="comment__meta">
                                            <span>10th May 2016</span>
                                            <a href="#">Reply</a>
                                        </div>
                                        <p>
                                            Affordances food-truck SpaceTeam unicorn disrupt integrate viral pair programming big data pitch deck intuitive intuitive prototype long shadow. Responsive hacker intuitive driven
                                        </p>
                                    </div>
                                </div>
                                <!--end comment-->
                                <div class="comment">
                                    <div class="comment__avatar">
                                        <img alt="Image" src="img/avatar-round-3.png" />
                                    </div>
                                    <div class="comment__body">
                                        <h5 class="type--fine-print">Jacob Sims</h5>
                                        <div class="comment__meta">
                                            <span>10th May 2016</span>
                                            <a href="#">Reply</a>
                                        </div>
                                        <p>
                                            Prototype intuitive intuitive thought leader personas parallax paradigm long shadow engaging unicorn SpaceTeam fund ideate paradigm.
                                        </p>
                                    </div>
                                </div>
                                <!--end comment-->
                            </li>
                        </ul>
                    </div>
                    <!--end comments-->
                    <div class="comments-form">
                        <h4>Leave a comment</h4>
                        <form class="row">
                            <div class="col-md-6">
                                <label>Your Name:</label>
                                <input type="text" name="Name" placeholder="Type name here" />
                            </div>
                            <div class="col-md-6">
                                <label>Email Address:</label>
                                <input type="email" name="email" placeholder="you@mailprovider.com" />
                            </div>
                            <div class="col-md-12">
                                <label>Comment:</label>
                                <textarea rows="4" name="Message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn--primary" type="submit">Submit Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection
