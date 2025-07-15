<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

      @vite(['resources/js/app.js'])
</head>
<body   class=" body h-full">

<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <x-nav-link  href="/" :active="request()->is('/')">home</x-nav-link>
              <x-nav-link  href="/jobs" :active="request()->is('jobs')">jobs</x-nav-link>
              <x-nav-link  href="/contact" :active="request()->is('contact')">contact</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                @guest
                     <x-nav-link href="/login" :active="request()->is('login')">login</x-nav-link>
                  <x-nav-link href="/register" :active="request()->is('register')">register</x-nav-link>
                @endguest

                @auth
                  <form action="logout" method="POST">
                    @csrf

                    <x-form-button>Logout</x-form-button>
                  </form>
                @endauth
               
              </div>

            </div>
          </div>
        </div>
      
      </div>
    </div>

  </nav>

  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900"> {{ $heading }} </h1>
      <x-button href="/jobs/create">Create Job</x-button>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
     {{$slot}}
    </div>
  </main>
</div>

  
</body>
</html>