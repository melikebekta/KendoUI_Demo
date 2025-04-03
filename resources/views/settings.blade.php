@extends('layouts.master')
@section('content')
<div class="flex-1 overflow-auto">
            <div class="md:p-8 p-4 md:mt-0 mt-14">
                <h1 class="text-2xl font-bold mb-6">Ayarlar</h1>
                
                <div class="bg-white rounded-lg shadow p-6 max-w-lg mx-auto">
                    <h2 class="text-xl font-semibold mb-4">Şifre Değiştir</h2>
                    
                    <div id="password-success" class="hidden mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                        <div class="flex">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Şifreniz başarıyla güncellendi.</span>
                        </div>
                    </div>
                    
                    <div id="password-error" class="hidden mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                        <span id="error-message">Hata mesajı burada görünecek.</span>
                    </div>
                    
                    <form id="password-form">
                        <div class="mb-4">
                            <label for="current-password" class="block text-gray-700 text-sm font-bold mb-2">Mevcut Şifre</label>
                            <input type="password" id="current-password" class="k-textbox w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Mevcut şifrenizi giriniz">
                        </div>
                        
                        <div class="mb-4">
                            <label for="new-password" class="block text-gray-700 text-sm font-bold mb-2">Yeni Şifre</label>
                            <input type="password" id="new-password" class="k-textbox w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Yeni şifrenizi giriniz">
                        </div>
                        
                        <div class="mb-6">
                            <label for="confirm-password" class="block text-gray-700 text-sm font-bold mb-2">Yeni Şifre (Tekrar)</label>
                            <input type="password" id="confirm-password" class="k-textbox w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Yeni şifrenizi tekrar giriniz">
                        </div>
                        
                        <div>
                            <button type="submit" id="update-password" class="k-button k-primary py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Şifreyi Güncelle
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset( 'assets/js/common.js') }}"></script>
    <script src="{{ asset( 'assets/js/settings.js') }}"></script>
@endsection