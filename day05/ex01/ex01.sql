--CHARACTER(n)	Character string. Fixed-length n
--VARCHAR(n) or CHARACTER VARYING(n)	Character string. Variable length. Maximum length n
--BINARY(n)	Binary string. Fixed-length n
--BOOLEAN	Stores TRUE or FALSE values
--FLOAT(p) Approximate numerical, mantissa precision 16
--DATE  	YYYY-MM-DD
--TIME 	Stores hour, minute, and second values

CREATE TABLE ft_table (
    id INT PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    login VARCHAR(8) NOT NULL DEFAULT 'toto',
    access ENUM('staff', 'student', 'other') NOT NULL,
    creation_date DATE NOT NULL
)