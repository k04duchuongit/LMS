@include('shared.partials.header')


<div class="wrapper">
    <!-- Sidebar -->
    @include('shared.partials.sidebar')
    <!-- Main Content -->
    @yield('content')
</div>

@include('shared.partials.footer')
