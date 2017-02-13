function Utilisateur(nom, prenom, email, login, password) {
    this.nom = nom;
    this.prenom = prenom;
    this.email = email;
    this.login = login;
    this.password = password;
}

Utilisateur.prototype.toString = function () {
    return this.nom + ' ' + this.prenom + ' : ' + this.email;
};