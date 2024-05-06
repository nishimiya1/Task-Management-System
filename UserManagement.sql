CREATE DATABASE IF NOT EXISTS `UserManagement`;

CREATE TABLE Departments (
    DepartmentID INT PRIMARY KEY,
    DepartmentName VARCHAR(100)
);

CREATE TABLE Roles (
    RoleID INT PRIMARY KEY,
    RoleName VARCHAR(100),
    PageRestrictions VARCHAR(255) --  might want to adjust the size depending on requirements
);

-- Create Users Table
CREATE TABLE Users (
    UserID INT PRIMARY KEY,
    Username VARCHAR(100),
    Password VARCHAR(100),
    Email VARCHAR(100),
    FullName VARCHAR(100),
    DepartmentID INT,
    RoleID INT,
    FOREIGN KEY (DepartmentID) REFERENCES Departments(DepartmentID),
    FOREIGN KEY (RoleID) REFERENCES Roles(RoleID)
);

-- Create Activities Log Table
CREATE TABLE ActivitiesLog (
    LogID INT PRIMARY KEY,
    UserID INT,
    ActivityDescription VARCHAR(255),
    Timestamp TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);