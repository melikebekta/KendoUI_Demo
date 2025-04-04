@extends('layouts.master')
@section('content')
    <div class="flex-1 overflow-auto">
        <div class="md:p-8 p-4 md:mt-0 mt-14">
            <h1 class="text-2xl font-bold mb-6">Kullanıcı Düzenle</h1>

            <div class="bg-white rounded-lg shadow p-6 max-w-2xl mx-auto">
                <div id="user-success"
                    class="hidden mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    <div class="flex">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Kullanıcı başarıyla düzenlendi.</span>
                    </div>
                </div>

                <div id="user-error" class="hidden mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    <span id="error-message">Hata mesajı burada görünecek.</span>
                </div>

                <form method="post" action="{{ route('users.edit.post') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="first-name" class="block text-gray-700 text-sm font-bold mb-2">Ad</label>
                            <input type="text" id="first-name" name="first_name" value="{{ $user->first_name }}"
                                class="k-textbox w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Adı giriniz">
                        </div>

                        <div>
                            <label for="last-name" class="block text-gray-700 text-sm font-bold mb-2">Soyad</label>
                            <input type="text" id="last-name" name="last_name" value="{{ $user->last_name }}"
                                class="k-textbox w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Soyadı giriniz">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-posta</label>
                        <input type="email" id="email" name="email" value="{{ $user->email }}"
                            class="k-textbox w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="E-posta adresini giriniz">
                    </div>


                    <div class="mb-6">
                        <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Rol</label>
                        <select id="role" name="role" value="{{ $user->role }}"
                            class="k-dropdown w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="Admin" @if ($user->role == 'Admin') selected @endif>Admin</option>
                            <option value="Yönetici" @if ($user->role == 'Yönetici') selected @endif>Yönetici</option>
                            <option value="Kullanıcı" @if ($user->role == 'Kullanıcı') selected @endif>Kullanıcı</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit"
                            class="k-button k-primary py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Kullanıcıyı Düzenle
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script src="{{ asset('assets/js/user-add.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    title: "Başarılı!",
                    text: "{{ session('success') }}",
                    icon: "success",
                    confirmButtonText: "Tamam"
                });
            });
        </script>
    @endif
@endsection