@extends('website.app')

@section('title', 'Features')

@section('content')
    <!-- Hero Section -->
    <section class="container mx-auto min-h-[calc(100dvh-80px)] flex justify-between items-center">
        <!-- Left -->
        <div class="w-1/2">
            <!-- Title -->
            <h1 class="text-7xl">
                Organize 
                <span class="font-semibold text-primary">teams</span> 
                assign
                <span class="font-semibold text-secondary">users</span>
                and complete 
                <span class="font-semibold text-success">tasks</span>.
            </h1>
        </div>

        <!-- Right -->
        <div class="w-1/2 flex justify-end items-center">
            <img src="{{ asset('assets/images/features/hero.png') }}" alt="Features">
        </div>
    </section>

    <!-- Features Section -->
    <section class="w-full border-t border-gray-300 py-12">
        <div class="container mx-auto flex flex-col space-y-8">
            <!-- Title -->
            <div>
                <h1 class="font-semibold text-4xl text-dark">
                    Features
                </h1>
            </div>

            <!-- Description -->
            <div>
                <p>
                    Quidem quasi sit iusto, unde sequi perferendis optio facilis magni ipsum accusantium,
                    temporibus dolore sequi perferendis optio facilis magni ipsum accusantium, velit rerum 
                    reiciendis aliquid incidunt, quas molestias? Aliquid vitae architecto ad mollitia delectus 
                    aperiam voluptate, maxime voluptatibus blanditiis, officia nulla praesentium velit! Perspiciatis 
                    voluptatem sit velit, explicabo necessitatibus culpa, vel laudantium nesciunt sunt sequi nulla 
                    eaque cumque ea? Odio officiis, tenetur, iste blanditiis numquam nisi nam inventore iure 
                    consequuntur, cumque aspernatur sint veniam voluptatum odit nemo?
                </p>
            </div>

            <!-- Features -->
            <div class="flex justify-between space-x-12">
                <!-- Teams -->
                <div class="w-1/3 flex flex-col space-y-4">
                    <!-- Image -->
                    <div>
                        <img src="{{ asset('assets/images/features/teams.jpeg') }}" alt="Teams" class="rounded-lg shadow-sm w-full object-cover">
                    </div>
    
                    <!-- Title -->
                    <div>
                        <h2 class="font-semibold text-2xl text-primary">
                            Teams
                        </h2>
                    </div>
    
                    <!-- Description -->
                    <div>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit aliquam soluta. 
                            Eligendi ut maiores aliquam illo veniam, voluptatem expedita inventore
                            soluta cupiditate id, ipsam adipisicing inventore necessitatibus?
                        </p>
                    </div>
                </div>
    
                <!-- Users -->
                <div class="w-1/3 flex flex-col space-y-4">
                    <!-- Image -->
                    <div>
                        <img src="{{ asset('assets/images/features/users.jpeg') }}" alt="Users" class="rounded-lg shadow-sm w-full object-cover">
                    </div>
    
                    <!-- Title -->
                    <div>
                        <h2 class="font-semibold text-2xl text-secondary">
                            Users
                        </h2>
                    </div>
    
                    <!-- Description -->
                    <div>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit aliquam soluta. 
                            Eligendi ut maiores aliquam illo veniam, voluptatem expedita inventore
                            soluta cupiditate id, ipsam adipisicing inventore necessitatibus?
                        </p>
                    </div>
                </div>
    
                <!-- Tasks -->
                <div class="w-1/3 flex flex-col space-y-4">
                    <!-- Image -->
                    <div>
                        <img src="{{ asset('assets/images/features/tasks.jpg') }}" alt="Tasks" class="rounded-lg shadow-sm w-full object-cover">
                    </div>
    
                    <!-- Title -->
                    <div>
                        <h2 class="font-semibold text-2xl text-success">
                            Tasks
                        </h2>
                    </div>
    
                    <!-- Description -->
                    <div>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit aliquam soluta. 
                            Eligendi ut maiores aliquam illo veniam, voluptatem expedita inventore
                            soluta cupiditate id, ipsam adipisicing inventore necessitatibus?
                        </p>
                    </div>
                </div>
            </div>

            <!-- Details -->
            <div class="my-2">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque deserunt ipsum, 
                    asperiores sit ipsam doloremque dolores facilis quibusdam quia dolor, eum veritatis 
                    animi corporis provident ullam impedit. Aspernatur, eum, distinctio aut consequuntur 
                    alias illo pariatur quas laborum maiores, eligendi voluptas in quia dicta voluptatibus.
                    Quisquam, cumque, voluptatibus, eveniet doloremque doloribus cum id, accusantium.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem quasi sit iusto, unde 
                    temporibus dolore sequi perferendis optio facilis magni ipsum accusantium, velit rerum 
                    reiciendis aliquid incidunt, quas molestias?
                </p>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    @include('website.layout.newsletter')
@endsection