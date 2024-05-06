CREATE DATABASE IF NOT EXISTS `TaskManagement`;

CREATE TABLE IF NOT EXISTS Tasks (
    TaskID INT(11) AUTO_INCREMENT PRIMARY KEY,
    TaskName VARCHAR(100) NOT NULL,
    Description TEXT,
    DifficultyLevel INT(11),
    PriorityLevel INT(11),
    AssignedTo INT(11),
    Status VARCHAR(50),
    FOREIGN KEY (AssignedTo) REFERENCES Users(UserID)
);