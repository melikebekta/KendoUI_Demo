document.addEventListener('DOMContentLoaded', function() {
    // Şifre değiştirme formu
    document.getElementById('password-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const currentPassword = document.getElementById('current-password').value;
        const newPassword = document.getElementById('new-password').value;
        const confirmPassword = document.getElementById('confirm-password').value;
        const errorDiv = document.getElementById('password-error');
        const successDiv = document.getElementById('password-success');
        
        // Hata ve başarı mesajlarını gizle
        errorDiv.classList.add('hidden');
        successDiv.classList.add('hidden');
        
        // Form doğrulama
        if (!currentPassword || !newPassword || !confirmPassword) {
            errorDiv.classList.remove('hidden');
            document.getElementById('error-message').textContent = 'Tüm alanları doldurunuz';
            return;
        }
        
        if (newPassword !== confirmPassword) {
            errorDiv.classList.remove('hidden');
            document.getElementById('error-message').textContent = 'Yeni şifreler eşleşmiyor';
            return;
        }
        
        // Demo için mevcut şifre kontrolü
        if (currentPassword !== 'password') {
            errorDiv.classList.remove('hidden');
            document.getElementById('error-message').textContent = 'Mevcut şifre yanlış';
            return;
        }
        
        // Başarılı
        successDiv.classList.remove('hidden');
        
        // Formu temizle
        document.getElementById('current-password').value = '';
        document.getElementById('new-password').value = '';
        document.getElementById('confirm-password').value = '';
    });
    
    // Şifre güncelleme butonu
    document.getElementById('update-password').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('password-form').dispatchEvent(new Event('submit'));
    });
    
    // Kendo UI bileşenlerini başlat
    $(document).ready(function() {
        $("#current-password").kendoTextBox();
        $("#new-password").kendoTextBox();
        $("#confirm-password").kendoTextBox();
        $("#update-password").kendoButton();
    });
});