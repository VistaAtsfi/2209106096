document.addEventListener('DOMContentLoaded', function () {
    // Tampilkan pop-up form saat tombol tertentu ditekan
    var popupForm = document.getElementById('popupForm');
    var submitButton = document.getElementById('submitData');

    // Event listener untuk tombol "Submit"
    submitButton.addEventListener('click', function () {
        var nama = document.getElementById('nama').value;
        var nomorTelepon = document.getElementById('nomorTelepon').value;
        var password = document.getElementById('password').value;

        // Tampilkan data yang dimasukkan oleh pengguna
        alert('Nama: ' + nama + '\nNomor Telepon: ' + nomorTelepon + '\nPassword: ' + password);
        
        // Sembunyikan pop-up form
        popupForm.style.display = 'none';
    });

    // Event listener untuk menampilkan pop-up form saat tombol tertentu ditekan
    var showPopupButton = document.getElementById('showPopupButton');
    showPopupButton.addEventListener('click', function () {
        popupForm.style.display = 'block';
    });
});

function submitUserData() {
    var nama = document.getElementById('nama').value;
    var nomorTelepon = document.getElementById('nomorTelepon').value;
    var password = document.getElementById('password').value;

    // Sembunyikan pop-up form
    var popupForm = document.getElementById('popupForm');
    popupForm.style.display = 'none';
}

// // DOM
// const body = document.body;
// const checkbox = document.getElementById("checkbox");
// const themeLabel = document.getElementById("theme-label");

// // Fungsi untuk mengaktifkan dark mode
// function enableDarkMode() {
//     body.classList.add("dark-mode");
//     body.classList.remove("light-mode");
//     themeLabel.textContent = "Dark Mode";
// }

// // Fungsi untuk mengaktifkan light mode
// function enableLightMode() {
//     body.classList.add("light-mode");
//     body.classList.remove("dark-mode");
//     themeLabel.textContent = "Light Mode";
// }

// // Fungsi untuk toggle mode
// function toggleMode() {
//     if (body.classList.contains("dark-mode")) {
//         enableLightMode();
//     } else {
//         enableDarkMode();
//     }
// }

// // Tambahkan event listener untuk checkbox
// checkbox.addEventListener("change", toggleMode);

// // Inisialisasi mode berdasarkan preferensi pengguna
// const userPreference = localStorage.getItem("themePreference");
// if (userPreference === "dark") {
//     enableDarkMode();
//     checkbox.checked = true;
// } else {
//     enableLightMode();
// }
