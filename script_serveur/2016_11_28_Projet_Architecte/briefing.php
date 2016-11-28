Equipe (->[1] Gestion user)
    -Nom Prenom
    -diplome
    -parcours (description)
    
News(->[2] gestion des news)
    (sur la home, les 3 dernieres)
    -qui a inséré la news + date

    
    
Galerie projet(->[4]gestion projets) par categorie[3](->gestion categorie)
    -neuve
    -extension
    -renovation
    -qui a inséré le projet + date
    (sur la home, les derniers ajout de chaque categorie)
    

Item :  -qui sommes nous?
        -faq
        -contact
        
---------------------------------------------------------------------------------
[1]
seul les 'levels 1' peuvent créer des utilisateurs
(* = required)
    form INSERTION
        -login (mail)*
        -mdp*
        -nom*
        -prenom*
        -diplome *(var char)
        -parcours
    form MODIF
        -login (mail)*
        -mdp (si vide-> pas de mise à jour du mdp)
        -nom*
        -prenom*
        -diplome *(var char)
        -parcours
        
