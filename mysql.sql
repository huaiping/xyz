CREATE TABLE IF NOT EXISTS `ci_sessions` (
    `id` varchar(128) NOT null,
    `ip_address` varchar(45) NOT null,
    `timestamp` int(10) unsigned DEFAULT 0 NOT null,
    `data` blob NOT null,
    KEY `ci_sessions_timestamp` (`timestamp`)
);

CREATE TABLE IF NOT EXISTS `students` (
    `id` int NOT NULL AUTO_INCREMENT,
    `xh` varchar(6) NOT NULL,
    `xm` varchar(16) NOT NULL,
    `xb` varchar(4) NOT NULL,
    `sfzh` varchar(18) NOT NULL,
    `fqxm` varchar(16) NOT NULL,
    `fqdh` varchar(11) NOT NULL,
    `mqxm` varchar(16) NOT NULL,
    `mqdh` varchar(11) NOT NULL,
    `xxjtzz` varchar(200) NOT NULL,
    `zkf` varchar(6) NOT NULL,
    `czbyxx` varchar(120) NOT NULL,
    `gqty` varchar(16) NOT NULL,
    `qsh` varchar(30) NOT NULL,
    `gkf` varchar(6) NOT NULL,
    `dxlqyx` varchar(120) NOT NULL,
    `lqzy` varchar(80) NOT NULL,
    `bz` varchar(60) NOT NULL,
    `rxnf` varchar(4) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `teachers` (
    `id` int NOT NULL AUTO_INCREMENT,
    `xm` varchar(16) NOT NULL,
    `xb` varchar(4) NOT NULL,
    `mz` varchar(20) NOT NULL,
    `rjxk` varchar(20) NOT NULL,
    `sfzh` varchar(18) NOT NULL,
    `cjgzsj` varchar(10) NOT NULL,
    `csny` varchar(10) NOT NULL,
    `lxdh` varchar(11) NOT NULL,
    `byyx` varchar(120) NOT NULL,
    `zy` varchar(60) NOT NULL,
    `zqxl` varchar(20) NOT NULL,
    `zqxw` varchar(20) NOT NULL,
    `xl` varchar(20) NOT NULL,
    `xw` varchar(20) NOT NULL,
    `pth` varchar(20) NOT NULL,
    `zyjszw` varchar(30) NOT NULL,
    `zszg` varchar(30) NOT NULL,
    `gwdj` varchar(30) NOT NULL,
    `bm` varchar(20) NOT NULL,
    `bz` varchar(60) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `members` (
    `id` int NOT NULL AUTO_INCREMENT,
    `account` varchar(11) NOT NULL,
    `password` varchar(64) NOT NULL,
    `name` varchar(16) NOT NULL,
    `group` varchar(20) NOT NULL,
    `status` varchar(20) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `morality` (
    `id` int NOT NULL AUTO_INCREMENT,
    `xh` varchar(6) NOT NULL,
    `xm` varchar(16) NOT NULL,
    `sfzh` varchar(18) NOT NULL,
    `dyjf` int(3) DEFAULT 0 NOT NULL,
    `dyxf` int(2) DEFAULT 0 NOT NULL,
    `sxzzsz` int(2) DEFAULT 0 NOT NULL,
    `jthd` int(2) DEFAULT 0 NOT NULL,
    `yjxxx` int(2) DEFAULT 0 NOT NULL,
    `xystwh` int(2) DEFAULT 0 NOT NULL,
    `gyld` int(2) DEFAULT 0 NOT NULL,
    `rcxw` int(2) DEFAULT 0 NOT NULL,
    `ssbx` int(2) DEFAULT 0 NOT NULL,
    `jlf` int(2) DEFAULT 0 NOT NULL,
    `kf` int(2) DEFAULT 0 NOT NULL,
    `bz` varchar(60) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
