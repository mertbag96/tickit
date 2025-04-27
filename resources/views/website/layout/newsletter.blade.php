<!-- Newsletter -->
<section class="bg-primary py-6">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Left -->
        <div class="w-1/2 flex flex-col space-y-2">
            <!-- Title -->
            <h2 class="font-semibold text-4xl text-white">
                Subscribe to our 
                <span class="text-secondary">
                    newsletter
                </span>
            </h2>

            <!-- Description -->
            <p class="text-lg text-white">
                Stay updated with the latest news and updates from Tick It.
            </p>
        </div>

        <!-- Right -->
        <div class="w-1/2 flex justify-end items-center">
            <!-- Form -->
            <form action="#" method="POST" class="w-[56%] flex flex-col space-y-2">
                <!-- Top -->
                <div class="flex items-center space-x-2">
                    <input type="email" name="email" placeholder="Please enter your email" class="px-4 py-2 rounded-md w-full bg-white outline-none" required>
                    <button type="submit" class="bg-secondary rounded-md px-4 py-2 text-white cursor-pointer transition duration-200 hover:bg-amber-500">
                        Subscribe
                    </button>
                </div>

                <!-- Bottom -->
                <div class="flex items-center space-x-2">
                    <input type="checkbox" name="newsletter" style="accent-color: white;" required>
                    <p class="text-white">
                        I read and accept the 
                        <a href="#" target="_blank" class="text-secondary underline">
                            terms of use
                        </a> 
                        of Tick It.
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>