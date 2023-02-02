<nav x-data="{showMenu : false}" class="bg-gray-800 bg-opacity-50 fixed w-full z-20 top-0 left-0 border-gray-200 px-2 sm:px-4 py-2.5 text-white">
   <div class="container flex flex-wrap justify-between items-center">
       <!-- Brand-->
       <a href="/">
         <span class="self-center text-xl font-semibold whitespace-nowrap">
            {{ $data['title'] }}
         </span>
      </a>
       <!-- Navbar Toggle Button -->
       <button @click="showMenu = !showMenu" class="block md:hidden bg-gray-400 rounded hover:border focus:border focus:bg-gray-400 " type="button" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
         <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z"/></svg>
       </button>
       <!-- Nav Links-->
       <ul class="md:flex text-white text-base mr-3 origin-top"
           :class="{ 'block bg-gray-800 bg-opacity-50 w-full ': showMenu, 'hidden': !showMenu}"
           id="navbar-main" x-cloak>
           <x-items />
       </ul>
   </div>
</nav>