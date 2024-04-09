CREATE DATABASE book_lieknins;

USE book_lieknins;

CREATE TABLE books (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(155) NOT NULL,
	author VARCHAR(155) NOT NULL,
	release_date date NOT NULL,
	availability INT NOT NULL
);

CREATE TABLE user (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	username VARCHAR(155) NOT NULL,
	password VARCHAR(155) NOT NULL,
	books_taken date
);

CREATE TABLE borrowed_books (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(155) NOT NULL,
	date DATE,
	user_id INT,
	FOREIGN KEY (user_id) REFERENCES user(id)
);