Nama : Alicia
NIM : 03081200039
Kelas : 20SI2

1.Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses table tersebut pada sidebar(30poin).
= php artisan crud:generate subscription --fields='NamaSubcription#string;Deskripsi#string;' --controller-namespace=App\Http\Controllers\Admin --route-group=admin --form-helper=html 
= membuat CRUD dengan nama subscription
= CRUD subscription merupakan layanan premium yang dimiliki oleh pengguna akun. subscriptions terdiri dari Bronze, Silver dan Gold
= mengubah tampilan icon dari crud yang dibuat, isinya NamaSubscription dan Deskripsi

2.Buatlahsebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan queryview tersebut kedalam file queryUAS.sql(20poin)
= CREATE VIEW Langganan AS
SELECT ABC.Transactionnumber as Transaksi_ID, ABC.NamaSubscription as NamaSubscription
FROM form_transactions ABC
LEFT JOIN subscriptions star on star.NamaSubcription = ABC.NamaSubscription
= membuat view dengan nama langganan, lalu terdapat 2 kolom didalamnya yaitu Transaksi_ID dan NamaSubscription
= 

3.Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknya kedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan (30)
= membuat sebuah file baru dalam views yang bernamakan tampilan.blade.php lalu membuat kolom berisikan data-data.

4.Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)


5.Simpan kode program beserta queryUAS.sqlke public repository github, tambahkan file readme.md yang  berisikan (10 Poin):
o Nama dan StudentID
o Soal dan penjelasan solusi untuk setiap soal beserta nama file yang berubah.
