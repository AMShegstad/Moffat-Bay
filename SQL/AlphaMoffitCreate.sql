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

CREATE TABLE reservation(
reservationID INT NOT NULL AUTO_INCREMENT,
customerID INT,
priceID INT,
guestNumberID INT,
roomConfigID INT,
checkInDate DATE NOT NULL,
checkOutDate DATE NOT NULL,
PRIMARY KEY(reservationID),
FOREIGN KEY(customerID) REFERENCES customers(customerID)
);

CREATE TABLE price(
priceID INT NOT NULL,
roomRate decimal NOT NULL);

CREATE TABLE guest(
guestNumberID INT NOT NULL,
guestQty INT NOT NULL);

CREATE TABLE roomConfig(
roomConfigID INT NOT NULL,
bedConfig VARCHAR(70) NOT NULL);