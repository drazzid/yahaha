<!DOCTYPE html>
<html lang="en">
   <!-- Header -->
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <script src="https://cdn.tailwindcss.com"></script>
      <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css" rel="stylesheet" />
      <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
      <script src="src/js/index.js"></script>
      <style>
         /* Menetapkan posisi fixed untuk preloader agar selalu di atas layar 
         #preloader {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: black;
         z-index: 9999; /* Agar tetap di depan konten lain */
         /* Preloader gif centering/
         #preloader img {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         }
         */
      </style>
      <title>YAMALUBE OLI ASLI DARI YAMAHA</title>
      <!-- Header -->
      <nav class="bg-black dark:bg-gray-900 fixed w-full z-20 top-0 start-0">
         <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-6 md:justify-between">
            <!-- Logo -->
            <a href="#" class="flex items-center mx-auto md:mx-0 space-x-3 rtl:space-x-reverse">
            <img src="https://www.yamalubepromo.com/static/media/logo.260e7d11.svg" class="h-14" alt="Yamalube Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
            <!-- Button -->
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
               <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-bold rounded-lg text-sm px-5 py-4 text-center dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hidden w-full md:flex md:w-auto md:order-1">Masuk / Daftar</button>
            </div>
            <!-- Navbar -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
               <ul class="flex flex-col p-4 md:p-0 mt-4 font-bold md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-black dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                  <li>
                     <a href="index.php" class="block py-2 px-3 text-lg text-white  md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">HOME</a>
                  </li>
                  <li>
                     <a href="shop.php" class="block py-2 px-3 text-lg text-white bg-red rounded md:bg-transparent md:text-red-700 md:p-0 md:dark:text-red-500">OUR PRODUCT</a>
                  </li>
                  <li>
                     <a href="tos.php" class="block py-2 px-3 text-lg text-white  md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        aria-current="page">TERMS & CONDITION</a>
                  </li>
                  <li>
                     <a href="faq.php" class="block py-2 px-3 text-lg text-white  md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
   </head>
   <body class="bg-black">
      <!-- Tambahkan margin-top agar konten utama tidak berdempetan dengan header -->
      <div>
         <!-- Background Image Section -->
         <div class="relative w-full h-[320px] md:h-[700px]">
            <div class="absolute inset-0 bg-cover" style="background-image: url('https://www.yamalubepromo.com/assets/images/banner_t&c.jpeg');">
            </div>
         </div>
      </div>
      <div>
         <div class="bg-black text-white font-sans px-4 py-6 md:px-12 max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row lg:items-start lg:gap-8">
               <!-- Kontainer Konten -->
               <main class="container mx-auto px-4 py-4">
                  <div class="p-6">
                     <!-- Kategori Produk -->
                     <div class="space-y-8">
                        <!-- Kategori 1 -->
                        <div>
                           <div class="flex items-center">
                              <!-- Kotak Matic Oil -->
                              <div class="bg-[#cab28b] h-16 w-64 flex shadow-lg items-center px-4 mb-6">
                                 <h2 class="text-3xl font-bold text-black">MATIC OIL</h2>
                              </div>
                              <!-- Kubus -->
                              <div class="border-b-[64px] border-b-[#cab28b] border-r-[64px] border-r-transparent mb-6 h-16 w-16"></div>
                           </div>
                           <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                              <!-- Item 1 -->
                              <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center">
                                 <a href="https://www.yamaha-motor.co.id/part-accessories/yamalube/power-matic-motor-oil/">
                                 <img class="object-contain h-64 w-full" src="asset/botol/botol2.png" alt="Produk 1">
                                 </a>
                                 <h3 class="text-sm md:text-lg font-bold text-black text-center mt-4">
                                    POWER MATIC MOTOR OIL
                                 </h3>
                              </div>
                              <!-- Item 2 -->
                              <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center">
                                 <a href="https://www.yamaha-motor.co.id/part-accessories/yamalube/matic-motor-oil/">
                                 <img class="object-contain h-64 w-full" src="asset/botol/botol1.png" alt="Produk 2">
                                 </a>
                                 <h3 class="text-sm md:text-lg font-bold text-black text-center mt-4">
                                    MATIC MOTOR OIL
                                 </h3>
                              </div>
                              <!-- Item 3 -->
                              <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center">
                                 <a href="https://www.yamaha-motor.co.id/part-accessories/yamalube/super-matic-oil/">
                                 <img class="object-contain h-64 w-full" src="asset/botol/botol3.png" alt="Produk 3">
                                 </a>
                                 <h3 class="text-sm md:text-lg font-bold text-black text-center mt-4">
                                    SUPER MATIC OIL
                                 </h3>
                              </div>
                           </div>
                        </div>
                        <!-- Kategori 2 -->
                        <div>
                           <div class="flex items-center">
                              <!-- Kotak Sport Oil -->
                              <div class="bg-[#cab28b] h-16 w-64 flex shadow-lg items-center px-4 mb-6">
                                 <h2 class="text-3xl font-bold text-black">SPORT OIL</h2>
                              </div>
                              <!-- Kubus -->
                              <div class="border-b-[64px] border-b-[#cab28b] border-r-[64px] border-r-transparent mb-6 h-16 w-16"></div>
                           </div>
                           <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                              <!-- Item 1 -->
                              <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center">
                                 <a href="https://www.yamaha-motor.co.id/part-accessories/yamalube/2t-motor-oil/">
                                 <img class="object-contain h-64 w-full" src="asset/botol/2t.png" alt="Produk 1">
                                 </a>
                                 <h3 class="text-sm md:text-lg font-bold text-black text-center mt-4">
                                    2T MOTOR OIL
                                 </h3>
                              </div>
                              <!-- Item 2 -->
                              <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center">
                                 <a href="https://www.yamaha-motor.co.id/part-accessories/yamalube/sport-motor-oil/">
                                 <img class="object-contain h-64 w-full" src="asset/botol/sport 4t.png" alt="Produk 2">
                                 </a>
                                 <h3 class="text-sm md:text-lg font-bold text-black text-center mt-4">
                                    SPORT MOTOR OIL
                                 </h3>
                              </div>
                              <!-- Item 3 -->
                              <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center">
                                 <a href="https://www.yamaha-motor.co.id/part-accessories/yamalube/super-sport-oil/">
                                 <img class="object-contain h-64 w-full" src="asset/botol/supersport.png" alt="Produk 3">
                                 </a>
                                 <h3 class="text-sm md:text-lg font-bold text-black text-center mt-4">
                                    SUPER SPORT OIL
                                 </h3>
                              </div>
                              <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center">
                                 <a href="https://www.yamaha-motor.co.id/part-accessories/yamalube/rs4gp/">
                                 <img class="object-contain h-64 w-full" src="asset/botol/botol4.png" alt="Produk 4">
                                 </a>
                                 <h3 class="text-sm md:text-lg font-bold text-black text-center mt-4">
                                    RS4GP
                                 </h3>
                              </div>
                           </div>
                        </div>
                        <!-- Kategori 3 -->
                        <div>
                           <div class="flex items-center">
                              <!-- Kotak Moped Oil -->
                              <div class="bg-[#cab28b] h-16 w-64 flex shadow-lg items-center px-4 mb-6">
                                 <h2 class="text-3xl font-bold text-black">MOPED OIL</h2>
                              </div>
                              <!-- Kubus -->
                              <div class="border-b-[64px] border-b-[#cab28b] border-r-[64px] border-r-transparent mb-6 h-16 w-16"></div>
                           </div>
                           <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                              <!-- Item 1 -->
                              <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center">
                                 <a href="https://www.yamaha-motor.co.id/part-accessories/yamalube/silver-motor-oil/">
                                 <img class="object-contain h-64 w-full" src="asset/botol/silver.png" alt="Produk 1">
                                 </a>
                                 <h3 class="text-sm md:text-lg font-bold text-black text-center mt-4">
                                    SILVER MOTOR OIL
                                 </h3>
                              </div>
                              <!-- Item 2 -->
                              <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center">
                                 <a href="https://www.yamaha-motor.co.id/part-accessories/yamalube/gold-motor-oil/">
                                 <img class="object-contain h-64 w-full" src="asset/botol/super gold.png" alt="Produk 2">
                                 </a>
                                 <h3 class="text-sm md:text-lg font-bold text-black text-center mt-4">
                                    GOLD MOTOR OIL
                                 </h3>
                              </div>
                              <!-- Item 3 -->
                              <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center">
                                 <a href="https://www.yamaha-motor.co.id/part-accessories/yamalube/yamalube-xp-50/">
                                 <img class="object-contain h-64 w-full" src="asset/botol/botolyp.PNG" alt="Produk 3">
                                 </a>
                                 <h3 class="text-sm md:text-lg font-bold text-black text-center mt-4">
                                    YAMALUBE XP 50
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </main>
            </div>
         </div>
      </div>
      </div>
      </div>
      </div>
      </div>
   </body>
   <!-- Preloader 
      <div id="preloader">
          <img class="h-64" src="asset/loading.gif" alt="Loading..."> 
      </div> -->
   <div role="status" class="w-full bg-black">
      <div class="justify-center w-full">
      </div>
      <div class="w-full bg-black">
      </div>
      <span class="sr-only">Loading...</span>
   </div>
   <div role="status" class="space-y-8 mt-5 md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center">
      <div class="w-full bg-black">
         <div class="mb-6 md:mb-0">
            <a href="#" class="flex items-center">
            <img src="https://www.yamalubepromo.com/assets/images/pattern3.png" class="w-full" alt="FlowBite Logo" />
            </a>
         </div>
      </div>
      <span class="sr-only">Loading...</span>
   </div>
   <!--- Navigator Mobile Menu  -->
   <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-[#e11e25] border-t border-[#e11e25] md:hidden">
      <div class="grid h-full max-w-lg grid-cols-5 mx-auto font-medium">
         <a href="index.php" class="inline-flex flex-col items-center justify-center px-5 border-x border-[#e11e25] hover:bg-[#cab28b] group">
            <!-- Ganti ikon SVG dengan URL gambar -->
            <img src="asset/svg/icon_home_new.svg" alt="Home Icon" class="w-5 h-5 mb-2">
            <span class="text-m text-white group-hover:text-gray-200">Home</span>
         </a>
         <a href="shop.php" class="inline-flex flex-col items-center justify-center px-5 border-x border-[#e11e25] bg-[#cab28b] group">
         <img src="asset/svg/Icon Products.svg" alt="Search Icon" class="w-5 h-5 mb-2 filter invert sepia saturate-500 hue-rotate-180">
         <span class="text-m text-black">Product</span>
         </a>
         <a href="tos.php" class="inline-flex flex-col items-center justify-center px-5 border-x border-[#e11e25] hover:bg-[#cab28b] group">
         <img src="asset/svg/Icon T&C.svg" alt="Notification Icon" class="w-5 h-5 mb-2">
         <span class="text-m text-white group-hover:text-gray-200">T&C</span>
         </a>
         <a href="faq.php" class="inline-flex flex-col items-center justify-center px-5 border-x border-[#e11e25] hover:bg-[#cab28b] group">
         <img src="asset/svg/Icon FAQ.svg" alt="Wallet Icon" class="w-5 h-5 mb-2">
         <span class="text-m text-white group-hover:text-gray-200 uppercase">F&Q</span>
         </a>
         <a href="#" class="inline-flex flex-col items-center justify-center px-5 border-x border-[#e11e25] hover:bg-[#cab28b] group">
         <img src="asset/svg/Icon Daftar_Masuk.svg" alt="Settings Icon" class="w-5 h-5 mb-2">
         <span class="text-m text-white group-hover:text-gray-200">Daftar</span>
         </a>
      </div>
   </div>
   <!--Akhir Navigator -->
   <script>
      window.onload = () => {
            // Setelah halaman selesai dimuat, tunggu 7 detik untuk menyembunyikan preloader
            setTimeout(() => {
                const preloader = document.getElementById('preloader');
                preloader.style.display = 'none'; // Menghilangkan preloader setelah 7 detik
            }, 4000); // Delay 7 detik (7000ms)
        }
   </script>
   </body>
   <!--Footer -->
   <footer class="bg-black dark:bg-gray-900">
      <div class="mx-auto w-full max-w-screen-xl p-6 lg:py-8">
         <!-- Main Grid -->
         <div class="grid gap-8 md:grid-cols-4">
            <!-- Logo Section -->
            <div class="flex justify-center items-center">
               <a href="#" class="flex">
               <img src="https://www.yamalubepromo.com/static/media/logo.260e7d11.svg" class="h-16" alt="Yamalube Logo" />
               </a>
            </div>
            <!-- Download Section -->
            <div>
               <h2 class="mb-3 text-sm sm:text-base lg:text-base font-bold uppercase text-white">
                  Download My Yamaha
               </h2>
               <div class="flex flex-row items-center mb-4">
                  <a href="#m" target="_blank" class="flex flex-row items-center">
                  <img alt="Yamaha logo" class="w-full max-w-[320px] sm:max-w-[320px] lg:max-w-[400px]" src="https://www.yamalubepromo.com/assets/images/logo_app_yamaha_resize.png" />
                  </a>
               </div>
               <p class="mb-2 text-xs sm:text-base lg:text-base font-bold text-white">
                  IZIN UNDIAN GRATIS BERHADIAH (UGB):
               </p>
               <p class="mb-6 whitespace-nowrap text-lg sm:text-sm lg:text-lg text-white">
                  NOMOR: 284/5.5/PI.02/03/2024
               </p>
            </div>
            <!-- Contact Section -->
            <div>
               <h2 class="mb-6 text-2xl sm:text-2xl lg:text-3xl font-normal font-segoe text-white">Contact Us</h2>
               <ul class="space-y-2 text-xs sm:text-sm lg:text-base text-white">
                  <li class="underline underline-offset-4">YAMAHA INDONESIA MOTOR MANUFACTURING</li>
                  <li>JL. DR KRT RADJIMAN WIDYODININGRAT</li>
                  <li>CAKUNG JAKARTA TIMUR 13920 INDONESIA</li>
                  <li class="flex flex-row items-center space-y-2">
                     <!-- Ikon Telepon -->
                     <img src="asset/svg/icon_phone_new.svg" alt="Phone Icon" class="w-5 h-5">
                     <a href="tel:08111080090" class="hover:underline">08111080090</a>
                  </li>
                  <li class="flex flex-row items-center space-x-2">
                     <!-- Ikon Email -->
                     <img src="asset/svg/icon email.svg" alt="Email Icon" class="w-5 h-5">
                     <a href="mailto:contact_center@yamaha-motor.co.id" class="hover:underline">contact_center@yamaha-motor.co.id</a>
                  </li>
               </ul>
            </div>
            <!-- Quick Links Section -->
            <div>
               <h2 class="mb-6 text-3xl sm:text-2xl lg:text-3xl font-normal font-segoe text-white">Quick Links</h2>
               <ul class="space-y-2 text-xs sm:text-sm lg:text-base text-white">
                  <li><a href="#" class="hover:underline">Home</a></li>
                  <li><a href="#" class="hover:underline">Our Products</a></li>
                  <li><a href="#" class="hover:underline">Terms & Condition</a></li>
                  <li><a href="#" class="hover:underline">FAQ</a></li>
               </ul>
            </div>
         </div>
         <!-- Separator -->
         <hr class="my-8 border-gray-700" />
         <!-- Footer Bottom Section -->
         <div class="flex-grow bg-[#d1b38b] text-black py-2">
            <p class="text-xs sm:text-sm lg:text-base">Copyrights © 2024 All Rights Reserved by Yamaha Motor Indonesia</p>
         </div>
      </div>
   </footer>
</html>
