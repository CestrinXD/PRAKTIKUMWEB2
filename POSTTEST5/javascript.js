// Dapatkan tombol mode dan elemen body
const modeToggle = document.getElementById('toggledark');
const body = document.body;

// Cek apakah pengguna telah memilih mode sebelumnya (dark atau light)
const userMode = localStorage.getItem('userMode');

// Atur mode awal berdasarkan preferensi pengguna atau mode standar
if (userMode === 'dark') {
  body.classList.add('dark-mode');
} else {
  body.classList.remove('dark-mode');
}

// Tambahkan event listener untuk tombol mode
modeToggle.addEventListener('click', () => {
  // Toggle class CSS pada elemen body
  body.classList.toggle('dark-mode');

  // Simpan preferensi pengguna ke localStorage
  if (body.classList.contains('dark-mode')) {
    localStorage.setItem('userMode', 'dark');
    window.alert('Anda sekarang berada dalam Dark Mode');
  } else {
    localStorage.setItem('userMode', 'light');
    window.alert('Anda sekarang berada dalam Light Mode');
  }
});
