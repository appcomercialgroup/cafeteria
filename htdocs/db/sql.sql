CREATE TABLE usuario (
    id_usuario int(11),
    nombre_usuario varchar(20),
    correo varchar(50),
    pass_usuario varchar(50);
    
);


ALTER TABLE usuario
MODIFY COLUMN id_usuario int NOT NULL AUTO_INCREMENT,
ADD CONSTRAINT PK_Usuario PRIMARY KEY (id_usuario);


-- ALTER TABLE usuario 
--     ADD COLUMN IF NOT EXISTS id_usuario int(11),
--     ADD COLUMN IF NOT EXISTS nombre_usuario varchar(20),
--     ADD COLUMN IF NOT EXISTS correo varchar(50),
--     ADD COLUMN IF NOT EXISTS pass_usuario varchar(50),
--     MODIFY COLUMN IF EXISTS id_usuario int(11),
--     MODIFY COLUMN IF EXISTS nombre_usuario varchar(20),
--     MODIFY COLUMN IF EXISTS correo varchar(50),
--     MODIFY COLUMN IF EXISTS pass_usuario varchar(50);

CREATE TABLE preguntas_seguridad (
    id_pregunta int(11),
    id_usuario int(11),
    pregunta varchar(20),
    respuesta varchar(50),
    
); 


CREATE TABLE menu (
    id_menu int(11),
    nombre_menu varchar(50),
    id_platillo int(11)
); 


CREATE TABLE oferta (
    id_oferta int(11),
    nombre_oferta varchar(50),
    id_platillo int(11),
    estado_oferta char
); 


CREATE TABLE platillo (
    id_platillo int(11),
    nombre_platillo int(11),
    id_complemento int(11)
); 

CREATE TABLE bebida (
    id_bebida int,
    nombre_bebida varchar
); 

CREATE TABLE bebidas_platillo (
    id_bebidas_platillo int(11),
    id_bebida int(11),
    id_platillo int(11)
); 



CREATE TABLE complemento (
    id_complemento int(11),
    nombre_complemento varchar(50),
    descripcion_complemento LONGTEXT,
    precio_complemento decimal(3,2)
); 




CREATE TABLE orden (
    id_orden int(11),
    id_usuario int(11),
    fecha TIMESTAMP,
    hora TIME
   
); 

CREATE TABLE pedidos (
    id_pedido int(11),
    id_platillo int(11),
    id_orden int(11)
);


CREATE TABLE mensaje (
    id_mensaje int(11),
    nombre_emisor varchar(50),
    correo_emisor varchar(50),
   asunto varchar(50),
   mensaje varchar(255)

); 



-- ////////////////////////////////////
CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
); 
-- ////////////////////////////////////

CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
); 

CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
); 