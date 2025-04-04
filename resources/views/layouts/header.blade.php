<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Ana Sayfa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://kendo.cdn.telerik.com/themes/6.4.0/default/default-main.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2023.1.314/js/kendo.all.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-gray-800 text-white w-64 flex-shrink-0 hidden md:block">
            <div class="p-4 border-b border-gray-700">
                <h2 class="text-xl font-bold mb-2">Admin Panel</h2>
                <hr>
                <p class="text-gray-300 mt-2">Hoş geldiniz,
                    {{ ucfirst(session('user')->first_name) }}
                    {{ ucfirst(session('user')->last_name) }}
                </p>
            </div>

            <nav class="mt-4">
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('index') }}" class="flex items-center px-4 py-2 bg-gray-900 text-white">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            Ana Sayfa
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('settings') }}"
                            class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Ayarlar
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('users') }}"
                            class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                </path>
                            </svg>
                            Kullanıcı Ekle
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('users.list') }}"
                            class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <g transform="translate(-2, 0)">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4a4 4 0 110 8 4 4 0 010-8zM6 20a6 6 0 0112 0v1H6v-1z" />
                                </g>
                            </svg>
                            Kullanıcıları Listele
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('logout') }}"
                            class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            Çıkış Yap
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Mobile sidebar toggle -->
        <div
            class="md:hidden fixed top-0 left-0 z-50 w-full bg-gray-800 text-white p-4 flex justify-between items-center">
            <h2 class="text-xl font-bold">Admin Panel</h2>
            <button id="mobile-menu-button" class="focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Mobile sidebar menu -->
        <div id="mobile-menu" class="md:hidden fixed top-14 left-0 z-40 w-full bg-gray-800 text-white hidden">
            <nav class="p-4">
                <ul>
                    <li class="mb-2">
                        <a href="dashboard.html" class="flex items-center px-4 py-2 bg-gray-900 text-white">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            Ana Sayfa
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="settings.html" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Ayarlar
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="user-add.html" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                </path>
                            </svg>
                            Kullanıcı Ekle
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" id="mobile-logout-button"
                            class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            Çıkış Yap
                        </a>
                    </li>
                </ul>
            </nav>
        </div>