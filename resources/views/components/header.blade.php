{{-- @php var_dump($one_news_data) @endphp --}}
<header class="masthead" style="background-image: url('/assets/img/main.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>{{ $title ?? 'Welcome to VgBlog' }}</h1>
                    <span class="subheading">{{ $description ?? 'The Best You Have Ever Seen' }}</span>
                </div>
            </div>
        </div>
    </div>
</header>