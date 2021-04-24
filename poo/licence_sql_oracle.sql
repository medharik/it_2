-- select * from user_constraints
-- where lower(table_name) = 'classe'
create table classe(
id number primary key 
nom VARCHAR2(50) unique not unique

)
create table etudiant(
id number ,
nom VARCHAR2(40) not null,
prenom char(40),
na FLOAT ,
genre char(5) default 'homme',
classe_id number ,
constraint pk_etd  PRIMARY KEY (id) ,
CONSTRAINT uc_n_p UNIQUE(nom,prenom),
CONSTRAINT  ck_note check ( na BETWEEN 0 and 20 ),
CONSTRAINT ck2 CHECK ( genre in ('homme','femme')),
CONSTRAINT fk_classe_etd foreign key(classe_id) references classe(id) 
)
-- alter table etudiant add   classe_id2 number
-- alter table etudiant drop COLUMN classe_id2
-- alter table etudiant add CONSTRAINT fk_classe_etd FOREIGN KEY (classe_id)
-- references classe(id)
-- alter table etudiant modify prenom varchar2(30)
-- desc etudiantclasse(id)
