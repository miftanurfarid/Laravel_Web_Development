// Untuk id
document.getElementById("box1").innerHTML = "Roket Meluncur!";

// Untuk class
// document.getElementsByClassName("boxes")[0].innerHTML 
//     = "Dengan Sangat Cepat!!"
// document.getElementsByClassName("boxes")[1].innerHTML
//     = "Tanpa Ragu!!"
// document.getElementsByClassName("boxes")[2].innerHTML 
//     = "Tanpa Bimbang!!"

// Atau cara singkat seperti ini

var boxes = document.getElementsByClassName("boxes");

boxes[0].innerHTML = "Dengan Sangat Cepat!!";
boxes[1].innerHTML = "Tanpa Ragu!!";
boxes[2].innerHTML = "Tanpa Bimbang!!";

// Untuk Tag
document.getElementsByTagName("li")[0].innerHTML = "Berwarna merah"

// Menambah Elemen
var elemen = document.createElement('h2');
var teks = document.createTextNode('Ini adalah text node yang akan ditambahkan secara otomatis menggunakan javascript');
var boks = document.getElementById('box2');

elemen.appendChild(teks);
boks.appendChild(elemen);

// Menghapus Elemen
// boks.removeChild(elemen);

// Menggantikan Elemen Lama dengan Elemen Baru
var elemen1 = document.createElement('h3');
var teks1   = document.createTextNode('Ini adalah paragraf penggantinya');
var p1      = document.getElementById('p1')

elemen1.appendChild(teks1);
boks.replaceChild(elemen1, p1);