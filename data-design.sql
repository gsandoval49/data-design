-- This is a comment test (make sure you have the space)
-- also tried writing in small caps and the went to "Code" (in toolbar) > "Refactor Code"
-- And then it made the commands in ALL CAPS
DROP TABLE IF EXISTS lexicon;
DROP TABLE IF EXISTS verseFavorite;
DROP TABLE IF EXISTS verse;
DROP TABLE IF EXISTS profile;

-- the CREATE TABLE function is a function that takes tons of arguments to layout the table's schema
-- this command creates a table
-- INT UNSIGNED means positive interger; AUTO INCREMENT means auto populates a # for profileId; and
-- NOT NULL means it's required field - NULL in the latin means none or zero (0). To make something optional
-- take out the NOT NULL command and leave it blank.
-- Keep in mind to begin and end with the PRIMARY KEY = profileId (in this case)
CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileEmail VARCHAR(128) NOT NULL,
	firstName VARCHAR (32),
	lastName VARCHAR (32),
	-- I need to make profileEmail unique so 2 people with the same email doesn't have a primary key.
	UNIQUE (profileEmail),
	-- this officiates the primary key for the entity
	PRIMARY KEY (profileId)
);