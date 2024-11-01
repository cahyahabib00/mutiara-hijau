<div class="bg-white/80 text-green-600 sticky top-0 left-0 right-0 z-50 backdrop-blur-md shadow-md">
  <div class="container mx-auto">
      <nav class="flex items-center justify-between px-8 py-4">
          <!-- Logo -->
          <div class="flex">
              <span class="text-xl font-bold text-green-600">Muhid Petai</span>
          </div>

          <!-- Hamburger Menu for Small Screens -->
          <div class="sm:hidden">
              <button id="hamburger-btn" class="text-green-600 focus:outline-none">
                  <!-- Hamburger Icon -->
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                  </svg>
              </button>
          </div>

          <!-- Menu Items (Hidden on small screens) -->
          <div class="hidden sm:flex space-x-8">
              <a href="#" class="hover:text-red-600">Kategori</a>
              <a href="#card-pete" class="hover:text-red-600">Dokumentasi</a>
              <a href="#" class="hover:text-red-600">Jenis Petai</a>
              <a href="#" class="hover:text-red-600">Komoditas Lain</a>
              <a href="#about-me" class="hover:text-red-600">Tentang Kami</a>
          </div>

          <!-- Slide-in Menu for Small Screens -->
          <div id="mobile-menu" class="fixed inset-y-0 right-0 w-64 bg-white transform translate-x-full transition-transform duration-300 sm:hidden z-50">
              <div class="flex flex-col items-start p-6 space-y-4">
                  <!-- Close Button ("X") -->
                  <button id="close-btn" class="self-end text-green-600 focus:outline-none mb-4">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                  </button>
                  <a href="#" class="text-green-600 hover:text-red-600">Kategori</a>
                  <a href="#card-pete" class="text-green-600 hover:text-red-600">Dokumentasi</a>
                  <a href="#" class="text-green-600 hover:text-red-600">Jenis Petai</a>
                  <a href="#" class="text-green-600 hover:text-red-600">Komoditas Lain</a>
                  <a href="#about-me" class="text-green-600 hover:text-red-600">Tentang Kami</a>
              </div>
          </div>
      </nav>
  </div>
</div>

<!-- Content placeholder to prevent content from hiding under fixed navbar -->
<div class="mt-24"></div>

<!-- JavaScript for Toggle Menu -->
<script>
  const mobileMenu = document.getElementById('mobile-menu');
  const hamburgerBtn = document.getElementById('hamburger-btn');
  const closeBtn = document.getElementById('close-btn');

  // Toggle open menu
  hamburgerBtn.addEventListener('click', function () {
      mobileMenu.classList.remove('translate-x-full');
      mobileMenu.classList.add('translate-x-0');
  });

  // Close menu
  closeBtn.addEventListener('click', function () {
      mobileMenu.classList.remove('translate-x-0');
      mobileMenu.classList.add('translate-x-full');
  });
</script>
