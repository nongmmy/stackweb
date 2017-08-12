# stackweb

ขั้นตอนการติดตั้ง 
1. download code หรือ clone จาก repo นี้ https://github.com/nongmmy/stackweb
2. ชื่อของ folder ที่เก็บ code ต้องเป็น stackweb และนำ folder ไปไว้ที่ xampp\htdocs
3. เปิด xampp control panel และ start service Apache และ MySql 
4. สร้าง database โดยเข้าไปที่ url: http://localhost/phpmyadmin และ import file ที่ชื่อ stack_table ที่อยุ่ใน stackweb/sql 
5. เข้าไป config ค่า host username password และ database name ที่ไฟล์ database.php ในโปรเจค stackweb 
6. เข้า http://localhost/stackweb/index.php เพื่อใช้งาน web application จำลอง stack


การใช้งาน
1. การใช้งาน method pop กดที่ปุ่ม pop และจะแสดงข้อมูลที่ด้านบนของ page
2. การใช้งาน method push ต้องใส่ข้อมูลลงใน field ที่ชื่อ data และกดปุ่ม push
3. การใช้งาน method special ต้องใส่ข้อมูลทั้งใน field data และ index และกดปุ่ม special
4. ตาราง stack data จะแสดงข้อมูลที่อยุ่ในโครงสร้าง stack 
5. ข้อมูลที่อยุ่ด้านบนสุดคือข้อมูลที่เข้าไปที่หลังสุด เมื่อเรา pop ก็จะได้ข้อมูลนั้นออกมาก่อน (fist in, last out)
