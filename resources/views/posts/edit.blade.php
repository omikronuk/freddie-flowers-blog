<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> <h2> Editing {{ $post->title }}</h2></div>
        </div>
        <div class="row justify-content-around">
            <div class="col-md-5">
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
                <form class="row" method="POST" action="/posts/ {{ $posts->id }}/ ">
                    <div class="col-md-12">
                        <label>Title:</label>
                        <input type="text" name="title" value="{{ $post->title }}" placeholder="eg: caring for your flowers" class="validate-required">
                    </div>
                    <div class="col-md-12">
                        <label>Message:</label>
                        <textarea name="description"  placeholder="Content" class="validate-required" rows="4"> {{ $post->description }}</textarea>
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
