@extends('layouts.app')
@section('content')
@if (empty($posts))
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <h2> Welcome to Our Blog Site</h2></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-12">

                    <div class="boxed bg--secondary boxed--lg boxed--border">
                        <h4>Quick Tips</h4>
                        <p>
                            More blogs coming soon ...!
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
        <section class="space--sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="masonry">
                        <div class="masonry-filter-container d-flex align-items-center">
                            <span>Category:</span>
                            <div class="masonry-filter-holder">
                                <div class="masonry__filters" data-filter-all-text="All Categories"></div>
                            </div>
                        </div>
                        <hr>
                        <div class="masonry__container row">
                            <div class="masonry__item col-lg-4 col-md-6"></div>
                            @foreach ($posts as $post)
                                <div class="masonry__item col-lg-4 col-md-6" data-masonry-filter="{{ $post['category'] }}">
                                    <article class="feature feature-1">
                                        <a href="#" class="block">
                                            <img alt="Image" src="http://playground.kawisoft.com/stack2/img/blog-{{ $post['id'] }}.jpg" />
                                        </a>
                                        <div class="feature__body boxed boxed--border">
                                            <span>{{ $post['created_at'] }}</span>
                                            <h5> {{ $post['title'] }}</h5>
                                            <p>
                                                @substr($my_string, 0, 15);
                                            </p>
                                            <a href="{{ route('post.show', $post['id']) }}">
                                                Read More
                                            </a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                            <!--end item-->

                        </div>
                        <!--end of masonry container-->


                        <div class="pagination">
                            <a class="pagination__prev" href="#" title="Previous Page">&laquo;</a>
                            <ol>
                                <li class="pagination__current">1</li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                            </ol>
                            <a class="pagination__next" href="#" title="Next Page">&raquo;</a>
                        </div>
                    </div>
                    <!--end masonry-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    @endif
@endsection
