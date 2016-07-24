-- This is a comment test (make sure you have the space)
-- also tried writing in small caps and the went to "Code" (in toolbar) > "Refactor Code"
-- And then it made the commands in ALL CAPS
DROP TABLE IF EXISTS lexicon;
DROP TABLE IF EXISTS verseFavorite;
DROP TABLE IF EXISTS verse;
DROP TABLE IF EXISTS profile;

-- this is a comment in SQL (yes, the space is needed!)
-- these statements will drop the tables and re-add them
-- CREATE TABLE command creates a table
-- INT UNSIGNED means positive interger; AUTO INCREMENT means auto populates a # for profileId; and
-- NOT NULL means it's required field - NULL in the latin means none or zero (0). To make something optional
-- take out the NOT NULL command and leave it blank.
-- Keep in mind to begin and end with the PRIMARY KEY = profileId (in this case)

-- the CREATE TABLE function is a function that takes tons of arguments to layout the table's schema
CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileEmail VARCHAR(128) NOT NULL,
	-- not null is excluded, so it's not required, this is optional
	firstName VARCHAR (32),
	lastName VARCHAR (32),
	-- I need to make profileEmail unique so 2 people with the same email doesn't have a primary key.
	UNIQUE (profileEmail),
	-- this officiates the primary key for the entity
	PRIMARY KEY (profileId)
);

-- create table for verse entity
CREATE TABLE verse (
	-- this is another primary key in the verse entity table
	verseId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	-- content for the specific verses, gave a lot of characters for content,
	verseContent VARCHAR (1000) NOT NULL,
	-- I'm unsure if I'm suppose to make an index for verseContent here
	-- so i'll just end it here and make the primary key and continue to make the weak entity below
	-- DECIDED TO MAKE verseId A UNIQUE CHARACTER, no duplicate data
	UNIQUE(verseId),
	-- THIS CREATES THE PRIMARY KEY
	PRIMARY KEY(verseId)
);

-- create verseFavorite weak entity (a m-to-n for profile and an m-to-m relationship with verse entity)
CREATE TABLE verseFavorite (
	-- these aren't auto increment because they're foreign keys
	-- ...UNSURE if i need to auto increment...
	verseFavoriteProfileId INT UNSIGNED NOT NULL,
	verseFavoriteVerseId INT UNSIGNED NOT NULL,
	verseFavoriteDate DATETIME NOT NULL,
	-- index the foreign keys
	INDEX(verseFavoriteProfileId),
	INDEX(verseFavoriteVerseId),
	-- create the foreign key relations to verse entity and profile entity
	FOREIGN KEY(verseFavoriteVerseId) REFERENCES verse(verseId),
	FOREIGN KEY(verseFavoriteProfileId) REFERENCES profile(profileId),
	-- create a composite key with the two foreign, which will be known as a PRIMARY in this case
	PRIMARY KEY(verseFavoriteProfileId, verseFavoriteVerseId)
);

