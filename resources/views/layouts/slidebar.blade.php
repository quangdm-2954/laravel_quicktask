<div class="sidebar" data-color="purple" data-image="{{ asset('/components/template_package/assets/img/sidebar-5.jpg') }}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
               Laravel QuickTask
            </a>
        </div>

        <ul class="nav">
            <li class="@yield('home')">
                <a href="/">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                    <p>{{__('Dashboard')}}</p>
                </a>
            </li>
            <li class="@yield('users')">
                <a href="{{route('users.index')}}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <p>{{__('User')}} </p>
                </a>
            </li>
            <li class="@yield('posts')">
                <a href="{{route('posts.index')}}">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <p>{{__('Posts List')}}</p>
                </a>
            </li>
           
        </ul>
    </div>
</div>
