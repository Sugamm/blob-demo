# Blob Demo

How to handle BLOB data using PHP PDO. We will show you how to insert, update and select BLOB data in MySQL databases.

MySQL provides a BLOB type that can hold a large amount of data. BLOB stands for the binary large data object. The maximum value of a BLOB object is specified by the available memory and the communication package size. You can change the communication package size by using the  max_allowed_packet variable in MySQL and  post_max_size in the PHP settings.


####Create Table
```
CREATE TABLE files (
    id   INT           AUTO_INCREMENT PRIMARY KEY,
    mime VARCHAR (255) NOT NULL,
    data BLOB          NOT NULL
);
```

####Insert into table

[![IMAGE ALT TEXT HERE](https://github.com/Sugamm/blob-demo/blob/master/screenshots/db.png)]


###Select BLOB From table

[![IMAGE ALT TEXT HERE](https://github.com/Sugamm/blob-demo/blob/master/screenshots/1.png)]

---
