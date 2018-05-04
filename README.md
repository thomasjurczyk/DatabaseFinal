# TEAM MEMBERS
Thomas Jurczyk, Vyacheslav Sidorov
### Description of Project
Our project utilizes mySQL, PHP, HTML and CSS to make a note-keeping application that stores notes for each user. It uses two tables, one for username and one for notes, organizing the notes based on the time that they were created. It adds, deletes and updates notes to the mySQL database by utilizing PHP Sessions.
### Database Schema
CREATE SCHEMA databasefinaldatabase;
CREATE TABLE loginInfo(column1 VARCHAR(50));
CREATE TABLE Notes(Username VARCHAR(5o),TimeCreated DATETIME,Note VARCHAR(1000));


