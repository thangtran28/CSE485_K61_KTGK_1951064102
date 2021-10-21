
CREATE TABLE `qlmau`.`bloods_donor` ( 
    `bd_id` INT(10) NOT NULL , 
    `bd_name` VARCHAR(50) NOT NULL , 
    `bd_sex` VARCHAR(10) NOT NULL , 
    `bd_age` INT(10) NOT NULL , 
    `bd_bgroup` VARCHAR(50) NOT NULL , 
    `bd_reg_date` DATE NOT NULL , 
    `bd_phno` INT(10) NOT NULL ) ENGINE = InnoDB;
ALTER TABLE `bloods_donor` ADD PRIMARY KEY(`bd_id`);
INSERT INTO `bloods_donor` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
 ('1', 'Trần Văn A', 'Nam', '2001', 'B', '2021-09-09', '961291281'),
 ('2', 'Nguyễn Thị B', 'Nữ', '2001', 'A', '2021-09-09', '963491245'),
 ('3', 'Vũ Văn C', 'Nam', '2001', 'A', '2021-09-09', '961223341'),
 ('4', 'Vương Thị D', 'Nữ', '2001', 'O', '2021-09-09', '962342343'),
 ('5', 'Trần Văn E', 'Nam', '2001', 'AB', '2021-09-09', '962342342');
 
