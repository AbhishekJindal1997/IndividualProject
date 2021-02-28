
INSERT INTO bookinventory values(1,'The Great Gatsby', 23, 'dfrefrev', 3, 2);  
INSERT INTO bookinventory values(2,'A Passage to India', 24.99, 'dfrefrev', 9, 1); 
INSERT INTO bookinventory values(3,'Invisible Man', 22.99, 'dfrefrev', 5, 3); 
INSERT INTO bookinventory values(4,'Juneteenth', 34.99, 'hvtf', 23, 3); 
INSERT INTO bookinventory values(5,'Shadow and Act', 12.99, 'ababab', 5, 3); 

INSERT INTO bookauthor values (1,'E.M. Forster');
INSERT INTO bookauthor values (2,'F. Scott Fitzgerald');
INSERT INTO bookauthor values (3,'Ralph Ellison');




 -- Updating Columns 
 ALTER TABLE bookinventory
  MODIFY image varchar(500);
  
  -- Updating Columns values 
  UPDATE bookinventory
SET image = 'https://cdn2.penguin.com.au/covers/original/9780141037639.jpg'
WHERE idBooks = 1;

UPDATE bookinventory
SET image = 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781982146702/the-great-gatsby-9781982146702_hr.jpg'
WHERE idBooks = 2;

UPDATE bookinventory
SET image = 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781982146702/the-great-gatsby-9781982146702_hr.jpg'
WHERE idBooks = 3;

UPDATE bookinventory
SET image = 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781982146702/the-great-gatsby-9781982146702_hr.jpg'
WHERE idBooks = 4;

UPDATE bookinventory
SET image = 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781982146702/the-great-gatsby-9781982146702_hr.jpg'
WHERE idBooks = 5;

