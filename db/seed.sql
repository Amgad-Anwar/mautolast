INSERT INTO service(img,title,`description`)
VALUES
("1.jpg","Service one","This is the description of seervice one"),
("1.jpg","Service one","This is the description of seervice one"),
("1.jpg","Service one","This is the description of seervice one"),
("1.jpg","Service one","This is the description of seervice one"),
("1.jpg","Service one","This is the description of seervice one"),
("1.jpg","Service one","This is the description of seervice one");

INSERT INTO blog(title,s_description,l_description,main_img,internal_img,cat_id)
VALUES
("هذا عنوان المدونه","هذا هو الملخص في هذا الخبر","هذا هو الشرح الطويل في هذا الموقع",'2.jpg','2.jpg',1),
("هذا عنوان المدونه","هذا هو الملخص في هذا الخبر","هذا هو الشرح الطويل في هذا الموقع",'2.jpg','2.jpg',1),
("هذا عنوان المدونه","هذا هو الملخص في هذا الخبر","هذا هو الشرح الطويل في هذا الموقع",'2.jpg','2.jpg',1),
("هذا عنوان المدونه","هذا هو الملخص في هذا الخبر","هذا هو الشرح الطويل في هذا الموقع",'2.jpg','2.jpg',1),
("هذا عنوان المدونه","هذا هو الملخص في هذا الخبر","هذا هو الشرح الطويل في هذا الموقع",'2.jpg','2.jpg',1),
("هذا عنوان المدونه","هذا هو الملخص في هذا الخبر","هذا هو الشرح الطويل في هذا الموقع",'2.jpg','2.jpg',1),
("هذا عنوان المدونه","هذا هو الملخص في هذا الخبر","هذا هو الشرح الطويل في هذا الموقع",'2.jpg','2.jpg',1),
("هذا عنوان المدونه","هذا هو الملخص في هذا الخبر","هذا هو الشرح الطويل في هذا الموقع",'2.jpg','2.jpg',1),
("هذا عنوان المدونه","هذا هو الملخص في هذا الخبر","هذا هو الشرح الطويل في هذا الموقع",'2.jpg','2.jpg',1),
("هذا عنوان المدونه","هذا هو الملخص في هذا الخبر","هذا هو الشرح الطويل في هذا الموقع",'2.jpg','2.jpg',1),
("هذا عنوان المدونه","هذا هو الملخص في هذا الخبر","هذا هو الشرح الطويل في هذا الموقع",'2.jpg','2.jpg',1),
("هذا عنوان المدونه","هذا هو الملخص في هذا الخبر","هذا هو الشرح الطويل في هذا الموقع",'2.jpg','2.jpg',1);


INSERT INTO admin(name_admin,email,`password`,profile)
VALUES
("Ahmed karem","ak5464235@gmail.com","$2y$10$s7.54m87HerpS2X7jhrnc.pyfzw04ia4cTQfeXydzKpGMWzgv3x/q","1.jpg");


INSERT INTO cats(blog_cat)
VALUES
    ("Ahmed karem one"),
    ("Ahmed karem two"),
    ("Ahmed karem three");

INSERT INTO `team` (`id`, `name`, `job`, `facebook`, `twitter`, `img`, `created_at`) VALUES (NULL, 'Ahmed karem', 'Web Developer', 'facebook.com', 'twitter,com', '1.jpg', current_timestamp());


INSERT INTO `cars` (`id`, `img`, `name`, `price_old`, `price_new`, `s_description`, `make`, `model`, `registration_date`, `mileage`, ```condition```, `exterior_color`, `interior_color`, `drivetrain`, `l_description`, `vehicle_overview`) VALUES (NULL, '1.jpg', 'car name', '12000', '10000', 'this is small description', 'egypt', 'one', '2022', '15000', 'no condition', 'red', 'black', 'yes', 'this is Large description this is small description this is small description this is small description', 'this is small description this is small description this is small description this is small description this is small description this is small description');
