<?php
session_start();

require '../../global/template.php';
$template = new Template();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ada Jasa Web</title>
  <link rel="website icon" style="border-radius: 50%" href="icon/icon.png" type="png" />
  <link rel="stylesheet" href="../../dist/output.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>

<body>
   <!-- Navbar -->
<?= $template->navbar() ?>
  <!-- konten -->

  <div class="px-32">
    <div class="my-12">
      <div class="rounded-md border min-w-max p-8 py-12 grid gap-4">
        <h1 class="text-xl font-semibold text-center ">PesanJasa</h1>
        <div class="grid mx-12 gap-4">
          <h2 class="text-lg">Jasa</h2>
          <div class="">
            <div class="w-full border rounded-lg p-4 flex justify-between  items-center bg-primary bg-opacity-5">
              <div class="flex gap-6">
                <img class="rounded-md w-24 h-24" src="../../asset/kategory.png" alt="">
                <div class="">
                  <h2 class="font-semibold text-xl">Pijet Biasa</h2>
                  <h2>Pijet tanpa kretek</h2>
                  <h3>Rp 110.000</h3>
                </div>
              </div>
              <a href="#" class="mr-6">
                <svg class="w-6 h-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
              </a>
            </div>
          </div>
          <div class=" flex justify-between">
            <h2 class="text-base">Waktu </h2>
            <h2 class="text-base">11.00 AM</h2>

          </div>
        </div>

        <div class="grid mx-12 gap-4">
          <h2 class="text-lg">Catatan :</h2>

          <div
            class="w-full p-4 rounded-lg flex justify-between items-center bg-primary bg-opacity-5 text-gray-500">
            Saya sangat menantikan pengalaman pijet yang menyenangkan dan memuaskan.
          </div>


          <div class="flex gap-2 items-center">
            <svg class="w-6 h-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 17 21">
              <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                <path
                  d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
              </g>
            </svg>
            <h3 class=" text-base leading-4 text-primary">
              Condongcatur, Depok, Sleman, Yogyakarta
            </h3>


          </div>
          <input class="w-full p-4  rounded-lg   bg-primary bg-opacity-5"
            placeholder="Rumah tingkat warna cream tembok batu bata, di pagar ada tulisan “Ada kucing Hitam">
          <!-- <h2 class="text-xl text-gray-500">
                        Rumah tingkat warna cream tembok batu bata, di pagar ada tulisan “Ada kucing Hitam”
                     </h2> -->
          </input>
          <div class="w-full p-4 rounded-lg flex justify-between bg-primary bg-opacity-5">
            <h2 class="text-base text-gray-500">
              Total Pesanan
            </h2>
            <h2 class="text-base text-gray-500">
              (1 jasa pada pukul 11.00 AM)
            </h2>
          </div>
          <div class="flex flex-col gap-2">
            <div class="flex justify-between items-center">

              <div class="flex gap-2 items-center">

                <svg class="w-5 h-5 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m7 13 6-6m-5-.5h.01m2.98 7H11m1.007-11.313a2.75 2.75 0 0 0 2.1.87 2.745 2.745 0 0 1 2.837 2.837 2.749 2.749 0 0 0 .87 2.1 2.747 2.747 0 0 1 0 4.014 2.748 2.748 0 0 0-.87 2.1 2.746 2.746 0 0 1-2.837 2.837 2.75 2.75 0 0 0-2.1.87 2.748 2.748 0 0 1-4.014 0 2.75 2.75 0 0 0-2.1-.87 2.744 2.744 0 0 1-2.837-2.837 2.749 2.749 0 0 0-.87-2.1 2.747 2.747 0 0 1 0-4.014 2.75 2.75 0 0 0 .87-2.1 2.745 2.745 0 0 1 2.838-2.837 2.749 2.749 0 0 0 2.1-.87 2.748 2.748 0 0 1 4.013 0Z" />
                </svg>
                <h2 class="text-lg text-primary font-medium">
                  Voucer
                </h2>
              </div>
              <a href="" class="flex gap-2 items-center py-4">
                <h2 class="text-base text-primary ">
                  Diskon 20%
                </h2>
                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 8 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                </svg>
              </a>

            </div>
            <div class="flex justify-between items-center">

              <div class="flex gap-2 items-center">

                <ion-icon name="cash-outline" class="w-5 h-5 text-primary"></ion-icon>
                <h2 class="text-lg text-primary font-medium">
                  Metode Pembayaran
                </h2>
              </div>
              <a href="" class="flex gap-2 items-center py-4">
                <h2 class="text-base text-primary ">
                  saldo adaJasa
                </h2>
                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 8 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                </svg>
              </a>

            </div>
            <hr>

            <div class="flex justify-between items-center mt-4 mb-2">

              <div class="flex gap-2 items-center">

                <svg class="w-5 h-5 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="18"
                  height="20" fill="none" viewBox="0 0 18 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                    d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                </svg>
                <h2 class="text-lg text-primary font-medium">
                  Rincian
                </h2>
              </div>
            </div>
            <div class="flex justify-between  items-center">
              <div class="flex gap-2 items-center">
                <h5 class="text-lg font-medium">
                  Harga Jasa
                </h5>
              </div>
              <div class="flex gap-2 items-center ">
                <h2 class="text-lg ">
                  Rp 110.000
                </h2>
              </div>
            </div>

            <div class="flex justify-between  items-center">
              <div class="flex gap-2 items-center">
                <h2 class="text-lg font-medium">
                  Diskon
                </h2>
              </div>
              <div class="flex gap-2 items-center ">
                <h2 class="text-lg ">
                  Rp 20.000
                </h2>
              </div>

            </div>
            <div class="flex justify-between  items-center">
              <div class="flex gap-2 items-center">
                <h2 class="text-lg font-medium">
                  Total Pembayaran
                </h2>
              </div>
              <div class="flex gap-2 items-center ">
                <h2 class="text-lg ">
                  Rp 90.000
                </h2>
              </div>

            </div>
          </div>

          <!--  -->
          
          <div class="flex gap-4">
            <button class="w-full py-4 rounded-lg bg-primary bg-opacity-10 text-primary font-semibold"
              type="submit">Bayar Sekarang</button>
            <button class="p-2 px-4 rounded-lg bg-primary bg-opacity-10">
              <svg class="w-6 h-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 20 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 5h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-2v3l-4-3H8m4-13H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h2v3l4-3h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer bar -->

  <footer class="bg-white ">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
          <a href="https://flowbite.com/" class="flex items-center">
            <img src="/icon/Ada jasa blue.png" class="h-10 me-3" alt="FlowBite Logo" />

          </a>
          <div class="flex py-4 gap-2 text-gray-500">
            <a href="" class=" hover:underline">Home</a>|
            <a href="" class=" hover:underline">About</a>|
            <a href="" class=" hover:underline">Contact</a>|
            <a href="" class=" hover:underline">Faq</a>|

          </div>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
              Contact
            </h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="" class="hover:underline">WhatsApp</a>
              </li>
              <li>
                <a href="" class="hover:underline">Email</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
              Follow us
            </h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="https://github.com/h-yusuf" class="hover:underline">Github</a>
              </li>
              <li>
                <a href="" class="hover:underline">Discord</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
              Legal
            </h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="#" class="hover:underline">Privacy Policy</a>
              </li>
              <li>
                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023
          <a href="https://flowbite.com/" class="hover:underline">AdaJasa™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 8 19">
              <path fill-rule="evenodd"
                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Facebook page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 21 16">
              <path
                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
            </svg>
            <span class="sr-only">Discord community</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 17">
              <path fill-rule="evenodd"
                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Twitter page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                clip-rule="evenodd" />
            </svg>
            <span class="sr-only">GitHub account</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 15 15">
              <path fill-rule="evenodd"
                d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"
                clip-rule="evenodd" />
              <path d="M3 5.012H0V15h3V5.012Z" />
            </svg>

            <span class="sr-only">Dribbble account</span>
          </a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>