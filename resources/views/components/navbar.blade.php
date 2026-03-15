<nav class="sticky top-0 bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6">
        <div class="relative flex items-center h-16">

            <!-- MOBILE MENU BUTTON -->
            <div class="absolute left-0 flex items-center lg:hidden">
                <button type="button" command="--toggle" commandfor="mobile-menu" class="p-2 text-gray-600 hover:text-amber-600 text-2xl">
                    <i class="bi bi-list"></i>
                </button>
            </div>

            <!-- LEFT NAV LINKS (DESKTOP) -->
            <div class="hidden lg:flex space-x-6">
                <a href="#" class="text-black hover:text-amber-600 hover:underline font-medium">SHOP</a>
                <a href="#" class="text-black hover:text-amber-600 hover:underline font-medium">ABOUT US</a>
                <a href="#" class="text-black hover:text-amber-600 hover:underline font-medium">FAQS</a>
            </div>

            <!-- CENTER LOGO -->
            <div class="absolute left-1/2 transform -translate-x-1/2">
                <a href="/">
                    <img src="{{ asset('images/logo/shop-logo.png') }}" class="h-10 w-auto">
                </a>
            </div>

            <!-- RIGHT SIDE -->
            <div class="ml-auto flex items-center space-x-4">
                <!-- PROFILE (ALL SCREENS) -->
                <a href="/profile" class="flex items-center">
                    <img src="{{ asset('images/profile-placeholder.jpg') }}" class="h-8 w-8 rounded-full hover:ring-2 hover:ring-amber-500 transition">
                </a>
                <!-- CART (DESKTOP TEXT) -->
                <a href="#" class="hidden lg:block text-black hover:text-amber-600 hover:underline text-sm font-medium">MY CART</a>
                <!-- CART ICON (MOBILE) -->
                <a href="#" class="lg:hidden text-gray-700 hover:text-amber-600 text-xl">
                    <i class="bi bi-cart"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <el-disclosure id="mobile-menu" hidden class="lg:hidden border-t border-gray-200">
        <div class="px-6 py-3 space-y-2">
            <a href="#" class="block text-gray-700 hover:text-amber-600 font-medium">SHOP</a>
            <a href="#" class="block text-gray-700 hover:text-amber-600 font-medium">ABOUT US</a>
            <a href="#" class="block text-gray-700 hover:text-amber-600 font-medium">FAQS</a>
        </div>
    </el-disclosure>
</nav>