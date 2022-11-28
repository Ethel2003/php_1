--Liste de tous les utilisateurs
SELECT * FROM users;

-- La liste de tous les utilisateurs rangée par noms de famille
SELECT * FROM users ORDER BY last_name;

-- Le dernier utilisateur inscrit
SELECT * FROM users ORDER BY registration_date DESC LIMIT 1;

-- La liste de tous les utilisateurs fêtant leur anniversaire ce mois-ci ;
SELECT * 
FROM users 
WHERE birthdate LIKE '%_-11-_%' ;
--ou
SELECT * 
FROM users 
WHERE Month(birthdate) = 11 ;

-- Le nombre total d'utilisateurs 
SELECT COUNT(first_name) FROM users;

-- La liste de tous les utilisateurs associés à leurs villes respectives
SELECT users.first_name, users.last_name, addresses.city
FROM users
CROSS JOIN addresses 
WHERE users.address_id = addresses.id ;

-- La liste de tous les utilisateurs vivant à une adresse sans numéro 
SELECT users.first_name, users.last_name, addresses.number
FROM users, addresses
WHERE users.address_id =  addresses.id AND addresses.number IS NULL;

-- La liste de tous les produits dont le prix est supérieur à 1 000 € 
SELECT products.price
FROM products
WHERE products.price >1000;

-- La liste de tous les produits associés à leurs photos respectives
SELECT products.name, pictures.url
FROM products, pictures
WHERE products.id = pictures.product_id;

--ou
SELECT products.name, pictures.url
FROM products
JOIN pictures ON products.id = pictures.product_id;

-- La liste de tous les produits appartenant à la catégorie « Voyage »
SELECT products.name, categories.title
FROM products, categories
WHERE categories.title = 'Voyage';

-- La liste de tous les utilisateurs ayant effectué plus de dix commandes
SELECT
    CONCAT_WS(
        ' ',
        users.first_name,
        users.first_name
    ) AS `Nom d'utilisateur`, Count(orders.id) AS `Nombre de commandes`
FROM users
LEFT JOIN orders ON users.id = orders.user_id;
GROUP BY `Nom d'utilisateur`
Having `Nombre de commandes` > 10
ORDER BY `Nombre de commandes`;