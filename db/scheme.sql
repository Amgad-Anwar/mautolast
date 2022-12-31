create table service(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    img VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    created_at DATETIME NOT NULL DEFAULT now(),
    PRIMARY KEY (id)
);

create table blog(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    s_description TEXT NOT NULL,
    l_description TEXT NOT NULL,
    main_img VARCHAR(255) NOT NULL,
    internal_img VARCHAR(255) NOT NULL,
    cat_id INT UNSIGNED,
    created_at DATETIME NOT NULL DEFAULT now(),
    PRIMARY KEY (id)
);

create table team(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    job VARCHAR(255) NOT NULL,
    facebook VARCHAR(255) NOT NULL,
    twitter VARCHAR(255) NOT NULL,
    img VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT now(),
    PRIMARY KEY (id)
);

create table contact(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    PRIMARY KEY (id)
);

create table admin(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name_admin VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `profile` VARCHAR(255) NOT NULL,
    is_super ENUM('yes','no') NOT NULL DEFAULT 'no',
    created_at DATETIME NOT NULL default now(),
    PRIMARY KEY (id)
);

create table cats(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    blog_cat VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT now(),
    PRIMARY KEY (id)
);







