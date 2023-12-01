# Membuat user baru untuk pabwe di database

CREATE USER 'userpabwe'@'localhost' IDENTIFIED BY 'pabwe';

CREATE DATABASE proyek_pabwe;

# GRANT ALL PRIVILEGES ON proyek_pabwe.* TO 'userpabwe'@localhost;

# Membuat tabel adminModel-panel

CREATE TABLE admin (
    username varchar(20) primary key ,
    first_name varchar(15) not null ,
    last_name varchar(15) not null ,
    password varchar(66) not null ,
    profile_picture mediumblob,
    created_at TIMESTAMP default current_timestamp,
    updated_at timestamp default current_timestamp,
    created_by timestamp default current_timestamp
);

alter table admin modify column created_by varchar(20) not null ;

show tables ;

create table data_institut (
    nama_institut varchar(22) primary key default 'Institut Teknologi Del',
    akreditasi varchar(6),
    link_website varchar(50)
);

alter table data_institut add column email varchar(50);

alter table data_institut add column contact_number varchar(14);

alter table data_institut add column link_instagram varchar(50);

alter table data_institut add column link_facebook varchar(50);

create table testimoni_alumni (
    nim varchar(8) primary key,
    nama varchar(50) not null ,
    prodi varchar(50) not null , # sengaja kubuat panjang, siapa tau suatu saat nanti ada prodi dengan nama panjang
    mahasiswa_aktif boolean not null,
    foto_profil mediumblob,
    angkatan int not null ,
    pesan varchar(500) not null ,
    created_by varchar(20) not null,
    created_at timestamp default current_timestamp,
    foreign key (created_by) references admin(username)
);
