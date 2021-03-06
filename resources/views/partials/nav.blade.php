<div x-data="{ showNav: false }"" @resize.window=" showNav=window.innerWidth>= 768 ? false : showNav">
    {{-- <nav :class=" {'-translate-x-64': !showNav }" class=" w-64 transform transition-transform duration-200 ease-in-out md:translate-x-0
    bg-gray-800 min-h-screen text-white fixed p-4" id="navigation">
        <div class="font-bold border-b-2 border-gray-200">
            Admin Panel
        </div>
        <div class="flex flex-col mt-2">
            <p class="font-semibold">Posts</p>
            <ul class="list-disc list-inside">
                <li>
                    <a href="{{ route('admin.posts.index') }}" class="hover:text-gray-400 underline">Show</a>
    </li>
    <li>
        <a href="{{ route('admin.posts.create') }}" class="hover:text-gray-400 underline">New</a>
    </li>
    </ul>
</div>
</nav> --}}

<nav :class="{ 'h-12': !showNav, 'h-auto': showNav }"
    class="fixed top-0 left-0 right-0 bg-ekigreen flex items-center md:justify-end text-ekigray z-10">
    <ul :class="{ 'flex': showNav, 'hidden': !showNav }"
        class="h-full bg-ekigreen md:flex flex-col items-center mt-12 md:mt-0 w-full md:w-auto md:flex-row">
        @can('viewAdmin', 'App\Models\User')
        <a href="{{ route('admin.index') }}"
            class="w-full md:w-auto h-full flex items-center justify-center hover:bg-green-400 p-4">Admin</a>
        @endcan
        <a href="{{ route('stamps.index') }}"
            class="w-full md:w-auto h-full flex items-center justify-center hover:bg-green-400 p-4">Stamps</a>
        <a href="{{ route('stamps.my') }}"
            class="w-full md:w-auto h-full flex items-center justify-center hover:bg-green-400 p-4">My Stamps</a>
        <a href="{{ route('posts.index') }}"
            class="w-full md:w-auto h-full flex items-center justify-center hover:bg-green-400 p-4">News</a>
        @auth
        <form action="{{ route('logout') }}" method="post" class="h-full">
            @csrf
            <button type="submit" class="w-full md:w-auto h-full  hover:bg-green-400 px-4">Logout</button>
        </form>
        @else
        <a href="{{route('login')}}"
            class="w-full md:w-auto h-full flex items-center justify-center hover:bg-green-400 p-4">Login</a>
        <a href="{{route('register')}}"
            class="w-full md:w-auto h-full flex items-center justify-center hover:bg-green-400 p-4">Register</a>
        @endauth
    </ul>
</nav>

<div class="hamburger md:hidden top-0 right-0 mt-3 mr-3 fixed z-20" :class="{ 'active': showNav }"
    @click="showNav = !showNav">
    <div></div>
</div>
</div>
