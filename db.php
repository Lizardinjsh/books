-- CREATE DATABASE books;

CREATE TABLE Books (
    book_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    publication_year INT NOT NULL,
    availability BOOLEAN NOT NULL DEFAULT TRUEbooks
);


CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL
);


CREATE TABLE Borrowings (
    borrowing_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    book_id INT,
    borrowed_date DATE NOT NULL,
    return_date DATE,
    FOREIGN KEY (user_id) REFERENCES Users(user_id),
    FOREIGN KEY (book_id) REFERENCES Books(book_id)
);


CREATE TABLE administrators (
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL 
);


INSERT INTO Books (title, author, publication_year, availability) 
VALUES 
('Harijs Poters un Filozofu akmens', ' Dž. K. Roulinga', 1997, TRUE),
('Harijs Poters un noslēpumu kambaris', ' Dž. K. Roulinga', 1998, TRUE),
('Harijs Poters un Azkabanas gūsteknis', ' Dž. K. Roulinga', 1999, TRUE);


INSERT INTO administrators (username, password) 
VALUES 
('admin', 'password123');
