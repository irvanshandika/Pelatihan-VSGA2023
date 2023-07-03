const time = new Date().getHours();
let greeting;

if (time < 10) {
  greeting = "Selamat Pagi";
}
if (time < 15) {
  greeting = "Selamat Siang";
}
if (time < 21) {
  greeting = "Selamat Sore";
} else {
  greeting = "Selamat Malam";
}
document.getElementById("jam").innerHTML = greeting;

function tampilkanTanggal() {
  var sekarang = new Date();
  var hari = sekarang.getDate();
  var bulan = sekarang.getMonth() + 1; // Perhatikan bahwa indeks bulan dimulai dari 0, maka ditambah 1
  var tahun = sekarang.getFullYear();

  // Menampilkan nilai hari, bulan, dan tahun di elemen dengan id "tanggal"
  document.getElementById("tanggal").innerHTML = hari + "/" + bulan + "/" + tahun;
}
