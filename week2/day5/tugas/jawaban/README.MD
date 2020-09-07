# Jawaban soal tugas 5 pekan 2

1.  ```
    CREATE DATABASE myshop;
    ```
 
2.  ```
    CREATE TABLE myshop.users (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255), email VARCHAR(255), password VARCHAR(255));
    CREATE TABLE myshop.categories (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255));
    CREATE TABLE myshop.items (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255), description VARCHAR(255), price INT, stock INT, category_id INT, FOREIGN KEY(category_id) REFERENCES categories(id));
    ```

3.  ```
    INSERT INTO myshop.users
    (name, email, password )
    VALUES
    ("John Doe", "john@doe.com", "john123"),
    ("Jane Doe", "jane@doe.com", "jenita123");
    ```
 
    ```
    INSERT INTO myshop.categories
    (name)
    VALUES
    ('gadget'),
    ('cloth'),
    ('men'),
    ('women'),
    ('branded');
    ```

    ```
    INSERT INTO myshop.items
    (name, description, price, stock, category_id)
    VALUES
    ('Sumsang b50', 'hape keren dari merek sumsang', 4000000, 100, 1),
    ('Uniklooh', 'baju keren dari brand ternama', 500000, 50, 2),
    ('IMHO Watch', 'jam tangan anak yang jujur banget', 2000000, 10, 1);
    ```

4.  a)
    ```
    SELECT id,name,email FROM myshop.users;
    ```

    b)
    ```
    SELECT * FROM myshop.items WHERE price > 1000000;
    ```

    ```
    SELECT * FROM myshop.items WHERE name LIKE '%uniklo%';
    ```
    c)
    ```
    SELECT
    myshop.items.name, myshop.items.description, myshop.items.price, myshop.items.stock, myshop.items.category_id, myshop.categories.name AS 'kategori'
    FROM
    myshop.items
    JOIN
    myshop.categories
    ON
    myshop.categories.id = myshop.items.category_id;
    ```
5.  ```
    UPDATE myshop.items SET price = 2500000 WHERE items.name LIKE '%sumsang%';
    ```