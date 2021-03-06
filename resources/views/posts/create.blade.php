@extends('layouts.admin')

@section('content')
    {{--<posts-create></posts-create>--}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <h2> Adding a new Post</h2></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class=" alert alert-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <div class="boxed bg--secondary boxed--lg boxed--border">
                        <h4>Quick Tips</h4>
                        <p>
                            Common inputs such as text, email, telephone, password, address etc. Add the class
                            <strong>.validate-required</strong> if the input is required in the form.
                        </p>
                        <p>
                            Alternatively use the
                            <strong>&lt;label&gt;</strong> tag before an input for greater user assistance.
                        </p>

                    </div>
                </div>

                <div class="col-md-6">
                    <form method="post" action="{{ route('post.store') }}" class="row">
                        @csrf

                        <div class="col-md-12">
                            <label>Title:</label>
                            <input type="text" name="title" placeholder="eg: caring for your flowers" value="" class="validate-required">
                        </div>
                        <div class="col-md-12">
                            <label>Title:</label>
                            <input type="text" name="category" placeholder="categorise your posts" class="validate-required">
                        </div>
                        <div class="col-md-12">
                            <label>Content:</label>
                            <textarea name="content" placeholder="Content" class="validate-required" rows="4"></textarea>
                        </div>
                        <div class="col-md-12">
                            <span class="col-md-6">Enable Comments</span>
                            <div class="input-checkbox">
                                <input id="checkbox" type="checkbox" value="1" name="enable_comments" />
                                <label for="checkbox"></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn--primary">Send Form</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection
