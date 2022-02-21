// definice třídy, respektive konstruktoru
var Osoba = function (jmeno, prijmeni) {
    this.jmeno = jmeno;
    this.prijmeni = prijmeni;
}

// vytvoreni instance tridy
var pepa = new Osoba('pepa', 'novak');
var jirka = new Osoba('jiri', 'prochazka');