<nav class="navbar" role="navigation" aria-label="main navigation" style="font-family: 'Cuprum', sans-serif;">
    <div class="navbar-brand">
        <a class="navbar-brand is-paddingless" href="{{ route('home') }}">
            <img src="{{ asset('images/logo5.png') }}" alt="Hackean logo" width="auto">
        </a>

    @if (Request::segment(1) == 'manage')
    <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
        <span class="icon"><i class="fa fa-arrow-circle-o-right"></i></span>
    </a>
    @endif

    <a role="button" class="navbar-burger" aria-label="menu">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
    </a>
    </div>
    @guest
    <div class="navbar-menu">
        <div class="navbar-start">
            <a href="/home" class="navbar-item is-tab is-hidden-mobile m-l-10">Home</a>
            <a href="/blog" class="navbar-item is-tab is-hidden-mobile m-l-10">Blog</a>
            <a href="/about" class="navbar-item is-tab is-hidden-mobile m-l-10">About Us</a>
            <a href="/contact" class="navbar-item is-tab is-hidden-mobile m-l-10">Contact Us</a>
        </div>

        <div class="navbar-end">
            <a href="https://twitter.com/Hackean2" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-twitter"></i></span></a>
            <a href="https://www.facebook.com/HackeanWeb" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-facebook"></i></span></a>
            <a href="https://www.instagram.com/hackean.web" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-instagram"></i></span></a>
            <a href="https://www.reddit.com/r/Hackean/" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-reddit"></i></span></a>
            <a href="https://www.linkedin.com/in/fabian-michael-276246143/" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-linkedin"></i></span></a>
            <a href="https://github.com/Hackean7" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-github"></i></span></a>
            <a href="https://join.slack.com/t/hackean/shared_invite/enQtNTI5NDQxNzU4MTE4LWVhYmMyZjkwMzk0MjY5Yjk0OTc0ODI3ZjA0YjQ5NDMyYzUyNmVmYzcwYjYzMzg0ZDM0NzNiYTdjNGFhZGQ3MTc" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-slack"></i></span></a>
            <a href="https://stackoverflow.com/" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-stack-overflow"></i></span></a>
        </div>
    </div>
    @else
        <div class="navbar-menu">
        <div class="navbar-start">
            <a href="/home" class="navbar-item is-tab is-hidden-mobile m-l-10">Home</a>
            <a href="/blog" class="navbar-item is-tab is-hidden-mobile m-l-10">Blog</a>
            <a href="/about" class="navbar-item is-tab is-hidden-mobile m-l-10">About Us</a>
            <a href="/contact" class="navbar-item is-tab is-hidden-mobile m-l-10">Contact Us</a>
            <a href="/account" class="navbar-item is-tab is-hidden-mobile m-l-10">My Account</a>
        </div>

        <div class="navbar-end">
            <a href="https://twitter.com/Hackean2" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-twitter"></i></span></a>
            <a href="https://www.facebook.com/HackeanWeb" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-facebook"></i></span></a>
            <a href="https://www.instagram.com/hackean.web" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-instagram"></i></span></a>
            <a href="https://www.reddit.com/r/Hackean/" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-reddit"></i></span></a>
            <a href="https://www.linkedin.com/in/fabian-michael-276246143/" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-linkedin"></i></span></a>
            <a href="https://github.com/Hackean7" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-github"></i></span></a>
            <a href="https://join.slack.com/t/hackean/shared_invite/enQtNTI5NDQxNzU4MTE4LWVhYmMyZjkwMzk0MjY5Yjk0OTc0ODI3ZjA0YjQ5NDMyYzUyNmVmYzcwYjYzMzg0ZDM0NzNiYTdjNGFhZGQ3MTc" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-slack"></i></span></a>
            <a href="https://stackoverflow.com/" target="_blank" class="navbar-item is-size-7"><span class="icon"><i class="fa fa-stack-overflow"></i></span></a>
        </div>
    </div>
    @endguest
</nav>

@section('scripts')
    <script>
      $('.navbar-item').each(function(e) {
        $(this).click(function(){
          if($('#navbar-burger-id').hasClass('is-active')){
            $('#navbar-burger-id').removeClass('is-active');
            $('#navbar-menu-id').removeClass('is-active');
          }
        });
      });

      $('#navbar-burger-id').click(function () {
        if($('#navbar-burger-id').hasClass('is-active')){
          $('#navbar-burger-id').removeClass('is-active');
          $('#navbar-menu-id').removeClass('is-active');
        }else {
          $('#navbar-burger-id').addClass('is-active');
          $('#navbar-menu-id').addClass('is-active');
        }
      });
    </script>
@endsection

