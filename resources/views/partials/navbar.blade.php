<header id="header" class="bg-transparent w-full top-0 left-0 absolute flex items-center z-20">
  <div class="container">
    <div class="flex justify-between items-center relative">
      <div class="px-4">
        <a href="#home" class="block py-2 text-lg text-primary font-semibold">ODGJRescue</a>
      </div>
      <div class="flex items-center px-4">
        <button id="hamburger" name="hamburger" class="block absolute right-4 lg:hidden">
          <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
          <span class="hamburger-line transition duration-300 ease-in-out"></span>
          <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
        </button>
        <nav id="nav-menu"
          class="hidden absolute py-5 bg-begie shadow-lg  rounded-lg max-w-[250px] lg:w-full right-4 top-full lg:block lg:static lg:bg-transparent max-w-full  lg:shadow-none lg:rounded-none">
          <ul class="block lg:flex">
            <li class="group">
              <a href="#home"
                class="font-semibold text-base text-primary group-hover:text-pinkeun py-2 mx-8 flex">Home</a>
            </li>
            <li class="group">
              <a href="#berita"
                class="font-semibold text-base text-primary group-hover:text-pinkeun py-2 mx-8 flex">Berita</a>
            </li>
            <li class="group">
              <a href="#portal"
                class="font-semibold text-base text-primary group-hover:text-pinkeun py-2 mx-8 flex">Portal</a>
            </li>
            <li class="group">
              <a href="#kerjasama"
                class="font-semibold text-base text-primary group-hover:text-pinkeun py-2 mx-8 flex">Kerjasama</a>
            </li>
          </ul>
        </nav>
      </div>

      @auth
      @else
      @endauth
      <ul>
        <li><a href="/login">Login</a></li>
      </ul>

    </div>
  </div>
</header>
