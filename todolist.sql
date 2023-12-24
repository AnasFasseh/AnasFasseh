CREATE DATABASE todolist;
USE todolist;
CREATE TABLE todo (
id int NOT NULL AUTO_INCREMENT,
title varchar(2048) NOT NULL,
done varchar(20) NOT NULL DEFAULT '0',
created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
);

insert into todo(title, done) values ("Read the book", 0);
insert into todo(title, done) values ("Read the book jkjfhdsjkfhqjk", 1);
select * from todo;
update todo set done='1' where id=3;