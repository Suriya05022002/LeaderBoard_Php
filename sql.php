CREATE TABLE customer_orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    customer_image VARCHAR(255),
    location VARCHAR(255),
    order_date DATE,
    status VARCHAR(50),
    amount DECIMAL(10, 2)
);
INSERT INTO customer_orders (customer_name, customer_image, location, order_date, status, amount)
VALUES 
 ('Dong Lee', 'images/Zinzu Chan Lee.jpg', 'Chennai', '2023-12-17', 'Delivered', 128.90),
 ('jackie chan', 'images/Jeet Saru.jpg', 'Covai', '2023-08-27', 'Cancelled', 235.50),
 ('Sonal', 'images/Sonal Gharti.jpg', 'Karur', '2023-03-14', 'Shipped', 210.40),
 ('Alson', 'images/Alson GC.jpg', 'Dindigul', '2024-05-25', 'Delivered', 149.70),
 ('Limbu', 'images/Sarita Limbu.jpg', 'Trichy', '2024-02-23', 'Pending', 399.99),
 ('Alex', 'images/team2.jpg', 'Tiruppur', '2024-04-23', 'Cancelled', 399.99),
 ('Jeet Saru', 'images/team3.jpg', 'Theni', '2024-05-20', 'Delivered', 399.99),
 ('Ali Khan', 'images/team1.jpg', 'Namakkal', '2024-02-30', 'Pending', 149.70),
 ('Alson', 'images/Alex Gonley.jpg', 'Madurai', '2024-06-22', 'Cancelled', 249.99);