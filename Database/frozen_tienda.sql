CREATE DATABASE IF NOT EXISTS frozen
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE frozen;

CREATE TABLE usuarios (
    id_usuario INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    rol VARCHAR(30) NOT NULL DEFAULT 'invitado',

    fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    nombre VARCHAR(100) NOT NULL,

    correo VARCHAR(150) NOT NULL UNIQUE,

    contrasena VARCHAR(255) NULL,

    CHECK (
        rol IN ('administrador', 'miembro', 'invitado')
    )

) ENGINE = InnoDB;

CREATE TABLE productos (
    id_producto INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    producto VARCHAR(100) NOT NULL,

    stock INT UNSIGNED NOT NULL DEFAULT 0,

    imagen VARCHAR(255),

    tipo VARCHAR(50) NOT NULL,

    precio DECIMAL(10,2) NOT NULL,

    activo BOOLEAN NOT NULL DEFAULT TRUE,

    CHECK (precio >= 0)

) ENGINE = InnoDB;

CREATE TABLE carrito (
    id_carrito INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    id_usuario INT UNSIGNED NOT NULL,

    id_producto INT UNSIGNED NOT NULL,

    cantidad INT UNSIGNED NOT NULL DEFAULT 1,

    FOREIGN KEY (id_usuario)
        REFERENCES usuarios(id_usuario)
        ON DELETE CASCADE,

    FOREIGN KEY (id_producto)
        REFERENCES productos(id_producto)
        ON DELETE RESTRICT,

    CHECK (cantidad > 0),

    UNIQUE (id_usuario, id_producto)

) ENGINE = InnoDB;

CREATE TABLE ventas (
    id_venta INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    id_usuario INT UNSIGNED NOT NULL,

    total DECIMAL(10,2) NOT NULL,

    metodo_pago VARCHAR(50) NOT NULL,

    fecha DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    estado VARCHAR(30) NOT NULL DEFAULT 'pendiente',

    FOREIGN KEY (id_usuario)
        REFERENCES usuarios(id_usuario)
        ON DELETE RESTRICT,

    CHECK (total >= 0),

    CHECK (
        estado IN (
            'pendiente',
            'pagada',
            'enviada',
            'entregada',
            'cancelada'
        )
    )

) ENGINE = InnoDB;

CREATE TABLE detalle_ventas (
    id_detalle INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    id_venta INT UNSIGNED NOT NULL,

    id_producto INT UNSIGNED NOT NULL,

    nombre_producto VARCHAR(100) NOT NULL,

    cantidad INT UNSIGNED NOT NULL,

    precio_unitario DECIMAL(10,2) NOT NULL,

    FOREIGN KEY (id_venta)
        REFERENCES ventas(id_venta)
        ON DELETE CASCADE,

    FOREIGN KEY (id_producto)
        REFERENCES productos(id_producto)
        ON DELETE RESTRICT,

    CHECK (cantidad > 0),

    CHECK (precio_unitario >= 0),

    UNIQUE (id_venta, id_producto)

) ENGINE = InnoDB;

CREATE INDEX idx_ventas_usuario_fecha
ON ventas(id_usuario, fecha);

CREATE INDEX idx_ventas_estado
ON ventas(estado);

CREATE INDEX idx_detalle_producto
ON detalle_ventas(id_producto);