create table chamadas(
    id int auto_increment,
    senha_id int null default null,
    guiche_id int null default null,
    created datetime null default null,
    finalizada enum('s','n') default 'n',
    primary key(id)
);


create table configs(
    id int auto_increment,
    video varchar(50) null default null,
    primary key(id)
);

insert into configs (video) value (null);

create table guiches(
    id int auto_increment,
    name varchar(50) null default null,
    primary key(id)
);

create table senhas(
    id int auto_increment,
    senha varchar(5) null default null,
    em_uso enum('s','n') default 'n',
    chamadas varchar(5) null default null,
    primary key(id)
);

create table tela_master(
    id int auto_increment,
    senha_id int null default null,
    guiche_id int null default null,
    som enum('s','n') default 'n',
    senha varchar(5) null default null,
    guich varchar(5) null default null,
    primary key(id)
);

insert into tela_master (id) value (1);