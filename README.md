
<p align="center">
## Test Transisi
</p>

<p> Project ini berisikan jawaban untuk test backend pada PT TRANSISI. Untuk Jawaban PHP dasar saya lampirkan pada file yang bernama TestPHPdasar.php . </p>
<p> Untuk database saya lampirkan dengan file bernama db_transisi.sql . </p>
<p> Selain itu untuk keseluruhan folder dan file merupakan aplikasi laravel untuk test laravel. </p>
<p> Mohon maaf sekali untuk fungsi CRUD dan Paginate 5 belum sempat saya kerjakan </p> 
<p> Tetapi untuk point - point berikut sudah saya include kan di dalam coding nya : </p>
<p> => Migration Table Schema untuk companies table dan employees table(menggunakan foreign key merujuk pada companies). </p>
<p> => Model untuk CompanyModel dan EmployeeModel beserta dengan fillable nya. Tetapi belum saya set save logo nya ke storage/app/company. Dan belum menggunakan storage:link </p>
<p> => Validation saya sertakan menggunakan Request class bawaan laravel yaitu CompanyRequest dan EmployeeRequest beserta dengan rules required nya. </p>
<p> => Untuk login saya menggunakan bawaan laravel yaitu laravel/ui -> vue ui --auth </p>
<p> => Untuk register akun admin saya menggunakan db:seed /db seeder . Dengan akun email : admin@transisi.id dan password : transisi . </p>
<p> => Untuk authtentikasi login admin saya buat dengan middleware auth dan saya tambahkan function isAdmin pada User Model . </p>
<p> => Untuk Controller baru saya buatkan CompanyController dan EmployeeController menggunakan resource controller tetapi belum saya isi untuk function CRUD nya. </p>

    
