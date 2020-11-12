@include('admin.partials.header')
@include('admin.partials.nav')

<div class="md:ml-64 p-4">
    <div class="mx-auto max-w-3xl">
        @yield('content')
    </div>
</div>

@include('admin.partials.footer')
