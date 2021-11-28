CREATE TABLE usuario (
    id_usuario int,
    nombre_usuario varchar(20),
    pass_usuario varchar(50)
); 


CREATE TABLE menu (
    id_menu int,
    nombre_menu varchar,
    id_platillo int
); 


CREATE TABLE oferta (
    id_oferta int,
    nombre_oferta varchar,
    id_platillo int
); 


CREATE TABLE platillo (
    id_platillo int,
    nombre_platillo int
); 

CREATE TABLE bebida (
    id_bebida int,
    nombre_bebida varchar
); 

CREATE TABLE complemento (
    id_complemento int,
    nombre_complemento varchar,
    descripcion_complemento varchar
); 


CREATE TABLE complemento_platillo (
    id_complemento_platillo int,
    id_complemento int,
    id_platillo int
); 


CREATE TABLE venta (
    id_venta int,
    id_usuario int,
    id_orden int
   
); 





CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
); CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
); CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
); 