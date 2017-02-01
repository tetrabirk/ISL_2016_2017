function Utilisateur(nom,prenom,email,login,motdepasse)
{
    this.nom = nom.toUpperCase();
    this.prenom = (prenom.slice(0,1).toUpperCase())+(prenom.slice(1).toLowerCase());
    this.email = email;
    this.login = login;
    this.motdepasse = motdepasse;
    
};