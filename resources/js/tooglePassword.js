document.querySelectorAll('.toggle-password').forEach(icon => {
    icon.addEventListener('click', function() {
        // Temukan elemen input password yang berdekatan dengan ikon ini
        const passwordInput = this.previousElementSibling;

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            this.classList.add("fa-eye-slash");
            this.classList.remove("fa-eye");
        } else {
            passwordInput.type = "password";
            this.classList.add("fa-eye");
            this.classList.remove("fa-eye-slash");
        }
    });
});
