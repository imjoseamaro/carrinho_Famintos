create database db_famintos;

use db_famintos;

create table tbl_comidas
(
	cd_comida int primary key auto_increment,
    nm_comida varchar(70) not null,
    vl_preco decimal (6,2) not null,
    qt_estoque int not null,
    sg_recomendado enum('S', 'N') not null
);

insert into tbl_comidas (nm_comida, vl_preco, qt_estoque, sg_recomendado)
values
(
	'coxinha',
    '6.00',
    '20',
    'S'
);

insert into tbl_comidas (nm_comida, vl_preco, qt_estoque, sg_recomendado)
values
(
	'milkshake',
    '10.00',
    '10',
    'N'
);

select * from tbl_comidas;

select count(*) from tbl_comidas;

select nm_comida, vl_preco from tbl_comidas;

select nm_comida,vl_preco from tbl_comidas;


CREATE TABLE tbl_venda(
	cd_venda int(11) primary key AUTO_INCREMENT,
    no_Ticket varchar(13) NOT NULL,
    cd_cliente int(11) NOT NULL,
    cd_comida int(11) NOT NULL,
    qt_comida int(11) NOT NULL,
    vl_item decimal(10,2) not null,
    vl_total_item decimal(10,2) GENERATED ALWAYS AS ((qt_comida * vl_item)) VIRTUAL,
    dt_venda date NOT NULL
    )
    
select * from tbl_venda;

drop table tbl_venda;


 
    