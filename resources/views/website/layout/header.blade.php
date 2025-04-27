<!-- Header -->
<header class="shadow-sm py-6">
    <!-- Nav -->
    <nav class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
            <img src="{{ asset('assets/icons/favicon.png') }}" alt="Tick It Logo">
            <span class="text-2xl text-primary">Tick It</span>
        </a>

        <!-- Menu -->
        <ul class="flex items-center space-x-12 text-dark text-lg">
            <li>
                <a href="{{ route('features') }}" class="transition duration-200 hover:text-primary">
                    Features
                </a>
            </li>
            <li>
                <a href="{{ route('helpCenter') }}" class="transition duration-200 hover:text-primary">
                    Help Center
                </a>
            </li>
            <li>
                <a href="{{ route('blog.index') }}" class="transition duration-200 hover:text-primary">
                    Blog
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="transition duration-200 hover:text-primary">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="transition duration-200 hover:text-primary">
                    Contact
                </a>
            </li>
            <li>
                <a href="{{ route('auth.signIn') }}" class="px-4 py-2 bg-primary rounded-md text-white transition duration-200 hover:bg-secondary hover:text-dark">
                    Get Started
                </a>
            </li>
        </ul>
    </nav>
</header>