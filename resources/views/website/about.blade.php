@extends('website.app')

@section('title', 'About')

@section('content')
    <!-- Hero Section -->
    <section class="container mx-auto flex justify-between items-center py-12">
        <div class="w-[48%] flex flex-col space-y-6">
            <!-- Title -->
            <h1 class="font-semibold text-4xl text-primary">
                About Tick It
            </h1>

            <!-- Description -->
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda suscipit, delectus ab 
                accusamus ad consequatur, perferendis dolor, quasi quis commodi temporibus hic. Aliquam, tempora.
                Pulvinar elementum integer enim neque. Id volutpat lacus laoreet non. Blandit massa enim nec dui. 
                Et malesuada fames ac turpis egestas integer eget. Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Illum amet cupiditate officiis!
            </p>
        </div>
        <div class="w-[48%] flex justify-end">
            <img src="{{ asset('assets/images/about/about.png') }}" alt="About" class="w-[75%] rounded-lg shadow-sm">
        </div>
    </section>

    <!-- Mission Section -->
    <section class="bg-primary py-12">
        <div class="container mx-auto flex flex-col space-y-6">
            <h1 class="font-semibold text-4xl text-secondary">
                Our Mission
            </h1>
    
            <p class="text-white">
                Fusce congue fermentum leo eu vestibulum. Morbi rhoncus scelerisque ex quis mattis.
                Praesent vitae arcu laoreet, vulputate libero eu, blandit turpis. Donec sed aliquet sem.
                Nullam lacinia sit amet leo feugiat elementum. Proin vitae sapien id velit sollicitudin
                hendrerit sit amet ut magna. Aliquam erat volutpat. Etiam auctor quis lacus fermentum
                vehicula. Mauris nibh justo, eleifend at viverra eu, suscipit ac nisi. Donec viverra
                venenatis quam tempus ornare.
            </p>
    
            <p class="text-white">
                Maecenas a accumsan elit, nec mattis odio. Proin eu leo sit amet purus lobortis rutrum ut
                non elit. Sed ac sem egestas, sodales justo sit amet, condimentum ligula. Morbi finibus
                iaculis dolor in vestibulum. Vivamus accumsan erat non metus molestie, sed fringilla tellus
                cursus. Morbi eu lectus lacinia felis tempus varius. Aenean vitae ornare enim, ut pharetra
                quam. Morbi feugiat suscipit dictum. Suspendisse vitae hendrerit turpis. Donec a pretium
                ipsum. Donec et ex et magna dignissim pharetra vel non lectus.            
            </p>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="bg-secondary py-12">
        <div class="container mx-auto flex flex-col space-y-6">
            <h1 class="font-semibold text-4xl text-primary">
                Our Vision
            </h1>
    
            <p class="text-dark">
                Donec imperdiet ex eget turpis sodales pulvinar. Nulla id volutpat purus, ut vulputate
                ligula. Praesent condimentum dignissim metus, a condimentum velit. Phasellus at mauris
                ac urna iaculis porttitor. Proin rhoncus sapien a cursus pharetra. Nulla tincidunt tortor
                massa, eu volutpat enim tincidunt sed. Morbi quis elit ultricies, blandit odio a, efficitur
                ligula. Fusce in vulputate velit.
            </p>
    
            <p class="text-dark">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales sem magna, et
                malesuada leo pulvinar vitae. Donec imperdiet ex eget turpis sodales pulvinar. Nulla id
                volutpat purus, ut vulputate ligula. Praesent condimentum dignissim metus, a condimentum
                velit. Phasellus at mauris ac urna iaculis porttitor. Duis ut lacus et augue commodo
                malesuada. Pellentesque quis nunc quis massa efficitur pellentesque nec at ligula.
                Pellentesque rhoncus lorem a dolor feugiat viverra. Mauris volutpat maximus metus sit
                amet facilisis.      
            </p>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="container mx-auto flex flex-col space-y-6 py-12">
        <!-- Title -->
        <div>
            <h1 class="font-semibold text-4xl text-dark">
                Our Partners
            </h1>
        </div>

        <!-- Partners -->
        <div class="flex justify-between items-center">
            <img src="{{ asset('assets/images/about/partners/adobe.png') }}" alt="Adobe" class="opacity-50">

            <img src="{{ asset('assets/images/about/partners/amazon.png') }}" alt="Amazon" class="opacity-50">

            <img src="{{ asset('assets/images/about/partners/disney.png') }}" alt="Disney" class="opacity-50">

            <img src="{{ asset('assets/images/about/partners/microsoft.png') }}" alt="Microsoft" class="opacity-50">

            <img src="{{ asset('assets/images/about/partners/netflix.png') }}" alt="Netflix" class="opacity-50">

            <img src="{{ asset('assets/images/about/partners/salesforce.png') }}" alt="Salesforce" class="opacity-50">
        </div>
    </section>

    <!-- Newsletter -->
    @include('website.layout.newsletter')
@endsection