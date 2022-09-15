create database cake_eletivas_cms;
use cake_eletivas_cms;

create table administradores (
	id int not null auto_increment,
	nome varchar(100) not null,
	login varchar(50) not null,
	senha varchar(255) not null,
	img_src varchar(255) null,
	created datetime not null default current_timestamp,
	updated datetime null on update now(),
	unique(login), primary key(id)
);

create table turmas (
	id int not null auto_increment,
	nome varchar(50) not null,
	serie tinyint not null,
	created datetime not null default current_timestamp,
	updated datetime null on update now(),
	primary key(id)
);

create table alunos (
	id int not null auto_increment,
	nome varchar(100) not null,
	matricula varchar(50) not null,
	senha varchar(255) not null,
	turma_id int not null,
	img_src varchar(255) null,
	created datetime not null default current_timestamp,
	updated datetime null on update now(),
	unique(matricula), primary key(id)
);

create table professores (
	id int not null auto_increment,
	nome varchar(100) not null,
	cpf varchar(14) not null,
	senha varchar(255) not null,
	img_src varchar(255) null,
	created datetime not null default current_timestamp,
	updated datetime null on update now(),
	unique(cpf), primary key(id)
);

create table eletivas (
	id int not null auto_increment,
	titulo varchar(50) not null,
	descricao TEXT null,
	professor_id int null,
	vagas tinyint not null default 30,
	status enum('Aberto', 'Fechado', 'Restrito', 'Oculto', 'Apagado'),
	horario enum('1° horário', '2° horário') not null,
	created datetime not null default current_timestamp,
	updated datetime null on update now(),
	primary key(id)
);
-- todas as pesquisas devem ser com where != Apagado

create table dias_eletivas (
	id int not null auto_increment,
	eletiva_id int not null,
	dia enum('Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta') not null,
	created datetime not null default current_timestamp,
	updated datetime null on update now(),
	primary key(id)
);

create table inscricoes (
	id int not null auto_increment,
	aluno_id int not null,
	eletiva_id int not null,
	created datetime not null default current_timestamp,
	updated datetime null on update now(),
	primary key(id)
);
-- beforeSave: verificar se há vagas disponpiveis e se já tem outro registro nesse horario

insert into administradores(nome, login, senha) values ('Admin default', 'admin', '$2y$10$5blYFoXMluxwTOxzH7xyVej4QhDyAeqICeB50.WCl45uQl7A1oQPi');
-- Administrador padrão