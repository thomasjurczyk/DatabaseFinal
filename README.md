# NOTE: test,test1,test2, test3, test4, test5, and test6 are the valid usernames
## TEAM MEMBERS
Thomas Jurczyk, Vyacheslav Sidorov
### Description of Project
Our project utilizes mySQL, PHP, HTML and CSS to make a note-keeping application that stores notes for each user. It uses two tables, one for username and one for notes, organizing the notes based on the time that they were created. It adds, deletes and updates notes to the mySQL database by utilizing PHP Sessions.
### Database Schema
CREATE SCHEMA databasefinaldatabase;
CREATE TABLE loginInfo(column1 VARCHAR(50));
CREATE TABLE Notes(Username VARCHAR(5o),TimeCreated DATETIME,Note VARCHAR(1000));
### ERD Diagram
See Entity Relationship Diagram.png
### CRUD Explanation
The mysql command that creates new records is found in processNewNote.php on line 24
The mysql command that reads existing records is found in readNote.php on line 35
The mysql command that updates existing records is found in processUpdatedNote.php on line 28
The mysql command that deletes existing records is found in deleteNote.php on line 24
### Video Link
https://youtu.be/cLIe0GqazII