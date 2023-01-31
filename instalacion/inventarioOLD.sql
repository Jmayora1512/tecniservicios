-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema inventario
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `inventario` ;

-- -----------------------------------------------------
-- Schema inventario
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `inventario` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `inventario` ;

-- -----------------------------------------------------
-- Table `inventario`.`Nivel_Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Nivel_Usuario` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Nivel_Usuario` (
  `idNivel_Usuario` INT NOT NULL AUTO_INCREMENT,
  `Descripcion_Nivel` VARCHAR(30) NULL,
  PRIMARY KEY (`idNivel_Usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`Estados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Estados` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Estados` (
  `idEstados` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Estado` VARCHAR(45) NULL,
  PRIMARY KEY (`idEstados`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Usuario` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Usuario` (
  `Cedula_Usuario` INT NOT NULL,
  `Nombre_Usuario` VARCHAR(30) NULL,
  `Apellido_Usuario` VARCHAR(30) NULL,
  `Login` VARCHAR(12) NULL,
  `Clave` VARCHAR(8) NULL,
  `Correo_Usuario` VARCHAR(30) NULL,
  `Telefono_Usuario` VARCHAR(20) NULL,
  `Celular_Usuario` VARCHAR(20) NULL,
  `Fecha_Usuario` DATE NULL,
  `Direccion_Usuario` VARCHAR(45) NULL,
  `Nivel_Usuario_idNivel_Usuario` INT NOT NULL,
  `Estados_idEstados` INT NOT NULL,
  PRIMARY KEY (`Cedula_Usuario`),
  INDEX `fk_Usuario_Nivel_Usuario1_idx` (`Nivel_Usuario_idNivel_Usuario` ASC),
  INDEX `fk_Usuario_Estados1_idx` (`Estados_idEstados` ASC),
  CONSTRAINT `fk_Usuario_Nivel_Usuario1`
    FOREIGN KEY (`Nivel_Usuario_idNivel_Usuario`)
    REFERENCES `inventario`.`Nivel_Usuario` (`idNivel_Usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_Estados1`
    FOREIGN KEY (`Estados_idEstados`)
    REFERENCES `inventario`.`Estados` (`idEstados`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`Clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Clientes` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Clientes` (
  `Cedula_Cliente` INT NOT NULL,
  `Nombre_Cliente` VARCHAR(30) NULL,
  `Apellido_Cliente` VARCHAR(30) NULL,
  `Correo_Cliente` VARCHAR(30) NULL,
  `Fecha_Ingreso` DATE NULL,
  `Telefono_Cliente` VARCHAR(20) NULL,
  `Celular_Cliente` VARCHAR(20) NULL,
  `Direccion_Cliente` VARCHAR(45) NULL,
  `Estados_idEstados` INT NOT NULL,
  PRIMARY KEY (`Cedula_Cliente`),
  INDEX `fk_Clientes_Estados1_idx` (`Estados_idEstados` ASC),
  CONSTRAINT `fk_Clientes_Estados1`
    FOREIGN KEY (`Estados_idEstados`)
    REFERENCES `inventario`.`Estados` (`idEstados`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`Forma_Pago`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Forma_Pago` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Forma_Pago` (
  `idForma_Pago` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Forma_Pago` VARCHAR(20) NULL,
  PRIMARY KEY (`idForma_Pago`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`Ventas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Ventas` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Ventas` (
  `idVentas` INT NOT NULL AUTO_INCREMENT,
  `Fecha_Venta` DATE NULL,
  `Monto_Venta` DECIMAL(10,2) NULL,
  `Clientes_idClientes` INT NOT NULL,
  `Forma_Pago_idForma_Pago` INT NOT NULL,
  PRIMARY KEY (`idVentas`),
  INDEX `fk_Ventas_Clientes_idx` (`Clientes_idClientes` ASC),
  INDEX `fk_Ventas_Forma_Pago1_idx` (`Forma_Pago_idForma_Pago` ASC),
  CONSTRAINT `fk_Ventas_Clientes`
    FOREIGN KEY (`Clientes_idClientes`)
    REFERENCES `inventario`.`Clientes` (`Cedula_Cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ventas_Forma_Pago1`
    FOREIGN KEY (`Forma_Pago_idForma_Pago`)
    REFERENCES `inventario`.`Forma_Pago` (`idForma_Pago`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`Categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Categoria` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Categoria` VARCHAR(30) NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`Productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Productos` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Productos` (
  `idProductos` INT NOT NULL AUTO_INCREMENT,
  `Imagen` VARCHAR(80) NULL,
  `Codigo` VARCHAR(12) NULL,
  `Nombre` VARCHAR(45) NULL,
  `Descripcion_Productos` VARCHAR(45) NULL,
  `Precio_Costo` FLOAT NULL,
  `Precio_Venta` FLOAT NULL,
  `Stock` INT(11) NULL,
  `Fecha_Creado` DATE NULL,
  `Categoria_idCategoria` INT NOT NULL,
  PRIMARY KEY (`idProductos`),
  INDEX `fk_Productos_Categoria1_idx` (`Categoria_idCategoria` ASC),
  CONSTRAINT `fk_Productos_Categoria1`
    FOREIGN KEY (`Categoria_idCategoria`)
    REFERENCES `inventario`.`Categoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`Detalles_Ventas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Detalles_Ventas` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Detalles_Ventas` (
  `Productos_idProductos` INT NOT NULL,
  `Ventas_idVentas` INT NOT NULL,
  `Cantidad_Producto` INT NULL,
  `Monto` DECIMAL(10,2) NULL,
  PRIMARY KEY (`Productos_idProductos`, `Ventas_idVentas`),
  INDEX `fk_Productos_has_Ventas_Ventas1_idx` (`Ventas_idVentas` ASC),
  INDEX `fk_Productos_has_Ventas_Productos1_idx` (`Productos_idProductos` ASC),
  CONSTRAINT `fk_Productos_has_Ventas_Productos1`
    FOREIGN KEY (`Productos_idProductos`)
    REFERENCES `inventario`.`Productos` (`idProductos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Productos_has_Ventas_Ventas1`
    FOREIGN KEY (`Ventas_idVentas`)
    REFERENCES `inventario`.`Ventas` (`idVentas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`Proveedores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Proveedores` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Proveedores` (
  `idProveedores` INT NOT NULL AUTO_INCREMENT,
  `RIF` VARCHAR(12) NULL,
  `Nombre_Contacto` VARCHAR(30) NULL,
  `Apellido_Contacto` VARCHAR(30) NULL,
  `Nombre_Comercial` VARCHAR(45) NULL,
  `Direccion_Comercio` VARCHAR(45) NULL,
  `Fecha_Ingreso` DATE NULL,
  `Telefono` VARCHAR(20) NULL,
  `Celular_Contacto` VARCHAR(45) NULL,
  `Estados_idEstados` INT NOT NULL,
  PRIMARY KEY (`idProveedores`, `Estados_idEstados`),
  INDEX `fk_Proveedores_Estados1_idx` (`Estados_idEstados` ASC),
  CONSTRAINT `fk_Proveedores_Estados1`
    FOREIGN KEY (`Estados_idEstados`)
    REFERENCES `inventario`.`Estados` (`idEstados`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`Compras`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Compras` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Compras` (
  `idCompras` INT NOT NULL AUTO_INCREMENT,
  `Fecha_Compra` DATE NULL,
  `Monto_Compra` DECIMAL(10,2) NULL,
  `Proveedores_idProveedores` INT NOT NULL,
  PRIMARY KEY (`idCompras`),
  INDEX `fk_Compras_Proveedores1_idx` (`Proveedores_idProveedores` ASC),
  CONSTRAINT `fk_Compras_Proveedores1`
    FOREIGN KEY (`Proveedores_idProveedores`)
    REFERENCES `inventario`.`Proveedores` (`idProveedores`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`Factura_Compras`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Factura_Compras` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Factura_Compras` (
  `Numero_Factura_Compras` VARCHAR(20) NOT NULL,
  `Fecha_Factura_Compra` VARCHAR(45) NULL,
  `Compras_idCompras` INT NOT NULL,
  `Forma_Pago_idForma_Pago` INT NOT NULL,
  PRIMARY KEY (`Numero_Factura_Compras`),
  INDEX `fk_Factura_Compras_Compras1_idx` (`Compras_idCompras` ASC),
  INDEX `fk_Factura_Compras_Forma_Pago1_idx` (`Forma_Pago_idForma_Pago` ASC),
  CONSTRAINT `fk_Factura_Compras_Compras1`
    FOREIGN KEY (`Compras_idCompras`)
    REFERENCES `inventario`.`Compras` (`idCompras`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Factura_Compras_Forma_Pago1`
    FOREIGN KEY (`Forma_Pago_idForma_Pago`)
    REFERENCES `inventario`.`Forma_Pago` (`idForma_Pago`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inventario`.`Detalles_Compra`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `inventario`.`Detalles_Compra` ;

CREATE TABLE IF NOT EXISTS `inventario`.`Detalles_Compra` (
  `Compras_idCompras` INT NOT NULL,
  `Productos_idProductos` INT NOT NULL,
  `Cantidad_Compra` INT NULL,
  `Monto_Compra` DECIMAL(10,2) NULL,
  PRIMARY KEY (`Compras_idCompras`, `Productos_idProductos`),
  INDEX `fk_Compras_has_Productos_Productos1_idx` (`Productos_idProductos` ASC),
  INDEX `fk_Compras_has_Productos_Compras1_idx` (`Compras_idCompras` ASC),
  CONSTRAINT `fk_Compras_has_Productos_Compras1`
    FOREIGN KEY (`Compras_idCompras`)
    REFERENCES `inventario`.`Compras` (`idCompras`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Compras_has_Productos_Productos1`
    FOREIGN KEY (`Productos_idProductos`)
    REFERENCES `inventario`.`Productos` (`idProductos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
