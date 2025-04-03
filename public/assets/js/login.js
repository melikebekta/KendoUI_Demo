document.addEventListener('DOMContentLoaded', function() {
    
    // Login form submit işlemi
    document.getElementById('login-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const errorDiv = document.getElementById('login-error');
        
        // Form doğrulama
        if (!username || !password) {
            errorDiv.classList.remove('hidden');
            document.getElementById('error-message').textContent = 'Lütfen kullanıcı adı ve şifre giriniz';
            return;
        }         
    });
    
    // Login butonu tıklama işlemi
    document.getElementById('login-button').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('login-form').dispatchEvent(new Event('submit'));
    });
});