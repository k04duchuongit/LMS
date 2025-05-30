@include('shared.partials.header')


<div class="wrapper">
    <!-- Sidebar -->
    @include('shared.partials.sidebar-admin')
    {{-- @include('shared.partials.sidebar-lecturer')
    @include('shared.partials.sidebar-student') --}}
    <!-- Main Content -->
    @yield('content')
</div>

@include('shared.partials.footer')
