<h1>Yii2 Blog</h1>

Web Application yang bersifat microservice. 
Bertujuan membuat blog berbasis Docker Containerization.

<strong>Dependency yang digunakan</strong>
1. docker version 19.03.6, build 369ce74a3c
2. docker-compose version 1.17.1, build unknown
3. Nginx sebagai web server
4. Mysql 5.7 sebagai database.
5. Adminer sebagai database client. 

<strong>Yii2 Extension</strong>
1. Yii2 Admin, By Cak Munir
2. Yii2 Mimin, By Om Hafid

<strong>Cara menggunakan</strong>

1. Sesuaikan setting environment di .env
2. Jalankan <code>composer update -vvv</code> di folder <code>yii2</code>
2. Jalankan docker menggunakan perintah pada terminal / cmd:
    - cd ~path-to/company-yii2-blog
    - docker-compose up -d
3. Jika berhasil, check dengan <code>docker ps --format '{{.Names}}' </code> 
Pastikan container-container berikut exist: <code>webserver-nginx php-yii2 adminer db</code>
4. Untuk menggunakan fasilitas user management yang di sediakan oleh: <a href="https://github.com/mdmsoft/yii2-admin">Yii2 Admin By  Cak Munir</a>, maka 
lakukan migrasi.
<code>yii migrate --migrationPath=@mdm/admin/migrations</code> untuk menu manager, dan 
<code>yii migrate --migrationPath=@yii/rbac/migrations</code> untuk RBAC
5. Untuk fasilitas user management yang simple, biasanya untuk admin yang simple
by <a href="https://github.com/hscstudio/yii2-mimin">Yii2 Mimin By Hafid Mukhlasin</a>,
maka lakukan migrasi <code>yii migrate --migrationPath=@hscstudio/mimin/migrations</code>
 

Akses ke adminer:

Melalui browser internet : akses ke IP local anda e.g: <code>http://10.60.36.60:8080</code>. Kemudian masukkkan input data berikut.
        
<code>
    System: MySQL; 
    Server: 10.60.36.60:6033; 
    Username:root; 
    Password:root; 
    Database:db
</code>