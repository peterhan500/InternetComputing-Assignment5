CREATE TABLE customers
(
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	car VARCHAR(100) NOT NULL,
	favoriteFood VARCHAR(100) NOT NULL,
	favoriteMovie VARCHAR(100) NOT NULL,
	favoriteVideoGame VARCHAR(100) NOT NULL,
	PRIMARY KEY (id)
);

INSERT IGNORE INTO customers (id, name, email, car, favoriteFood, favoriteMovie, favoriteVideoGame) VALUES
('1', 'Mike', '1234@email.com', 'Mercedes-Benz', 'Hamberger', 'Star Wars', 'Counter-Strike: Global Offensive'),
('2', 'Amy', '5678@email.com', 'BMW', 'Pizza', 'Forrest Gump', 'Angry Birds 2'),
('3', 'John', '9876@email.com', 'Ferrari', 'Pasta', 'The Shawshank Redemption', 'StarCraft'),
('4', 'Kate', '4321@email.com', 'Honda', 'Udon', 'Saving Private Ryan', 'Plants vs Zombies 2');