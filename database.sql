CREATE TABLE `staff` ( 
    `username` VARCHAR(30) NOT NULL ,  
    `password` VARCHAR(30) NOT NULL , 
    `full_name` VARCHAR(50) NOT NULL ,  
    `email` VARCHAR(30) NOT NULL ,  
    `phone_num` VARCHAR(15) NOT NULL ,    
    PRIMARY KEY  (`username`(30))
    ) ENGINE = InnoDB;

INSERT INTO `staff` (
    `username`, `password`, `full_name`, `email`, `phone_num`) VALUES 
    ('Qibran', '54321', 'Qibran I.', 'qibran@gmail.com', '08987654321');

INSERT INTO `staff` (`username`, `password`, `full_name`, `email`, `phone_num`) VALUES 
    ('Keenan', '12345', 'Keenan F.', 'keen@gmail.com', '08123456789');

CREATE TABLE `inventory` ( 
    `item_id` VARCHAR(10) NOT NULL ,  
    `item_name` VARCHAR(30) NOT NULL ,  
    `amount` INT(11) NOT NULL ,  
    `unit` VARCHAR(15) NOT NULL , 
    `arival_date` DATE NOT NULL ,  
    `category` VARCHAR(20) NOT NULL ,  
    `item_status` VARCHAR(20) NOT NULL , 
    `price` INT(20) NOT NULL ,    
    PRIMARY KEY  (`item_id`(10))
    ) ENGINE = InnoDB;

    INSERT INTO `inventory` (`item_id`, `item_name`, `amount`, `unit`, `arival_date`, `category`, `item_status`, `price`) VALUES 
    ('KUR', 'Chair', '200', 'units', '2016-03-11', 'Office Stationery', 'well', '75000'), 
    ('MJ01', '2x1 Office Desk', '50', 'units', '2015-12-11', 'Office Stationery', 'well', '250000'), 
    ('TNH01', 'Main Building Land', '350', 'm2', '2015-11-05', 'Building', 'well', '2750000'), 
    ('AC4370', 'Acer Laptop 4370Z', '10', 'fruit', '2015-02-07', 'Electronic', 'Damaged', '6750000'),
    ('CMPi5', 'HP Core i5 . computer', '25', 'units', '2016-05-04', 'Electronic', 'well', '12750000'), 
    ('HND01', 'Honda CR-V 2016', '3', 'units', '2016-04-01', 'Vehicle', 'Well', '570000000'), 
    ('TYT01', '2015 Toyota Camry', '5', 'units', '2015-10-10', 'Vehicle', 'well', '345000000');
