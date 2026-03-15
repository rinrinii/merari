<footer class="bg-gray-100 border-t border-gray-200 mt-16">
    <div class="bg-[#C4922C] py-3 text-white flex justify-end px-8 space-x-6">
        <a href="https://shopee.ph/merari.official" class="hover:opacity-80">
            <i class="bi bi-bag-fill"></i>
        </a>

        <a href="https://x.com/MerariOfficial" class="hover:opacity-80">
            <i class="bi bi-twitter-x"></i>
        </a>

        <a href="https://www.tiktok.com/@.merari_official" class="hover:opacity-80">
            <i class="bi bi-tiktok"></i>
        </a>

        <a href="https://www.instagram.com/merari_official" class="hover:opacity-80">
            <i class="bi bi-instagram"></i>
        </a>
    </div>

    <div class="max-w-7xl mx-auto px-8 py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-end">

            <!-- LEFT: BRAND -->
            <div class="mx-5">
                <img src="{{ asset('images/footer/test-image1.png') }}" class="w-60 rounded"
                >

                <h3 class="mt-4 text-lg font-semibold">merari</h3>

                <p class="text-gray-600 text-sm mt-1">
                    crafting memories with handmade accessories.
                </p>
            </div>

            <!-- MIDDLE: LINKS -->
            <div class="mx-5 md:ml-auto md:text-right text-left">
                <h4 class="font-semibold mb-3">Links</h4>

                <ul class="space-y-2 text-gray-600 text-sm">
                    <li>
                        <a href="/" class="hover:text-amber-600">Home</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-amber-600">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('faqs') }}" class="hover:text-amber-600">FAQs</a>
                    </li>
                </ul>
            </div>

            <!-- RIGHT: CONTACT -->
            <div class="mx-5 text-left md:text-right">
                <h4 class="font-semibold mb-3">Contact Us</h4>

                <ul class="space-y-3 text-gray-600 text-sm">

                    <li class="flex items-center gap-2 md:justify-end">
                        <i class="bi bi-buildings"></i>
                        San Pedro, Laguna
                    </li>

                    <li class="flex items-center gap-2 md:justify-end">
                        <i class="bi bi-envelope"></i>
                        merariofficial@gmail.com
                    </li>

                    <li class="flex items-center gap-2 md:justify-end">
                        <i class="bi bi-telephone"></i>
                        +63 **** 4160
                    </li>

                </ul>
            </div>

        </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="bg-gray-200 text-center py-3 text-sm text-gray-600">
        © 2026 Copyright:
        <a href="#" class="hover:underline">merari_official.com</a>
    </div>

</footer>