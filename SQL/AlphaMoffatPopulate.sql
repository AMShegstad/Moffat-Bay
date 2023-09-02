use moffat;

INSERT INTO price (priceID, roomRate)
VALUES (1, 115.00);
INSERT INTO price (priceID, roomRate)
VALUES (2, 150.00);
INSERT INTO price (priceID, roomRate)
VALUES (3, 85.00);

INSERT INTO guest (guestNumberID, guestQty)
VALUES (1, 1);
INSERT INTO guest (guestNumberID, guestQty)
VALUES (2, 2);
INSERT INTO guest (guestNumberID, guestQty)
VALUES (3, 3);
INSERT INTO guest (guestNumberID, guestQty)
VALUES (4, 4);
INSERT INTO guest (guestNumberID, guestQty)
VALUES (5, 5);

INSERT INTO roomConfig (RoomConfigID, bedConfig)
VALUES (1, 'Double Full');
INSERT INTO roomConfig (RoomConfigID, bedConfig)
VALUES (2, 'Queen');
INSERT INTO roomConfig (RoomConfigID, bedConfig)
VALUES (3, 'Double Queen');
INSERT INTO roomConfig (RoomConfigID, bedConfig)
VALUES (4, 'King');

INSERT INTO Customers (lastName, firstName, email, phone, pass)
VALUES ('Bell', 'Timmy', 'FrankieLikesIt@tuber.org', '234-254-5548', 'Hotlegs544');
INSERT INTO Customers (lastName, firstName, email, phone, pass)
VALUES ('Charles', 'Michael', 'MikeyEatsAnything@Quacks.gov', '548-987-3654', '2Boatsand3Hoes');
INSERT INTO Customers (lastName, firstName, email, phone, pass)
VALUES ('Cheryl', 'McEntire', 'MoreFancyThanReba@haters.org', '651-598-3669', '5Dogs1Bun');

INSERT INTO reservation (customerID, priceID, guestNumberID, roomConfigID, checkInDate, checkOutDate)
VALUES (1, 2, 1, 1, '2023-12-25', '2024-01-01');
INSERT INTO reservation (customerID, priceID, guestNumberID, roomConfigID, checkInDate, checkOutDate)
VALUES (2, 1, 2, 2, '2023-11-25', '2023-12-01');
INSERT INTO reservation (customerID, priceID, guestNumberID, roomConfigID, checkInDate, checkOutDate)
VALUES (3, 2, 3, 3, '2023-09-25', '2023-10-01');
INSERT INTO reservation (customerID, priceID, guestNumberID, roomConfigID, checkInDate, checkOutDate)
VALUES (1, 3, 4, 4, '2023-11-22', '2023-12-01');

