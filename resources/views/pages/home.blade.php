<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eStudiez</title>
    <link href="{{ asset('/assets/css/build.css') }}" rel="stylesheet">
</head>
<body>

<div class="bg-white">
    <header>
        <div class="relative bg-white">
            <div
                class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <span class="text-orange-600 text-2xl font-medium">eStudiez</span>
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500"
                            aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    @auth()
                        <a href="{{ route('dashboard') }}"
                           class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-gradient-to-r from-orange-600 to-orange-600 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-orange-700 hover:to-orange-700">
                            Portal</a>
                    @else
                        <a href="{{ route('auth.login') }}"
                           class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Login</a>
                        <a href="{{ route('auth.register') }}"
                           class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-gradient-to-r from-orange-600 to-orange-600 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-orange-700 hover:to-orange-700">
                            Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero section -->
        <div class="relative">
            <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                    <div class="absolute inset-0">
                        <img class="h-full w-full object-cover grayscale"
                             src="https://unsplash.com/photos/lUaaKCUANVI/download?ixid=MnwxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNjYwMzk2Mjc3&force=true&w=1920"
                             alt="People working on laptops">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-orange-800 to-orange-700 mix-blend-multiply"></div>
                    </div>
                    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                        <h1 class="text-center text-4xl font-bold tracking-tight sm:text-5xl sm:tracking-tight lg:text-6xl lg:tracking-tight">
                            <span class="block text-white">Keep track of students'</span>
                            <span class="block text-orange-200">academic progress</span>
                        </h1>
                        <p class="mt-6 max-w-lg mx-auto text-center text-xl text-orange-200 sm:max-w-3xl">A software for
                            students, teachers, and parents/guardians. The application will be designed to track the
                            progress, check online links shared, update the marks/scores for the tests conducted
                            offline, and so on.</p>
                        <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                            <div
                                class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid {{ auth()->check() ? '' : 'sm:grid-cols-2 sm:gap-5' }}">
                                <a href="{{ route('dashboard') }}"
                                   class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-orange-700 bg-white hover:bg-orange-50 sm:px-8">
                                    Go to portal </a>
                                @guest()
                                    <a href="{{ route('auth.register') }}"
                                       class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-orange-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                                        Register </a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alternating Feature Sections -->
        <div class="relative pt-16 pb-32 overflow-hidden">
            <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-gray-100"></div>
            <div class="relative">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                    <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                        <div>
                            <div>
                <span
                    class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-r from-orange-600 to-orange-600">
                  <!-- Heroicon name: outline/inbox -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                  </svg>
                </span>
                            </div>
                            <div class="mt-6">
                                <h2 class="text-3xl font-bold tracking-tight text-gray-900">All of the grades in one
                                    place</h2>
                                <p class="mt-4 text-lg text-gray-500">Semper curabitur ullamcorper posuere nunc sed.
                                    Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet
                                    sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui
                                    tellus ornare pharetra.</p>
                                <div class="mt-6">
                                    @guest()
                                        <a href="{{ route('auth.register') }}"
                                           class="inline-flex bg-gradient-to-r from-orange-600 to-orange-600 bg-origin-border px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white hover:from-orange-700 hover:to-orange-700">
                                            Get started </a>
                                    @endguest
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-6">
                            <blockquote>
                                <div>
                                    <p class="text-base text-gray-500">&ldquo;Cras velit quis eros eget rhoncus lacus
                                        ultrices sed diam. Sit orci risus aenean curabitur donec aliquet. Oh my God I
                                        love pink.&rdquo;</p>
                                </div>
                                <footer class="mt-3">
                                    <div class="flex items-center space-x-3">
                                        <div class="flex-shrink-0">
                                            <img class="h-6 w-6 rounded-full"
                                                 src="https://res.cloudinary.com/quando213/image/upload/v1660397770/0DCAE780-F607-447D-A5D8-4EC91DBEC215_kg3aux.jpg"
                                                 alt="">
                                        </div>
                                        <div class="text-base font-medium text-gray-700">Dark Phuong, FPT Aptech Hanoi
                                        </div>
                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:mt-0">
                        <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                            <img
                                class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                src="https://res.cloudinary.com/quando213/image/upload/v1660397508/Screen_Shot_2022-08-13_at_8.21.27_PM_pirj2v.png"
                                alt="Inbox user interface">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-24">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                    <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                        <div>
                            <div>
                <span
                    class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-r from-orange-600 to-orange-600">
                  <!-- Heroicon name: outline/sparkles -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                  </svg>
                </span>
                            </div>
                            <div class="mt-6">
                                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Knowing the academic
                                    progress better</h2>
                                <p class="mt-4 text-lg text-gray-500">Semper curabitur ullamcorper posuere nunc sed.
                                    Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet
                                    sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui
                                    tellus ornare pharetra.</p>
                                <div class="mt-6">
                                    @guest()
                                        <a href="{{ route('auth.register') }}"
                                           class="inline-flex bg-gradient-to-r from-orange-600 to-orange-600 bg-origin-border px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white hover:from-orange-700 hover:to-orange-700">
                                            Get started </a>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                        <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                            <img
                                class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none"
                                src="https://res.cloudinary.com/quando213/image/upload/v1660397509/Screen_Shot_2022-08-13_at_8.21.34_PM_noebo0.png"
                                alt="Customer profile user interface">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gradient Feature Section -->
        <div class="bg-gradient-to-r from-orange-800 to-orange-700">
            <div class="max-w-4xl mx-auto px-4 py-16 sm:px-6 sm:pt-20 sm:pb-24 lg:max-w-7xl lg:pt-24 lg:px-8">
                <h2 class="text-3xl font-bold text-white tracking-tight">Built for everybody</h2>
                <p class="mt-4 max-w-3xl text-lg text-orange-200">Ac tincidunt sapien vehicula erat auctor pellentesque
                    rhoncus. Et magna sit morbi lobortis. Blandit aliquam sit nisl euismod mattis in.</p>
                <div
                    class="mt-12 grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:mt-16 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16">
                    <div>
                        <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/inbox -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                </svg>
              </span>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-white">Manage grades</h3>
                            <p class="mt-2 text-base text-orange-200">Ac tincidunt sapien vehicula erat auctor
                                pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                        </div>
                    </div>

                    <div>
                        <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/users -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
              </span>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-white">Academic progress</h3>
                            <p class="mt-2 text-base text-orange-200">Ac tincidunt sapien vehicula erat auctor
                                pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                        </div>
                    </div>

                    <div>
                        <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/trash -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                </svg>
              </span>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-white">Study resources</h3>
                            <p class="mt-2 text-base text-orange-200">Ac tincidunt sapien vehicula erat auctor
                                pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                        </div>
                    </div>

                    <div>
                        <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/pencil-alt -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>
              </span>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-white">Extra classes</h3>
                            <p class="mt-2 text-base text-orange-200">Ac tincidunt sapien vehicula erat auctor
                                pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                        </div>
                    </div>

                    <div>
                        <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/document-report -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
              </span>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-white">Helplines</h3>
                            <p class="mt-2 text-base text-orange-200">Ac tincidunt sapien vehicula erat auctor
                                pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                        </div>
                    </div>

                    <div>
                        <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/reply -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/>
                </svg>
              </span>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-white">Feedbacks</h3>
                            <p class="mt-2 text-base text-orange-200">Ac tincidunt sapien vehicula erat auctor
                                pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                        </div>
                    </div>

                    <div>
                        <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/chat-alt -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                </svg>
              </span>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-white">Email updates</h3>
                            <p class="mt-2 text-base text-orange-200">Ac tincidunt sapien vehicula erat auctor
                                pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                        </div>
                    </div>

                    <div>
                        <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/heart -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
              </span>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-white">For parents</h3>
                            <p class="mt-2 text-base text-orange-200">Ac tincidunt sapien vehicula erat auctor
                                pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats section -->
        <div class="relative bg-gray-900">
            <div class="h-80 absolute inset-x-0 bottom-0 xl:top-0 xl:h-full">
                <div class="h-full w-full xl:grid xl:grid-cols-2">
                    <div class="h-full xl:relative xl:col-start-2">
                        <img class="h-full w-full object-cover opacity-25 xl:absolute xl:inset-0"
                             src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100"
                             alt="People working on laptops">
                        <div aria-hidden="true"
                             class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-900 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
                    </div>
                </div>
            </div>
            <div
                class="max-w-4xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-cols-2 xl:grid-flow-col-dense xl:gap-x-8">
                <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
                    <h2 class="text-base font-semibold">
                        <span class="bg-gradient-to-r from-orange-300 to-orange-300 bg-clip-text text-transparent">Valuable Metrics</span>
                    </h2>
                    <p class="mt-3 text-3xl tracking-tight font-bold text-white">Get actionable data that will help
                        improve the students' study</p>
                    <p class="mt-5 text-lg text-gray-300">Rhoncus sagittis risus arcu erat lectus bibendum. Ut in
                        adipiscing quis in viverra tristique sem. Ornare feugiat viverra eleifend fusce orci in quis
                        amet. Sit in et vitae tortor, massa. Dapibus laoreet amet lacus nibh integer quis. Eu vulputate
                        diam sit tellus quis at.</p>
                    <div class="mt-12 grid grid-cols-1 gap-y-12 gap-x-6 sm:grid-cols-2">
                        <p>
                            <span class="block text-2xl font-bold text-white">8K+</span>
                            <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Schools</span> use laoreet amet lacus nibh integer quis.</span>
                        </p>

                        <p>
                            <span class="block text-2xl font-bold text-white">25K+</span>
                            <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Countries around the globe</span> lacus nibh integer quis.</span>
                        </p>

                        <p>
                            <span class="block text-2xl font-bold text-white">98%</span>
                            <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Customer satisfaction</span> laoreet amet lacus nibh integer quis.</span>
                        </p>

                        <p>
                            <span class="block text-2xl font-bold text-white">12M+</span>
                            <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Issues resolved</span> lacus nibh integer quis.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-white">
            <div
                class="max-w-4xl mx-auto py-16 px-4 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 lg:flex lg:items-center lg:justify-between">
                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:tracking-tight">
                    <span class="block">Ready to get started?</span>
                    <span
                        class="-mb-1 pb-1 block bg-gradient-to-r from-orange-600 to-orange-600 bg-clip-text text-transparent">Get in touch or create an account.</span>
                </h2>
                <div class="mt-6 space-y-4 sm:space-y-0 sm:flex sm:space-x-5">
                    @guest()
                        <a href="{{ route('auth.register') }}"
                           class="flex items-center justify-center bg-gradient-to-r from-orange-600 to-orange-600 bg-origin-border px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white hover:from-orange-700 hover:to-orange-700">
                            Create an account </a>
                    @endguest
                    <a href="{{ route('dashboard') }}"
                       class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-orange-800 bg-orange-50 hover:bg-orange-100">
                        Go to portal </a>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-50" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto pb-8 px-4 sm:px-6 lg:px-8">
            <div class="border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Dribbble</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">&copy; 2022 Coder 9 Tuoi, Inc. All rights
                    reserved.</p>
            </div>
        </div>
    </footer>
</div>

</body>
</html>
