SELECT w.wdate, w.country, w.region, w.place, w.wdescription, w.distance, w.timespent, w.thumbnail,
	GROUP_CONCAT( CONCAT(wl.url, ';', wl.linktext, ';', wl.extratext) SEPARATOR '|' )
FROM walks w
	INNER JOIN walklinks wl ON w.id = wl.walkid
GROUP BY w.wdate, w.country, w.region, w.place, w.wdescription, w.distance, w.timespent, w.thumbnail;
	