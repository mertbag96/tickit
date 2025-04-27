@extends('website.app')

@section('title', 'Organize your tasks with Tick It')

@section('content')
    <!-- Hero Section -->
    <section class="container mx-auto min-h-[calc(100dvh-80px)] flex justify-between items-center">
        <!-- Left -->
        <div class="w-1/2 flex flex-col space-y-10">
            <!-- Title -->
            <div>
                <h1 class="text-7xl">
                    Stay 
                    <span class="font-semibold text-primary">organized</span> 
                    and manage your 
                    <span class="font-semibold text-secondary">tasks</span>.
                </h1>
            </div>

            <!-- Description -->
            <div>
                <p class="text-2xl">
                    Create tasks, assign tasks to users, organize users with teams.
                </p>
            </div>

            <!-- Get Started -->
            <div>
                <a href="#" class="px-4 py-2 bg-primary rounded-md text-xl text-white transition duration-200 hover:bg-secondary hover:text-dark">
                    Get Started
                </a>
            </div>
        </div>

        <!-- Right -->
        <div class="w-1/2 flex justify-end items-center">
            <img src="{{ asset('assets/images/home/hero.png') }}" alt="Tick It">
        </div>
    </section>
@endsection