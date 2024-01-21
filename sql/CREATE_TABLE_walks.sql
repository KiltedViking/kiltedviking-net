USE kiltedviking_ne;


CREATE TABLE walks (
	id INT NOT NULL AUTO_INCREMENT,
	wdate DATE,
	country NVARCHAR(100),
	region NVARCHAR(100),
	place NVARCHAR(200),
	wdescription NVARCHAR(2000),
    distance DECIMAL(3,1),
    duration TIME,
    thumbnail NVARCHAR(100),
    start NVARCHAR(150),
    end NVARCHAR(150),
    PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE walklinks (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    walkid INT NOT NULL REFERENCES walks(id),
    url NVARCHAR(150) NOT NULL,
    linktext NVARCHAR(100) NOT NULL,
    extratext NVARCHAR(100)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


-- INSERT INTO walks(wdate, country, region, place, wdescription)
-- VALUES('2023-10-14', 'Sweden', 'Strängnäs', 'ÖSLJ', 'A walk from Läggesta to Hedlandet along the railway line.');

-- INSERT INTO walks(wdate, country, region, place, wdescription)
-- VALUES('2023-09-16', 'Sweden', 'Stockholm', 'Nackareservatet', 'A walk from Bagarmossen to Danviksklippan (or the Indian restaurant below).');

-- INSERT INTO walks(wdate, country, region, place, wdescription)
-- VALUES('2023-10-14', 'Sweden', 'Strängnäs', 'ÖSLJ', 'A walk from Läggesta to Hedlandet along the railway line.');


-- INSERT INTO walklinks(walkid, url, linktext, extratext)
-- VALUES(1, 'https://www.oslj.nu/', 'ÖSlJ', 'Östra Sörmlands Järnväg');

-- INSERT INTO walklinks(walkid, url, linktext, extratext)
-- VALUES(2, 'https://www.naturkartan.se/', 'Naturkartan', '(Nature map)');
