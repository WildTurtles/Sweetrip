CREATE TABLE customers (id BIGSERIAL NOT NULL, email varchar(255) NOT NULL, zipcode int8 NOT NULL, PRIMARY KEY (id));
CREATE TABLE groups (id BIGSERIAL NOT NULL, name varchar(255) NOT NULL, PRIMARY KEY (id));
CREATE TABLE groups_users (id BIGSERIAL NOT NULL, usersid int8 NOT NULL, groupsid int8 NOT NULL, PRIMARY KEY (id));
CREATE TABLE users (id BIGSERIAL NOT NULL, name varchar(255) NOT NULL, email varchar(255) NOT NULL, password varchar(255) NOT NULL, PRIMARY KEY (id));
CREATE UNIQUE INDEX customers_id ON customers (id);
CREATE UNIQUE INDEX customers_email ON customers (email);
CREATE INDEX customers_zipcode ON customers (zipcode);
CREATE UNIQUE INDEX groups_id ON groups (id);
CREATE UNIQUE INDEX users_id ON users (id);
ALTER TABLE groups_users ADD CONSTRAINT FKgroups_use557639 FOREIGN KEY (usersid) REFERENCES users (id);
ALTER TABLE groups_users ADD CONSTRAINT FKgroups_use103015 FOREIGN KEY (groupsid) REFERENCES groups (id);

