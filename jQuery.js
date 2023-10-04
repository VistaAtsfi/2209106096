// DOM
const body = document.body;
const checkbox = document.getElementById("checkbox");
const themeLabel = document.getElementById("theme-label");

// Fungsi untuk mengaktifkan dark mode
function enableDarkMode() {
    body.classList.add("dark-mode");
    body.classList.remove("light-mode");
    themeLabel.textContent = "Dark Mode";
}

// Fungsi untuk mengaktifkan light mode
function enableLightMode() {
    body.classList.add("light-mode");
    body.classList.remove("dark-mode");
    themeLabel.textContent = "Light Mode";
}

// Fungsi untuk toggle mode
function toggleMode() {
    if (body.classList.contains("dark-mode")) {
        enableLightMode();
    } else {
        enableDarkMode();
    }
}

// Tambahkan event listener untuk checkbox
checkbox.addEventListener("change", toggleMode);

// Inisialisasi mode berdasarkan preferensi pengguna
const userPreference = localStorage.getItem("themePreference");
if (userPreference === "dark") {
    enableDarkMode();
    checkbox.checked = true;
} else {
    enableLightMode();
}
