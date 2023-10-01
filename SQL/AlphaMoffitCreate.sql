Drop DATABASE if exists moffat;
Create DATABASE moffat;
Use moffat;

CREATE TABLE customers(
customerID INT NOT NULL AUTO_INCREMENT,
lastName VARCHAR(70) NOT NULL,
firstName VARCHAR(70) NOT NULL,
email VARCHAR(70),
phone VARCHAR(255),
pass VARCHAR(255) NOT NULL,
PRIMARY KEY(customerID));

DROP TABLE IF EXISTS reservation;
CREATE TABLE reservation(
reservationID int AUTO_INCREMENT NOT NULL,
customerID int,
priceID int,
guestNumberID int,
roomConfig ENUM ('double Full', 'queen', 'double Queen', 'king') NOT NULL,
checkInDate date,
checkOutDate date,
email VARCHAR(70),
PRIMARY KEY (reservationID),
FOREIGN KEY (customerID) REFERENCES customers(customerID)
);
CREATE TABLE price(
priceID INT NOT NULL,
roomRate decimal NOT NULL);

CREATE TABLE guest(
guestNumberID INT NOT NULL,
guestQty INT NOT NULL);

CREATE TABLE roomConfig(
roomConfig INT NOT NULL,
bedConfig VARCHAR(70) NOT NULL);