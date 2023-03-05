CREATE TABLE birth_data (
	id	INT NOT NULL UNIQUE AUTO_INCREMENT,
	name	varchar(255),
	name_m	varchar(255),
	sex	varchar(255),
	DOB	varchar(255),
	placeOfBirth	varchar(255),
	placeOfBirth_m	varchar(255),
	nameOfMother	varchar(255),
	nameOfMother_m	varchar(255),
	nameOfFather	varchar(255),
	nameOfFather_m	varchar(255),
	motherAadharNo	bigint(12),
	fatherAadharNo	bigint(12),
	addressDuringBirth	varchar(255),
	addressDuringBirth_m	varchar(255),
	permanentAddressOfParents	varchar(255),
	permanentAddressOfParents_m	varchar(255),
	remark	varchar(255),
	dateOfRegistration	varchar(255),
	dateOfIssue varchar(255),
	PRIMARY KEY(id)
);

CREATE TABLE marriage_data (
	id	INT NOT NULL UNIQUE AUTO_INCREMENT,
	husbandName	varchar(255),
	husbandName_m	varchar(255),
	wifeName	varchar(255),
	wifeName_m	varchar(255),
	husbandAge	INT,
	wifeAge	INT,
	husbandAadharNo bigint(12),
	wifeAadharNo bigint(12),
	husbandReligion	varchar(255),
	husbandReligion_m	varchar(255),
	wifeReligion	varchar(255),
	wifeReligion_m	varchar(255),
	husbandNationality	varchar(255),
	husbandNationality_m	varchar(255),
	wifeNationality	varchar(255),
	wifeNationality_m	varchar(255),
	husbandFatherName	varchar(255),
	husbandFatherName_m	varchar(255),
	wifeFatherName	varchar(255),
	wifeFatherName_m	varchar(255),
	husbandAddress	varchar(255),
	husbandAddress_m	varchar(255),
	wifeAddress	varchar(255),
	wifeAddress_m	varchar(255),
	dateOfMarriage	varchar(255),
	placeOfMarriage	varchar(255),
	placeOfMarriage_m	varchar(255),
	dateOfRegistration	varchar(255),
	dateOfIssue varchar(255),
	PRIMARY KEY(id)
);

CREATE TABLE death_data (
	id	INT NOT NULL UNIQUE AUTO_INCREMENT,
	name	varchar(255),
	name_m	varchar(255),
	sex	varchar(255),
	aadharNo	bigint(12),
	dateOfDeath	varchar(255),
	placeOfDeath	varchar(255),
	placeOfDeath_m	varchar(255),
	age	INT,
	nameOfHusband_Wife	varchar(255),
	nameOfHusband_Wife_m	varchar(255),
	aadhaarOfHusband_Wife	bigint(12),
	nameOfMother	varchar(255),
	nameOfMother_m	varchar(255),
	nameOfFather	varchar(255),
	nameOfFather_m	varchar(255),
	motherAadhaar	bigint(12),
	fatherAadhaar	bigint(12),
	addressDuringDeath	varchar(255),
	addressDuringDeath_m	varchar(255),
	permanentAddressOfDeceased	varchar(255),
	permanentAddressOfDeceased_m	varchar(255),
	remark	varchar(255),
	dateOfRegistration	varchar(255),
	dateOfIssue varchar(255),
	PRIMARY KEY(id)
);

CREATE TABLE user_auth (
	id	INT NOT NULL UNIQUE AUTO_INCREMENT,
	username	varchar(255),
	password	varchar(255),
	questionAnswer	varchar(255),
	priority INT,
	PRIMARY KEY(id)
);

INSERT INTO user_auth VALUES(1, 'admin', '$2y$10$e5i7ufYMxTiGz92Ij5NAwuKIIbAUjRGILtdgJ5MwV3E11xzg6JEzq', '', 0);

CREATE TABLE birth_data_deleted (
	id	INT NOT NULL UNIQUE AUTO_INCREMENT,
	name	varchar(255),
	name_m	varchar(255),
	sex	varchar(255),
	DOB	varchar(255),
	placeOfBirth	varchar(255),
	placeOfBirth_m	varchar(255),
	nameOfMother	varchar(255),
	nameOfMother_m	varchar(255),
	nameOfFather	varchar(255),
	nameOfFather_m	varchar(255),
	motherAadharNo	bigint(12),
	fatherAadharNo	bigint(12),
	addressDuringBirth	varchar(255),
	addressDuringBirth_m	varchar(255),
	permanentAddressOfParents	varchar(255),
	permanentAddressOfParents_m	varchar(255),
	remark	varchar(255),
	dateOfRegistration	varchar(255),
	dateOfIssue varchar(255),
	PRIMARY KEY(id)
);

CREATE TABLE marriage_data_deleted (
	id	INT NOT NULL UNIQUE AUTO_INCREMENT,
	husbandName	varchar(255),
	husbandName_m	varchar(255),
	wifeName	varchar(255),
	wifeName_m	varchar(255),
	husbandAge	INT,
	wifeAge	INT,
	husbandAadharNo bigint(12),
	wifeAadharNo bigint(12),
	husbandReligion	varchar(255),
	husbandReligion_m	varchar(255),
	wifeReligion	varchar(255),
	wifeReligion_m	varchar(255),
	husbandNationality	varchar(255),
	husbandNationality_m	varchar(255),
	wifeNationality	varchar(255),
	wifeNationality_m	varchar(255),
	husbandFatherName	varchar(255),
	husbandFatherName_m	varchar(255),
	wifeFatherName	varchar(255),
	wifeFatherName_m	varchar(255),
	husbandAddress	varchar(255),
	husbandAddress_m	varchar(255),
	wifeAddress	varchar(255),
	wifeAddress_m	varchar(255),
	dateOfMarriage	varchar(255),
	placeOfMarriage	varchar(255),
	placeOfMarriage_m	varchar(255),
	dateOfRegistration	varchar(255),
	dateOfIssue varchar(255),
	PRIMARY KEY(id)
);

CREATE TABLE death_data_deleted (
	id	INT NOT NULL UNIQUE AUTO_INCREMENT,
	name	varchar(255),
	name_m	varchar(255),
	sex	varchar(255),
	aadharNo	bigint(12),
	dateOfDeath	varchar(255),
	placeOfDeath	varchar(255),
	placeOfDeath_m	varchar(255),
	age	INT,
	nameOfHusband_Wife	varchar(255),
	nameOfHusband_Wife_m	varchar(255),
	aadhaarOfHusband_Wife	bigint(12),
	nameOfMother	varchar(255),
	nameOfMother_m	varchar(255),
	nameOfFather	varchar(255),
	nameOfFather_m	varchar(255),
	motherAadhaar	bigint(12),
	fatherAadhaar	bigint(12),
	addressDuringDeath	varchar(255),
	addressDuringDeath_m	varchar(255),
	permanentAddressOfDeceased	varchar(255),
	permanentAddressOfDeceased_m	varchar(255),
	remark	varchar(255),
	dateOfRegistration	varchar(255),
	dateOfIssue varchar(255),
	PRIMARY KEY(id)
);