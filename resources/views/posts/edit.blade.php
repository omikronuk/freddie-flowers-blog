@extends('layouts.admin')

@section('content')
    {{--<posts-create></posts-create>--}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <h2> Editing '{{ $post->title }}'</h2></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><p class="alert alert-danger">{{ $error }} </p></li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <div class="boxed bg--secondary boxed--lg boxed--border">
                        <h4 class="">Caution!</h4>
                        <p> Clicking on the below button will permanently delete this post</p>

                        <form action="{{ route('post.destroy', $post->id)}}" method="post">
                            @csrf
                            @method('DELETE')

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <form method="post" action="{{ route('post.update', $post->id) }}" class="row">
                        @csrf
                        @method('patch')

                        <div class="col-md-12">
                            <label>Title:</label>
                            <input type="text" name="title" placeholder="eg: caring for your flowers" value="{{ $post->title }}" class="validate-required">
                        </div>
                        <div class="col-md-12">
                            <label>Category:</label>
                            <input type="text" name="category" placeholder="categorise your posts" value="{{ $post->category }}" class="validate-required">
                        </div>
                        <div class="col-md-12">
                            <label>Content:</label>
                            <textarea name="content" placeholder="Content" class="validate-required" rows="4">{{ $post->content }}</textarea>
                        </div>
                        <div class="col-md-12">
                            <span> Enable Comments</span>
                            <div class="input-checkbox">
                                <input id="checkbox" type="checkbox" name="enable_comments" value="1" @if($post->enable_comments == 1) checked @endif/>
                                <label for="checkbox"></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn--primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection
