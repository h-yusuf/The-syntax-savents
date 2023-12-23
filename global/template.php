<?php
	
	class Template{

		public function navbar() {
			return '
				 
 <!-- Navbar -->

 <div class="sticky top-0 z-50 bg-white">
	 <!-- Navbar -->
	 <div class="flex justify-between px-6 py-1 pb-2 shadow-sm" style="background-color: #ffffff">
	   <a class="text-sm" href="#">Download AdaJasa App</a>
	   <ul class="flex gap-4 text-sm">
		 <li class="li-nav"><a href="">FaQ</a></li>
		 <li class="li-nav"><a href="">Mulai Buka Jasa</a></li>
		 <li class="li-nav"><a href=""> promo</a></li>
		 <li class="li-nav"><a href="">About Us</a></li>
	   </ul>
	 </div>
	 <nav class="flex py-4 px-6 shadow-sm justify-between">
	   <div class="flex items-center gap-8">
		 <img src="../../icon/Ada jasa blue.png" alt="" />
		 <a href="" class="flex gap-2">
		   <svg class="w-6 h-6 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
			 viewBox="0 0 17 21">
			 <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
			   <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
			   <path
				 d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
			 </g>
		   </svg>
		   <h3 class="max-w-[245px] text-base leading-4 text-blue-900">
			 Condongcatur, Depok, Sleman, Yogyakarta
		   </h3>
		 </a>
	   </div>
 
	   <div class="flex items-center gap-8 w-1/2 justify-end ">
		 <form class="w-1/2">
		   <label for="default-search"
			 class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
		   <div class="relative">
			 <div class="absolute inset-y-0 end-0 flex items-center pe-3 pointer-events-none">
			   <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
				 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
				 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
				   d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
			   </svg>
			 </div>
			 <input type="search" id="default-search"
			   class="block w-full px-4 py-2 text-sm outline-none border-2 border-gray-300 rounded-lg"
			   placeholder="Cari Jasa" required />
		   </div>
		 </form>
		 <a href="">
		   <svg class="w-6 h-6 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
			 viewBox="0 0 20 20">
			 <path
			   d="M18.435 7.546A2.32 2.32 0 0 1 17.7 5.77a3.354 3.354 0 0 0-3.47-3.47 2.322 2.322 0 0 1-1.776-.736 3.357 3.357 0 0 0-4.907 0 2.281 2.281 0 0 1-1.776.736 3.414 3.414 0 0 0-2.489.981 3.372 3.372 0 0 0-.982 2.49 2.319 2.319 0 0 1-.736 1.775 3.36 3.36 0 0 0 0 4.908A2.317 2.317 0 0 1 2.3 14.23a3.356 3.356 0 0 0 3.47 3.47 2.318 2.318 0 0 1 1.777.737 3.36 3.36 0 0 0 4.907 0 2.36 2.36 0 0 1 1.776-.737 3.356 3.356 0 0 0 3.469-3.47 2.319 2.319 0 0 1 .736-1.775 3.359 3.359 0 0 0 0-4.908ZM8.5 5.5a1 1 0 1 1 0 2 1 1 0 0 1 0-2Zm3 9.063a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm2.207-6.856-6 6a1 1 0 0 1-1.414-1.414l6-6a1 1 0 0 1 1.414 1.414Z" />
		   </svg>
		 </a>
		 <a href="">
		   <svg class="w-6 h-6 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
			 viewBox="0 0 20 20">
			 <path
			   d="M15.133 10.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C4.867 13.018 3 13.614 3 14.807 3 15.4 3 16 3.538 16h12.924C17 16 17 15.4 17 14.807c0-1.193-1.867-1.789-1.867-4.175ZM4 4a1 1 0 0 1-.707-.293l-1-1a1 1 0 0 1 1.414-1.414l1 1A1 1 0 0 1 4 4ZM2 8H1a1 1 0 0 1 0-2h1a1 1 0 1 1 0 2Zm14-4a1 1 0 0 1-.707-1.707l1-1a1 1 0 1 1 1.414 1.414l-1 1A1 1 0 0 1 16 4Zm3 4h-1a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2ZM6.823 17a3.453 3.453 0 0 0 6.354 0H6.823Z" />
		   </svg>
		 </a>
		 <a href="chat.php">
		   <svg class="w-6 h-6 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 18"
			 fill="currentColor">
			 <path
			   d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z"
			   fill="currentColor" />
			 <path
			   d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z"
			   fill="currentColor" />
		   </svg>
		 </a>
 
		 <!-- profile hover -->
 
		 <button data-popover-target="popover-bottom" data-popover-placement="bottom" type="button" class="ml-4">
		   <img class="rounded-full w-10 h-10" src="../../asset/PP.png" alt="" />
		 </button>
		 <div data-popover id="popover-bottom" role="tooltip"
		   class="absolute z-10 invisible inline-block w-64 text-sm text-gray-600 transition-opacity duration-300 bg-white border rounded-lg shadow-sm opacity-0">
		   <div class="p-3">
			 <div class="flex items-center justify-between mb-2">
			   <a href="#">
				 <img class="w-10 h-10 rounded-full" src="../../asset/PP.png" alt="Jese Leos" />
			   </a>
			   <div>
				 <button type="button"
				   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
				   log out
				 </button>
			   </div>
			 </div>
			 <p class="text-base font-semibold leading-none text-gray-900">
			   <a href="#">Jese Leos</a>
			 </p>
			 <p class="mb-3 text-sm font-normal">
			   <a href="#" class="hover:underline">@jeseleos</a>
			 </p>
			 <p class="mb-4 text-sm">
			   Open-source contributor. Building
			   <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">flowbite.com</a>.
			 </p>
			 <ul class="flex text-sm">
			   <li class="me-2">
				 <a href="#" class="hover:underline">
				   <span class="font-semibold text-gray-900 dark:text-white">799</span>
				   <span>Following</span>
				 </a>
			   </li>
			   <li>
				 <a href="#" class="hover:underline">
				   <span class="font-semibold text-gray-900 dark:text-white">3,758</span>
				   <span>Followers</span>
				 </a>
			   </li>
			 </ul>
		   </div>
		   <div data-popper-arrow></div>
		 </div>
	   </div>
	 </nav>
   </div>
 
			';
		}
		public function footer(){
			return '
				   
   <!-- Footer bar -->

   <footer class="bg-white ">
	 <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
	   <div class="md:flex md:justify-between">
		 <div class="mb-6 md:mb-0">
		   <a href="https://flowbite.com/" class="flex items-center">
			 <img
			   src="../../icon/Ada jasa blue.png"
			   class="h-10 me-3"
			   alt="FlowBite Logo"
			 />
		   
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
			 <h2
			   class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
			 >
			   Contact 
			 </h2>
			 <ul class="text-gray-500 dark:text-gray-400 font-medium">
			   <li class="mb-4">
				 <a href="" class="hover:underline"
				   >WhatsApp</a
				 >
			   </li>
			   <li>
				 <a href="" class="hover:underline"
				   >Email</a
				 >
			   </li>
			 </ul>
		   </div>
		   <div>
			 <h2
			   class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
			 >
			   Follow us
			 </h2>
			 <ul class="text-gray-500 dark:text-gray-400 font-medium">
			   <li class="mb-4">
				 <a
				   href="https://github.com/h-yusuf"
				   class="hover:underline"
				   >Github</a
				 >
			   </li>
			   <li>
				 <a
				   href=""
				   class="hover:underline"
				   >Discord</a
				 >
			   </li>
			 </ul>
		   </div>
		   <div>
			 <h2
			   class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
			 >
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
	   <hr
		 class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"
	   />
	   <div class="sm:flex sm:items-center sm:justify-between">
		 <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400"
		   >© 2023
		   <a href="https://flowbite.com/" class="hover:underline">AdaJasa™</a
		   >. All Rights Reserved.
		 </span>
		 <div class="flex mt-4 sm:justify-center sm:mt-0">
		   <a
			 href="#"
			 class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
		   >
			 <svg
			   class="w-4 h-4"
			   aria-hidden="true"
			   xmlns="http://www.w3.org/2000/svg"
			   fill="currentColor"
			   viewBox="0 0 8 19"
			 >
			   <path
				 fill-rule="evenodd"
				 d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
				 clip-rule="evenodd"
			   />
			 </svg>
			 <span class="sr-only">Facebook page</span>
		   </a>
		   <a
			 href="#"
			 class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5"
		   >
			 <svg
			   class="w-4 h-4"
			   aria-hidden="true"
			   xmlns="http://www.w3.org/2000/svg"
			   fill="currentColor"
			   viewBox="0 0 21 16"
			 >
			   <path
				 d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"
			   />
			 </svg>
			 <span class="sr-only">Discord community</span>
		   </a>
		   <a
			 href="#"
			 class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5"
		   >
			 <svg
			   class="w-4 h-4"
			   aria-hidden="true"
			   xmlns="http://www.w3.org/2000/svg"
			   fill="currentColor"
			   viewBox="0 0 20 17"
			 >
			   <path
				 fill-rule="evenodd"
				 d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
				 clip-rule="evenodd"
			   />
			 </svg>
			 <span class="sr-only">Twitter page</span>
		   </a>
		   <a
			 href="#"
			 class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5"
		   >
			 <svg
			   class="w-4 h-4"
			   aria-hidden="true"
			   xmlns="http://www.w3.org/2000/svg"
			   fill="currentColor"
			   viewBox="0 0 20 20"
			 >
			   <path
				 fill-rule="evenodd"
				 d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
				 clip-rule="evenodd"
			   />
			 </svg>
			 <span class="sr-only">GitHub account</span>
		   </a>
		   <a
			 href="#"
			 class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5"
		   >
		   <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 15">
			   <path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd"/>
			   <path d="M3 5.012H0V15h3V5.012Z"/>
			 </svg>
			   
			 <span class="sr-only">Dribbble account</span>
		   </a>
		 </div>
	   </div>
	 </div>
   </footer>
			';
		}
	}
?>