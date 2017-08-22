create table usuario(
	id int(4) not null PRIMARY KEY auto_increment,
	nome varchar(70) not null,
	endereco varchar(120),
	email varchar(60),
	telefone varchar(14),
	tipo_sanguineo varchar(3) not null,
	senha varchar(10) not null,
	id_tipo_usuario int(4) not null,
	foreign key(id_tipo_usuario) references tipo_usuario(id)
);
create table tipo_usuario(
	id int(4) not null PRIMARY KEY auto_increment,
	nome varchar(70),
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
	depoimento varchar(255)
);