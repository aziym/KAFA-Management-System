<!-- navigation.blade.php -->

<nav class=" sticky top-0 bg-green-500 shadow-lg">  
    <div class="sticky top-0">
    <!-- Logo (centered) -->
    <div class="flex items-center justify-center bg-white w-36 rounded-full h-36 ">
        <a class="text-gray-800 text-xl font-bold" href="#">
            <img src="download.png" alt="Your Website Logo" class="h-17 w-16">
        </a>
    </div>

    <!-- Links -->
    <ul class="p-4">
        <li class="mb-2">
            <!-- Dark green button around Dashboard link -->
            <div class="bg-green-900 rounded-md p-2">
                <a class="text-white" href="{{ route('dashboard') }}">Dashboard</a>
            </div>
        </li>
        
        <li class="mb-2">
            <!-- Dark green button around Profile link -->
            <div class="bg-green-900 rounded-md p-2">
                <a class="text-white" href="{{ route('profile.edit') }}">Profile</a>
            </div>
        </li>
        <li class="mb-2">
            <!-- Dark green button around Bulletin link -->
            <div class="bg-green-900 rounded-md p-2">
                <a class="text-white" href="#">Bulletin</a>
            </div>
        </li>
        <li class="mb-2">
            <!-- Dark green button around Settings link -->
            <div class="bg-green-900 rounded-md p-2">
                <a class="text-white" href="#">Settings</a>
            </div>
        </li>
        <!-- Logout button -->
        @auth
        <li class="mb-2">
            <div class="bg-green-900 rounded-md p-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-white">Logout</button>
                </form>
            </div>
        </li>
        @endauth
    </ul>
    </div>
</nav>
