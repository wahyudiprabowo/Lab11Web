# Lab11Web

Praktikum 11: PHP Framework (Codeigniter)

1. konfigurasi PHP.ini :

![image](https://user-images.githubusercontent.com/81431392/121955588-ff3a8f80-cd14-11eb-857b-59d5d7bdece5.png)

2. extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan :

![image](https://user-images.githubusercontent.com/81431392/121956150-a0294a80-cd15-11eb-95f2-40194d0e71fa.png)

3. hasil output di web server :

![image](https://user-images.githubusercontent.com/81431392/121960603-2bf1a580-cd1b-11eb-9aad-b60e3402640c.png)

4. Menjalankan CLI (Command Line Interface)
lalu jalankan syntax : 
- cd d:\xampp\htdocs\lab11_php_ci\ci4
- php spark
dan hasilnya :

![image](https://user-images.githubusercontent.com/81431392/121958040-0ca54900-cd18-11eb-9019-ab55063468cd.png)

5. Mengaktifkan Mode Debugging dan konfigurasi file env yg ada di D:\xampp\htdocs\lab11_php_ci\ci4 ubah menjadi .env dan edit nilai variable,nya :

![image](https://user-images.githubusercontent.com/81431392/121958695-cac8d280-cd18-11eb-83d7-3296ec8c4041.png)

6. contoh mengubah file home.php dengan mengahapus tanda ; (titik coma) maka akan terjadi muncul pesan Whoops! :

![image](https://user-images.githubusercontent.com/81431392/121961327-28125300-cd1c-11eb-9f2c-a0a783c88fe6.png)

7. konfigurasi Routing dan Controller yg terletak di app/config/Routes.php :

![image](https://user-images.githubusercontent.com/81431392/121962025-05346e80-cd1d-11eb-8d93-4a98959015ae.png)

menambahkan Route baru di routes.php :

![image](https://user-images.githubusercontent.com/81431392/121962512-afac9180-cd1d-11eb-9ffb-403284de1dc2.png)

 dan hasilnya pada CLI php spark routes :
 
 ![image](https://user-images.githubusercontent.com/81431392/121962643-df5b9980-cd1d-11eb-88ff-a86b878f9444.png)

hasil output di web server maka terjadi error 404 file not found karena file/page tsb tidak ada.
![image](https://user-images.githubusercontent.com/81431392/121970176-d02f1880-cd2a-11eb-9ae8-75b5b62b52f7.png)

8. membuat Controller page.php pada direktori Controller :

![image](https://user-images.githubusercontent.com/81431392/121963220-aa037b80-cd1e-11eb-83d2-ad9ea270cf02.png)

hasil outputnya :

![image](https://user-images.githubusercontent.com/81431392/121969990-6878cd80-cd2a-11eb-83b8-541bb417dc01.png)

9. auto routing :

 ![image](https://user-images.githubusercontent.com/81431392/121970833-47b17780-cd2c-11eb-8243-afddb4fc7d15.png)
 
 hasil outputnya
 
 ![image](https://user-images.githubusercontent.com/81431392/121970898-61eb5580-cd2c-11eb-8b2b-31ff5dcb1430.png)

10. membuat php.about pada direktori (app/view/about.php) :

![image](https://user-images.githubusercontent.com/81431392/121971339-606e5d00-cd2d-11eb-9ee0-baf3af7a902e.png)

11. Ubah method about pada class Controller Page :

![image](https://user-images.githubusercontent.com/81431392/121971405-8267df80-cd2d-11eb-9985-034b10edde16.png)

hasil outputnya :

![image](https://user-images.githubusercontent.com/81431392/121971466-a3303500-cd2d-11eb-87af-c3b6666c626f.png)

12. Membuat Layout Web dengan CSS header.php dan footer.php pada direktori baru app/view/template :

![image](https://user-images.githubusercontent.com/81431392/121971878-a546c380-cd2e-11eb-983c-16ef0da102b5.png)

![image](https://user-images.githubusercontent.com/81431392/121971896-b1328580-cd2e-11eb-9a72-f7495400f7b3.png)

kemudian ubah file app/view/about.php :

![image](https://user-images.githubusercontent.com/81431392/121972177-49c90580-cd2f-11eb-9d32-6459e82b7f39.png)

dan hasil outputnya :

![image](https://user-images.githubusercontent.com/81431392/121972257-7a10a400-cd2f-11eb-9184-7349bddd75e0.png)

13. Tugas Pratikum :

1. menu home :

![image](https://user-images.githubusercontent.com/81431392/121972436-f1dece80-cd2f-11eb-9974-bce22dfb02f4.png)

2. menu artikel :

![image](https://user-images.githubusercontent.com/81431392/121972487-15097e00-cd30-11eb-8d2a-fb8ebab8ee29.png)

3. menu about :

![image](https://user-images.githubusercontent.com/81431392/121972518-2783b780-cd30-11eb-9c2a-07fc06a3e348.png)

4. menu kontak :

![image](https://user-images.githubusercontent.com/81431392/121972555-3a968780-cd30-11eb-92df-90a65156f3c1.png)







