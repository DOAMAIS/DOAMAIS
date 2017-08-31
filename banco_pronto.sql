create table usuario(
	id int(4) not null PRIMARY KEY auto_increment,
	nome varchar(70) not null,
	email varchar(80),
	tipo_sanguineo varchar(3) not null,
	senha varchar(100) not null,
	tipo_usuario varchar(1) not null,
	foto_perfil varchar(20)
);
create table entidades(
	id int(4) not null auto_increment primary key,
	id_usuario int(4) not null,
	foreign key(id_usuario) references usuario(id),
	nome varchar(70) not null,
	endereco varchar(70) not null,
	telefone varchar(11),
	horario varchar(70)
);
create table depoimento(
	id int(4) PRIMARY KEY not null auto_increment,
	id_usuario int(4) not null,
	foreign key(id_usuario) references usuario(id),
	depoimento varchar(500)
);
