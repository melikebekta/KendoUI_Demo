@extends('layouts.master')
@section('content')
<div class="flex-1 overflow-auto">
            <div class="md:p-8 p-4 md:mt-0 mt-14">
                <h1 class="text-2xl font-bold mb-6">Gösterge Paneli</h1>
                
                <!-- Stats cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Toplam Kullanıcı</p>
                                <p class="text-xl font-bold">{{ $user_count }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Gelir</p>
                                <p class="text-xl font-bold">₺45,231</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Aktif Oturumlar</p>
                                <p class="text-xl font-bold">324</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-orange-100 text-orange-600 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Siparişler</p>
                                <p class="text-xl font-bold">856</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Charts -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white rounded-lg shadow p-4 lg:col-span-2">
                        <h2 class="text-lg font-semibold mb-4">Gelir Grafiği</h2>
                        <div id="revenue-chart" style="height: 300px;"></div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow p-4">
                        <h2 class="text-lg font-semibold mb-4">Kullanıcı Dağılımı</h2>
                        <div id="user-chart" style="height: 300px;"></div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-lg font-semibold mb-4">Aylık Satışlar</h2>
                    <div id="sales-chart" style="height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset( 'assets/js/common.js') }}"></script>
    <script src="{{ asset( 'assets/js/dashboard.js') }}"></script>
@endsection