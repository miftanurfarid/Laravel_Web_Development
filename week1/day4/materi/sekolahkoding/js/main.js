function penjumlahan(angka1, angka2){
    hasil = angka1+angka2
    return hasil
}

function printTeks(teks1, teks2) {
    a = penjumlahan(teks1, teks2)
    document.getElementById("teksRoket").innerHTML = a
}

var x = 5
var y = 2
printTeks(x,y)