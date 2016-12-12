SELECT PC.categorie, a.nom, a.prenom, n.news_id, n.titre, n.description, n.date_add, n.img, n.admin_id, pc.projet_categorie_id, n.is_visible 
FROM news AS n 
LEFT JOIN projet_categorie AS pc ON n.projet_categorie_id = pc.projet_categorie_id 
JOIN admin AS a ON n.admin_id = a.admin_id 
ORDER BY date_add