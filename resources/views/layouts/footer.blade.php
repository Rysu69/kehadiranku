
<footer class="bg-gray-800 text-gray-300 py-10">
    <div class="container mx-auto px-6 md:px-12">
        <div class="flex flex-col md:flex-row justify-between">
            <!-- Contact Information -->
            <div class="mb-8 md:mb-0">
                <h4 class="text-lg font-semibold text-white mb-4">Contact Us</h4>
                <p class="text-gray-400">{{ $cmsData->alamat_1}}</p>
                <p class="text-gray-400 pt-0.5">{{ $cmsData->no_telp}}</p>
                <p class="text-gray-400 pt-0,5">{{ $cmsData->no_wa}}</p>
            </div>

            <!-- Quick Links -->
            <div class="mb-8 md:mb-0">
                <h4 class="text-lg font-semibold text-white mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="/#home" class="hover:text-white">Home</a></li>
                    <li><a href="/#video" class="hover:text-white">About Us</a></li>
                    <li><a href="/#biaya" class="hover:text-white">Services</a></li>
                    <li><a href="/#" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-4">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- Bottom section -->
        <div class="border-t border-gray-700 -mb-10 mt-10 text-center">
            <p>&copy; {{ date('Y') }} Kehadiranku. All rights reserved.</p>
        </div>
    </div>
</footer>

