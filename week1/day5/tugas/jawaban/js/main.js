var items = [
    ['001', 'Keyboard Logitek', 60000,  'Keyboard yang mantap untuk kantoran',  'img/logitek.jpg'], 
    ['002', 'Keyboard MSI',     300000, 'Keyboard gaming MSI mekanik',          'img/msi.jpg'],
    ['003', 'Mouse Genius',     50000,  'Mouse Genius biar lebih pinter',       'img/genius.jpeg'],
    ['004', 'Mouse Jerry',      30000,  'Mouse yang disukai kucing',            'img/jerry.jpg']
]

var Name  = document.getElementsByClassName('card-title');
var Desc  = document.getElementsByClassName('card-text');
var Price = document.getElementsByClassName('card-price');
var Img   = document.getElementsByClassName('card-img-top');
// idx = 1
for (var idx = 0; idx < 4; idx++) {
    Name[idx].innerHTML = items[idx][1];
    Price[idx].innerHTML = items[idx][2];
    Desc[idx].innerHTML = items[idx][3];
    Img[idx].src = items[idx][4];
    // Img.setAttribure('class','merah')
}
