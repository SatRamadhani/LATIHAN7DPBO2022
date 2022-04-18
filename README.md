# LATIHAN7DPBO2022
### Saya [Muhammad Satria Ramadhani - 2005128] mengerjakan evaluasi [Latihan Praktikum 07] dalam mata kuliah [Desain dan Pemrograman Berorientasi Objek] untuk keberkahan-Nya, maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Pengerjaan Latihan

*Maaf kalau bahasanya berbelit-belit, entah kenapa agak susah untuk menjelaskan latihan yang ini dalam bentuk tulisan.*

1. **Menambah data menggunakan tombol "Add"**. Cara yang dilakukan adalah menambah fungsi "addTask" pada class Task.php, dengan konfigurasi VALUES untuk MySQL didapatkan dari *form* POST. Setelah itu, metode POST dicek di awal index.php, yang mana jika sudah di-set (isset()) berarti fungsi perlu dijalankan.

2. **Menghapus data menggunakan tombol "Hapus"**. Cara yang dilakukan adalah menambah fungsi "deleteTask" pada class Task.php, dengan konfigurasi "id" untuk MySQL didapatkan dari *form* GET "id_hapus". Setelah itu, metode GET dicek di awal index.php, yang mana jika sudah di-set (isset()) berarti fungsi perlu dijalankan.

3. **Mengubah status data menggunakan tombol "Selesai"**. Cara yang dilakukan adalah menambah fungsi "updateTask" pada class Task.php, dengan konfigurasi "id" untuk MySQL didapatkan dari *form* GET "id_status". Setelah itu, metode GET dicek di awal index.php, yang mana jika sudah di-set (isset()) berarti fungsi perlu dijalankan.

***Bonus***

**Note**: Semua cara yang dilakukan sama untuk mengubah urutan data, yakni dengan mengubah setiap nama kolom menjadi *link* untuk kemudian digunakan sebagai metode GET. Nilai dari metode tersebut kemudian dijadikan *arguments* untuk fungsi baru "getSortedTask", dimana nilai tersebut digunakan untuk ORDER BY. Untuk Reset urutan data, urutan data tidak menggunakan ORDER BY.

4. **Membuat tombol "Subject" untuk mengurutkan tampilan data sesuai "subject" secara Ascending**. Di dalam program, tombol Subject diintegrasikan dengan nama kolom "Subject", sehingga pengguna bisa mengurutkannya dengan mudah.

5. **Membuat tombol "Priority" untuk mengurutkan tampilan data sesuai "priority" secara Ascending**. Di dalam program, tombol Priority diintegrasikan dengan nama kolom "Priority", sehingga pengguna bisa mengurutkannya dengan mudah.

6. **Membuat tombol "Deadline" untuk mengurutkan tampilan data sesuai "deadline" secara Ascending**. Di dalam program, tombol Deadline diintegrasikan dengan nama kolom "Deadline", sehingga pengguna bisa mengurutkannya dengan mudah.

7. **Membuat tombol "Status" untuk mengurutkan tampilan data sesuai "status" secara Ascending**. Di dalam program, tombol Status diintegrasikan dengan nama kolom "Status", sehingga pengguna bisa mengurutkannya dengan mudah.

8. **Membuat tombol "Reset" untuk mengembalikan sesuai urutan awal data**. Di dalam program, tombol Reset dibuat di sebelah judul "To-Do List" agar mudah terlihat. Untuk metode pengurutannya sendiri seperti biasa, tidak menggunakan ORDER BY khusus.

## Hasil Program

Tampilan awal.

![1](https://user-images.githubusercontent.com/72297396/161472397-79d39838-bc95-49d2-8a8d-d0dfb3d2e15b.png)

Tampilan setelah data ditambah.

![2](https://user-images.githubusercontent.com/72297396/161472458-8d1f5361-2759-426c-9211-b14f9f11d8b7.png)

Tampilan setelah data no. 1 diperbarui statusnya menjadi "Selesai".

![3](https://user-images.githubusercontent.com/72297396/161472501-83e48cac-cab3-4101-96e5-46b35d8de55d.png)

Tampilan setelah data no. 3 dihapus.

![4](https://user-images.githubusercontent.com/72297396/161472548-0f62a9ee-1581-4f50-a298-4bb3bc0e665a.png)

Tampilan ketika data diurutkan berdasarkan "Subject" (dengan menekan nama kolomnya).

![5](https://user-images.githubusercontent.com/72297396/161472609-603f3fe8-bfb6-4159-ab49-54b797df9476.png)

Tampilan ketika data diurutkan berdasarkan "Priority" (dengan menekan nama kolomnya).

![6](https://user-images.githubusercontent.com/72297396/161472629-74f80b9d-01a4-4fa5-bf71-341a50538623.png)

Tampilan ketika data diurutkan berdasarkan "Deadline" (dengan menekan nama kolomnya).

![7](https://user-images.githubusercontent.com/72297396/161472654-55a78d52-7a78-454b-a3e4-6df01237a87d.png)

Tampilan ketika data diurutkan berdasarkan "Status" (dengan menekan nama kolomnya).

![8](https://user-images.githubusercontent.com/72297396/161472725-52cfee65-33af-4db3-bba6-b6ce5c6bac9c.png)

Tampilan ketika urusan data dikembalikan (dengan menekan tombol "Reset").

![9](https://user-images.githubusercontent.com/72297396/161472738-30a788ca-aab3-42bc-8e8c-371b7271e826.png)
