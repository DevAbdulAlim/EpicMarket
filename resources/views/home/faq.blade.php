<!-- resources/views/components/featured-products.blade.php -->

<section class="bg-background py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-foreground sm:text-4xl font-sans">
                Featured Products
            </h2>
            <p class="mt-4 text-lg leading-6 text-secondary font-sans">
                Discover our handpicked selection of the latest products just for you!
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
            <!-- Product 1 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x300" alt="Product 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-foreground font-serif">
                        Product Name 1
                    </h3>
                    <p class="mt-2 text-sm text-secondary font-sans">
                        This is a brief description of Product 1, highlighting its key features and benefits.
                    </p>
                    <div class="mt-4">
                        <span class="text-xl font-semibold text-foreground">$99.99</span>
                    </div>
                    <a href="#"
                        class="mt-6 inline-block bg-primary hover:bg-accent text-white font-semibold py-2 px-4 rounded-md">
                        View Product
                    </a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x300" alt="Product 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-foreground font-serif">
                        Product Name 2
                    </h3>
                    <p class="mt-2 text-sm text-secondary font-sans">
                        This is a brief description of Product 2, showcasing its unique features and value.
                    </p>
                    <div class="mt-4">
                        <span class="text-xl font-semibold text-foreground">$79.99</span>
                    </div>
                    <a href="#"
                        class="mt-6 inline-block bg-primary hover:bg-accent text-white font-semibold py-2 px-4 rounded-md">
                        View Product
                    </a>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x300" alt="Product 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-foreground font-serif">
                        Product Name 3
                    </h3>
                    <p class="mt-2 text-sm text-secondary font-sans">
                        Explore Product 3, designed to deliver excellent performance and style.
                    </p>
                    <div class="mt-4">
                        <span class="text-xl font-semibold text-foreground">$89.99</span>
                    </div>
                    <a href="#"
                        class="mt-6 inline-block bg-primary hover:bg-accent text-white font-semibold py-2 px-4 rounded-md">
                        View Product
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
