<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://kendo.cdn.telerik.com/themes/6.4.0/default/default-main.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2023.1.314/js/kendo.all.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold">Admin Dashboard</h1>
                <p class="text-gray-600">Lütfen giriş yapınız</p>
            </div>
            
            <div id="login-error" class="hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <span id="error-message">Hatalı kullanıcı adı veya şifre</span>
            </div>
            
            <form id="login-form">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Kullanıcı Adı</label>
                    <input type="text" id="username" class="k-textbox w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Kullanıcı adınızı giriniz">
                </div>
                
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Şifre</label>
                    <input type="password" id="password" class="k-textbox w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Şifrenizi giriniz">
                </div>
                
                <div>
                    <button type="submit" id="login-button" class="k-button k-primary w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Giriş Yap
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset( 'assets/js/login.js') }}"></script>
</body>
</html>