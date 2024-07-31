@include('static.navbar')

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4>Here you can find delecious foods</h4>
                <h2>Asian Restaurant</h2>
                <p>Quisque nec nibh id lacus fringilla eleifend sed sit amet sem. Donec lectus odio, mollis a nisl non, tempor interdum nisl.</p>
                <div class="primary-button">
                    <a href="#" class="scroll-link" data-id="book-table">Order Right Now</a>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="our-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Our blog post</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="{{ $product->image }}" alt="">
                        <div class="date">{{ $product->created_at }}</div>
                        <div class="right-content">
                            <h4>{{ $product->name }}</h4>
                            <span>{{ $product->price }}</span>
                            <p>{{ $product->description }} </p>
                            <p>{{ $product->Category->name }} </p>

                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>



@include('static.footer')
