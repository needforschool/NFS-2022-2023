<?php


// INT   ,   TINYINT  (-128 à 127) ,  SMALLINT(- 32768 à 32767)  ,  MEDIUMINT, INT, BIG INT
// FLOAT
// VARCHAR  255
// TEXT  , TINYTEXT,  MEDIUMTEXT ,    LONGTEXT
// DATE  , DATETIME,   TIME
    // AAAA-MM-JJ HH:MM:SS
// user

// id (clé primaire pour l'auto-incrémentation)
// username
// email
// birthdate (date de naissance)
// created_at
// modified_at  (null)
// description  (null)
// adresse   (null)
// code postal (null)
// ville  (null)


//////////////
/// // REQUEST   SELECT
////////////////////////
///
/// /*
// SELECT nom_collone1 FROM table
// WHERE nomCollone = 'string'
// AND / OR nomCollone > integer
// ORDER BY collone   ASC/DESC
// LIMIT 10 OFFSET 0

///////////////////////////////////////////////
// SELECT * FROM city
// SELECT Name,CountryCode FROM city
// SELECT * FROM city WHERE CountryCode = 'FRA' AND Population > 200000;
// SELECT * FROM city WHERE CountryCode = 'FRA' OR Population > 200000;
// SELECT * FROM city WHERE Population BETWEEN 300000 AND 400000;
// SELECT * FROM city WHERE CountryCode = 'FRA' ORDER BY Name DESC;
// SELECT * FROM city WHERE CountryCode = 'CHN' ORDER BY District ASC;
// SELECT * FROM city WHERE CountryCode = 'CHN' ORDER BY District ASC, Population DESC LIMIT 10 OFFSET 10;
// SELECT * FROM city WHERE Name LIKE '%ab';
// SELECT DISTINCT District FROM `city` ORDER BY District ASC;

/////// Fonction d'aggregation
// SELECT COUNT(ID) FROM `city` WHERE Population BETWEEN 300000 AND 400000;
// SELECT COUNT(ID) FROM city WHERE CountryCode = 'ARG';
// SELECT SUM(Population) FROM city;
// SELECT AVG(Population) FROM city WHERE CountryCode = 'ARG';
// SELECT MIN(Population) FROM city WHERE CountryCode = 'ARG';
// SELECT MAX(Population) FROM city WHERE CountryCode = 'ARG';

// SELECT CountryCode, AVG(Population) FROM city GROUP BY CountryCode;
// SELECT c.id AS i,c.Name AS title, c.CountryCode AS code FROM city AS c;

//  SELECT * FROM country WHERE Region = 'Caribbean' ORDER BY Name ASC;
// SELECT Name, Code FROM country WHERE Continent = 'Africa' AND Population BETWEEN 1000000 AND 10000000 ORDER BY Name ASC;


// INSERT INTO table (Name,col2,col3) VALUES ('tartenpoin','val2','val3');

// Datetime => NOW()

//UPDATE city
//SET Name = 'jojo', District = 'dede'
//WHERE col = 'value'

// UPDATE country
// SET GovernmentForm = 'Dictature', HeadOfState = 'trouduc'
// WHERE Code = 'FRA'

// DELETE FROM country WHERE Continent = 'North America';


//======================================================================
// RAPPEL
//======================================================================

/*--insert
	INSERT INTO table_name
	VALUES ('val1', 'val2', 'val3');

	INSERT INTO table_name (col1, col2, col3)
	VALUES ('val1', 'val2', 'val3');

	INSERT INTO table_name (col1, col2, col3)
	VALUES ('val1', 'val2', 'val3'), ('val4', 'val5', 'val6');

--update
	UPDATE table_name
	SET col1 = 'val_bla'
	WHERE col3 = 'une_val';

--delete
	DELETE FROM table_name
	WHERE col2 > 89
	AND col3 = 'une_val';

--select
	SELECT * FROM table_name;

	SELECT col1, col2, col5 FROM table_name
	WHERE col3 = "test";

	SELECT col1, col5, col3 FROM table_name
	WHERE col2 > 39 AND col3 = "yo"
	ORDER BY col1 DESC
	LIMIT 30;

	SELECT * FROM table_name
	WHERE col6 LIKE "%y%"
	ORDER BY col6 ASC;
*/