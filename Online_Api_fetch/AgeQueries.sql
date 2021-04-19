SELECT OfficerId,FirstName,TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) AS age FROM bak_pis_personnel WHERE Date_Birth NOT IN ('0000-00-00 00:00:00');

SELECT OfficerId,FirstName,TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) AS age FROM bak_pis_personnel WHERE TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) = 60;

SELECT OfficerId,FirstName,TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) AS age FROM bak_pis_personnel WHERE TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) >= 60;

SELECT OfficerId,FirstName,TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) AS age FROM bak_pis_personnel WHERE TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) <= 60;

SELECT OfficerId,FirstName,TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) AS age FROM bak_pis_personnel WHERE TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) BETWEEN 60 AND 70;

SELECT OfficerId,FirstName,TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) AS age FROM bak_pis_personnel WHERE TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) <> 60;




SELECT OfficerId,FirstName,TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) AS Age FROM bak_pis_personnel WHERE Date_Birth NOT IN ('0000-00-00 00:00:00');
SELECT OfficerId,FirstName,TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) AS Age FROM bak_pis_personnel WHERE TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) = 60;
SELECT OfficerId,FirstName,TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) AS Age FROM bak_pis_personnel WHERE TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) >= 60;
SELECT OfficerId,FirstName,TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) AS Age FROM bak_pis_personnel WHERE TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) <= 60;
SELECT OfficerId,FirstName,TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) AS Age FROM bak_pis_personnel WHERE TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) BETWEEN 60 AND 70;
SELECT OfficerId,FirstName,TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) AS Age FROM bak_pis_personnel WHERE TIMESTAMPDIFF(YEAR, Date_Birth, CURDATE()) <> 80;