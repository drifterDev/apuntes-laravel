CREATE DATABASE eloquent_laravel;

USE eloquent_laravel;

CREATE TABLE
    users(
        user_id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(50) NULL,
        created_at DATETIME,
        updated_at DATETIME,
        PRIMARY KEY(user_id)
    ) Engine = InnoDb;

CREATE TABLE
    companies(
        company_id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(20) NULL,
        created_at DATETIME,
        updated_at DATETIME,
        PRIMARY KEY(company_id)
    ) Engine = InnoDb;

CREATE TABLE
    cities(
        city_id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(20) NULL,
        created_at DATETIME,
        updated_at DATETIME,
        PRIMARY KEY(city_id)
    ) Engine = InnoDb;

CREATE TABLE
    projects (
        project_id INT NOT NULL AUTO_INCREMENT,
        city_id INT NULL,
        company_id INT NULL,
        user_id INT NULL,
        name VARCHAR(30) NULL,
        execution_date DATE NULL,
        is_active TINYINT NULL,
        created_at DATETIME NULL,
        updated_at DATETIME NULL,
        PRIMARY KEY (project_id),
        FOREIGN KEY(city_id) REFERENCES cities(city_id),
        FOREIGN KEY(user_id) REFERENCES users(user_id),
        FOREIGN KEY(company_id) REFERENCES companies(company_id)
    ) Engine = InnoDb;