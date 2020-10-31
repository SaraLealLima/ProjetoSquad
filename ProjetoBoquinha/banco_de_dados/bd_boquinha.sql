create database if not exists boquinha
default charset utf8mb4
default collate utf8mb4_general_ci;

use boquinha;

create table if not exists cadastro(
	id_cadastro int auto_increment,
    cpf varchar(100) not null unique,
    senha varchar(20) not null,
    primary key(id_cadastro)
)default charset utf8mb4
engine="InnoDB";
insert into cadastro values (null, "28381343372", "senha");
create table if not exists alimentos(
	id_alimento int auto_increment,
    nome_alimento varchar(80) not null unique,
    descricao text not null,
    porcao decimal(3, 1),
    calorias decimal(3, 1),
    carboidratos decimal(3, 1),
    proteinas decimal(3, 1),
    primary key (id_alimento)
) default charset utf8mb4
engine="InnoDB";

create table if not exists receitas(
	id_receita int auto_increment,
    nome_receita varchar(80) not null unique,
    ingredientes int not null,
    descricao text not null,
    primary key (id_receita)
)default charset utf8mb4
engine="InnoDB";
