<aside
  class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
  aria-label="Sidenav"
  id="drawer-navigation"
>
  <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
    {{-- Search Form (tetap) --}}
    <form action="#" method="GET" class="md:hidden mb-2">
      <label for="sidebar-search" class="sr-only">Search</label>
      <div class="relative">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
          <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
          </svg>
        </div>
        <input
          type="text"
          name="search"
          id="sidebar-search"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
          placeholder="Search"
        />
      </div>
    </form>

    {{-- MENU UTAMA: Cuma Dashboard & About --}}
    <ul class="space-y-2">
        {{-- Menu Dashboard --}}
        <x-admin.menu-item
            href="/admin/dashboard"
            label="Dashboard"
            icon='
                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
            '
        />
        {{-- Menu About --}}
        <x-admin.menu-item
            href="/admin/about"
            label="About"
            icon='
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"></path>
            '
        />
        {{-- Menu Student --}}
        <x-admin.menu-item
            href="/admin/student"
            label="Student"
            icon='
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
            '
        />
        {{-- Menu Classroom --}}
        <x-admin.menu-item
            href="/admin/classroom"
            label="Classroom"
            icon='
                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
            '
        />
        {{-- Menu Subject --}}
        <x-admin.menu-item
            href="/admin/subject"
            label="Subject"
            icon='
                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
            '
        />
        {{-- Menu Teacher --}}
        <x-admin.menu-item
            href="/admin/teacher"
            label="Teacher"
            icon='
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
            '
        />
    </ul>
  </div>

  {{-- Bagian bawah sidebar (settings & language) --}}
  <div class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20">
    <a
      href="#"
      class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600"
    >
      <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path>
      </svg>
    </a>
    <a
      href="#"
      data-tooltip-target="tooltip-settings"
      class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600"
    >
      <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path
          fill-rule="evenodd"
          d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
          clip-rule="evenodd"
        ></path>
      </svg>
    </a>
    <div
      id="tooltip-settings"
      role="tooltip"
      class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip"
    >
      Settings page
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <button
      type="button"
      data-dropdown-toggle="language-dropdown"
      class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:hover:text-white dark:text-gray-400 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600"
    >
      <svg aria-hidden="true" class="h-5 w-5 rounded-full mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3900 3900">
        <path fill="#b22234" d="M0 0h7410v3900H0z" />
        <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff" stroke-width="300" />
        <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
        <g fill="#fff">
          <g id="d"><g id="c"><g id="e"><g id="b"><path id="a" d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" /><use xlink:href="#a" y="420" /><use xlink:href="#a" y="840" /><use xlink:href="#a" y="1260" /></g><use xlink:href="#a" y="1680" /></g><use xlink:href="#b" x="247" y="210" /></g><use xlink:href="#c" x="494" /></g><use xlink:href="#d" x="988" /><use xlink:href="#c" x="1976" /><use xlink:href="#e" x="2470" />
        </g>
      </svg>
    </button>
    <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" id="language-dropdown">
      <ul class="py-1" role="none">
        <li>
          <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:text-white dark:text-gray-300 dark:hover:bg-gray-600" role="menuitem">
            <div class="inline-flex items-center">English (US)</div>
          </a>
        </li>
        <li>
          <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-600" role="menuitem">
            <div class="inline-flex items-center">Deutsch</div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</aside>
