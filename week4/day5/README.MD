# Deploy Laravel

1. Deploy yaitu membuat aplikasi kita menjadi online dan dapat dilihat dengan sebuah domain di internet.

2. Terdapat banyak opsi untuk deploy aplikasi web laravel kita di antaranya menggunakan share hosting, menyewa server VPS, dan heroku.

3. Pada video tutorial kali ini akan didemokan cara deploy laravel ke share hosting: 

    https://www.youtube.com/watch?v=yfaSGjTzU_I

4. Karena  menggunakan share hosting mesti berbayar untuk membeli/sewa hosting terlebih dahulu, maka kita bisa coba opsi yang gratis yaitu menggunakan Heroku. Tutorialnya dapat diikuti di video berikut: 

    https://www.youtube.com/playlist?list=PL1aMeb5UP_PG1c7KcB-5RGjN8C5q5kzWX

5. Pada tutorial IDStack : deploy laravel ke heroku  terdapat requirement untuk install Postgresql sebagai pengganti mysql di project Laravel kita. 

    Berikut video tutorial untuk instalasi postgresql dan memasangkannya ke project Laravel : 

    https://www.youtube.com/watch?v=MOxedQDjjTk

6. Jika mendapat error seperti ini ketika melakukan migrate dengan postgresql: 
maka yang harus dilakukan adalah mengubah php.ini

7. file php.ini dapat kita buka melalui xampp >apache>config>PHP (php.ini)

8. di dalam file php ini tersebut, cari lah menggunakan Ctrl+F dengan kata kunci pdo_pgsql. 

    uncomment baris tersebut dengan menghilangkan tanda semikolon ";". 
    
    Setelah itu restart xampp apache kalian maka error sudah teratasi.

