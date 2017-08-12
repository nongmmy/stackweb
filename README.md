# stackweb

ขั้นตอนการติดตั้ง 
1. download code หรือ clone จาก repo นี้
2. นำ folder ไปไว้ที่ xampp/htdocs
3. เปิด service Apache และ MySql ที่ xampp control panel
4. สร้าง database โดยเข้าไปที่ url: localhost/phpmyadmin และ import file ที่ชื่อ stack_table ที่อยุ่ใน stack_web/sql 
5. เข้าไป config ค่า host username password และ database name ที่ไฟล์ database.php ในโปรเจค stack_web 
6. เข้า http://localhost/stack_web/index.php เพื่อใช้งาน web application จำลอง stack


การใช้งาน
1. การใช้งาน method pop กดที่ปุ่ม pop และจะแสดงข้อมูลที่ด้านบนของ page
2. การใช้งาน method push ต้องใส่ข้อมูลลงใน field ที่ชื่อ data และกดปุ่ม push
3. การใช้งาน method special ต้องใส่ข้อมูลทั้งใน field data และ index และกดปุ่ม special
4. ตาราง stack data จะแสดงข้อมูลที่อยุ่ในโครงสร้าง stack
