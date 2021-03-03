
INSERT INTO bookinventory values(1,'The Great Gatsby', 23, 'https://cdn2.penguin.com.au/covers/original/9780141037639.jpg', 30, 2);  
INSERT INTO bookinventory values(2,'A Passage to India', 24.99, 'https://notevenpast.org/wp-content/uploads/2011/11/p2i_book.jpg', 19, 1); 
INSERT INTO bookinventory values(3,'Invisible Man', 22.99, 'https://upload.wikimedia.org/wikipedia/commons/e/ee/Invisible_Man_%281952_1st_ed_jacket_cover%29.jpg', 25, 3); 
INSERT INTO bookinventory values(4,'Juneteenth', 34.99, 'https://upload.wikimedia.org/wikipedia/commons/e/ee/Invisible_Man_%281952_1st_ed_jacket_cover%29.jpg', 23, 3); 
INSERT INTO bookinventory values(5,'Shadow and Act', 12.99, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNjxoRTMQEj9U7tBWkDKgK9S3H1kH3zyP-aA&amp;usqp=CAU', 35, 3); 
INSERT INTO bookinventory values(6,'The Lord of the Rings', 39.99, 'https://cdn2.penguin.com.au/covers/original/9780141037639.jpg', 10, 4);  
INSERT INTO bookinventory values(7,'Lolita', 14.99, 'https://cdn2.penguin.com.au/covers/original/9780141037639.jpg', 15, 5); 
INSERT INTO bookinventory values(8,'May Day', 18, 'https://cdn2.penguin.com.au/covers/original/9780141037639.jpg', 20, 2); 
INSERT INTO bookinventory values(9,'Maurice', 8.99, 'https://cdn2.penguin.com.au/covers/original/9780141037639.jpg', 33, 1); 
INSERT INTO bookinventory values(10,'catch 22', 9.99, 'https://cdn2.penguin.com.au/covers/original/9780141037639.jpg', 15, 4); 

INSERT INTO bookauthor values (1,'E.M. Forster');
INSERT INTO bookauthor values (2,'May Day');
INSERT INTO bookauthor values (3,'Ralph Ellison');
INSERT INTO bookauthor values (4,'J. R. R. Tolkien');
INSERT INTO bookauthor values (5,'Vladimir Nabokov');

update bookinventory 
set image= "https://i.ytimg.com/vi/I0KNnADHkXY/maxresdefault.jpg" 
where idBooks = 2;

update bookinventory 
set image= "https://upload.wikimedia.org/wikipedia/commons/e/ee/Invisible_Man_%281952_1st_ed_jacket_cover%29.jpg" 
where idBooks = 3;

update bookinventory 
set image= " https://images.squarespace-cdn.com/content/v1/56a3a3213b0be3eb2bfe38b7/1592502916048-C6CRY4CIK9PIAY4AR3DP/ke17ZwdGBToddI8pDm48kJK4Mm1kch8SFO9ZNkN1NT97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QHyNOqBUUEtDDsRWrJLTmN9YSRtfoTLg6dUq-6F17A0FFZK5fArcnK1IqGweyunyWChwIwkIJ_P7MaZif-uMs/Five+Things+You+Need+to+Know+About+Juneteenth.png" 
where idBooks = 4;

update bookinventory 
set image= "https://images-na.ssl-images-amazon.com/images/I/51fGVOvj9kL._SX321_BO1,204,203,200_.jpg" 
where idBooks = 5;

update bookinventory 
set image= "https://www.onlineprinters.co.uk/magazine/wp-content/uploads/2020/03/lord-of-the-rings-german-edition.jpg" 
where idBooks = 6;

update bookinventory 
set image= "https://api.time.com/wp-content/uploads/2015/07/lolita.jpeg?w=824&amp;quality=70" 
where idBooks = 7;

update bookinventory 
set image= "https://pyxis.nymag.com/v1/imgs/b8a/21d/a6e839becc747e3c28fed8488e97d86067-Leave-the-World-Behind.2x.rdeep-vertical.w245.jpg" 
where idBooks = 8;

update bookinventory 
set image= "https://m.media-amazon.com/images/M/MV5BYmMxYmRlZDQtNjMyZi00NzVlLTkzODctODZiOTE5N2I1YTU0XkEyXkFqcGdeQXVyNjEwNTM2Mzc@._V1_.jpg" 
where idBooks = 9;

update bookinventory 
set image= "https://images-na.ssl-images-amazon.com/images/I/81Gns7Yf5xL.jpg" 
where idBooks = 10;






