document.addEventListener('DOMContentLoaded', function() {
    // Kullanıcı ekleme formu
    document.getElementById('user-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const firstName = document.getElementById('first-name').value;
        const lastName = document.getElementById('last-name').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const role = document.getElementById('role').value;
        const errorDiv = document.getElementById('user-error');
        const successDiv = document.getElementById('user-success');
        
        // Hata ve başarı mesajlarını gizle
        errorDiv.classList.add('hidden');
        successDiv.classList.add('hidden');
        
        // Form doğrulama
        if (!firstName || !lastName || !email || !password || !role) {
            errorDiv.classList.remove('hidden');
            document.getElementById('error-message').textContent = 'Tüm alanları doldurunuz';
            return;
        }
        
        // E-posta formatı kontrolü
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errorDiv.classList.remove('hidden');
            document.getElementById('error-message').textContent = 'Geçerli bir e-posta adresi giriniz';
            return;
        }
        
        // Başarılı
        successDiv.classList.remove('hidden');
        
        // Formu temizle
        document.getElementById('first-name').value = '';
        document.getElementById('last-name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('password').value = '';
        document.getElementById('role').value = '';
    });
    
    // Kullanıcı ekleme butonu
    document.getElementById('add-user').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('user-form').dispatchEvent(new Event('submit'));
    });
    
    // Kendo UI bileşenlerini başlat
    $(document).ready(function() {
        $("#first-name").kendoTextBox();
        $("#last-name").kendoTextBox();
        $("#email").kendoTextBox();
        $("#password").kendoTextBox();
        $("#role").kendoDropDownList();
        $("#add-user").kendoButton();
    });
});