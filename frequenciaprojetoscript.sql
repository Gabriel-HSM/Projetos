CREATE DATABASE frequencia_projeto;
USE frequencia_projeto;

create table professor(
id_professor int auto_increment primary key,
nome varchar(100) not null,
email varchar(100),
telefone varchar(20)
);

create table turma(
id_turma int auto_increment primary key,
nome varchar(50),
dia_semana varchar(50),
horario time,
id_professor int,
foreign key (id_professor) references professor(id_professor)
);

create table aluno (
id_aluno int auto_increment primary key,
nome varchar(100),
telefone varchar(20),
email varchar(100),
status varchar(20),
id_turma int,
foreign key (id_turma) references turma(id_turma)
);

create table aula(
id_aula int auto_increment primary key,
data_aula date,
teve_aula varchar(20),
id_turma int,
id_professor int,
foreign key (id_turma) references turma(id_turma),
foreign key (id_professor) references professor(id_professor)
);

create table frequencia(
id_frequencia int auto_increment primary key,
id_aluno int,
id_aula int,
status_frequencia varchar(20),
foreign key (id_aluno) references aluno(id_aluno),
foreign key (id_aula) references aula(id_aula)
);

create table reposicao(
id_reposicao int auto_increment primary key,
id_frequencia int,
data_reposicao date,
status_reposicao varchar(20),
sugesta0_data date,
foreign key (id_frequencia) references frequencia(id_frequencia)
);