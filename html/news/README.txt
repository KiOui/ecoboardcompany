#####################################################################
############## DIT IS DE README VOOR NIEUWSDOCUMENTEN ###############
#####################################################################

Het toevoegen van een nieuwsitem aan de website:

Het is erg gemakkelijk om een nieuwsitem toe te voegen aan de website, er is geen code voor nodig, alleen een mapje met bepaalde bestanden. In de map waarin dit bestand staat, staat ook een map genaamd "items", dit is de map die gebruikt wordt om alle nieuwsbestanden in op te slaan. Om een nieuwitem toe te voegen voeg je allereerst een map toe aan de map "items". De naam van deze map maakt niet uit, misschien is het handig om hiervoor de datum te kiezen of de titel van het nieuwsbericht.

In de net aangemaakte map moeten een aantal bestanden komen te staan hieronder de bestanden die hierin moeten komen:

	- title.v
	- item.v
	- shortItem.v

LET OP: DEZE BESTANDEN MOETEN GECODEERD ZIJN MET UTF-8 CODERING

Ook moet er een map in komen te staan genaamd:

	- img

Hierin komen later de foto's die bij het nieuwsbericht horen.

Laten we eerst de bestanden title.v en item.v doornemen, te beginnen bij item.v Hieronder.

LET OP! De bestanden title.v, shortItem.v en item.v zijn normale tekstbestanden en bevatten dus ALLEEN tekst. De extensie moet gezet worden naar .v omdat anders het script de bestanden niet kan vinden.

Opmaak title.v:

Het title.v bestand bevat de titel van het nieuwsbericht en de datum van het nieuwsbericht in de volgende syntax:

SYNTAX title.v HIERONDER (Beginnend en eindigend bij de #'s):
#########################
[Titel nieuwsbericht]
[Datum nieuwsbericht]
#########################

Het is erg belangrijk dat de titel en de datum niet worden omgedraaid, het is ook erg belangrijk dat de titel op de EERSTE LINE van het bestand staat, en de datum op de TWEEDE LINE van het bestand.

Opmaak shortItem.v:

Het item.v bestand bevat de tekst van het nieuwsbericht in de volgende syntax:

SYNTAX shortItem.v HIERONDER (Beginnend en eindigend bij de #'s):
########################
[Item]
########################

Waarbij het item niet gescheiden is bij newlines (ofwel enters).

Opmaak item.v:

Het item.v bestand bevat de tekst van het nieuwsbericht in de volgende syntax:

SYNTAX item.v HIERONDER (Beginnend en eindigend bij de #'s):
########################
[Alinea 1]
[Alinea 2]
[etc.]
########################

Alinea kan volledige tekst zijn, alinea's zijn gescheiden door een newline (enter).

De map img:

In de map img kunnen foto's worden gezet die bij het nieuwsbericht worden getoond. In de map IMG moet MINIMAAL één foto zitten met de naam "header.jpg", deze foto wordt dan in het overzicht gebruikt.

Het verwijderen van een nieuwsitem van de website:

Om een nieuwsitem te verwijderen kan de bijbehorende map in de map "items" worden verwijderd.