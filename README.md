# Nordic Escape

Nordic Escape on verkkosivusto, joka esittelee pohjoisen luonnon matkakohteita ja ulkoilma-aktiviteetteja. Sivusto tarjoaa tietoa retkeilystä, luonnossa liikkumisesta ja matkan suunnittelusta.

## Tavoite

- Esitellä vaellusta, melontaa, maastopyöräilyä, talviaktiviteetteja ja ulkoilmakursseja.
- Tarjota artikkeleita esimerkiksi retkeilyvarusteista, turvallisuudesta ja luonnossa matkustamisesta.
- Auttaa kävijöitä löytämään inspiraatiota, kuvia ja vastauksia yleisiin kysymyksiin.
- Toteuttaa selkeä verkkosivusto PHP:llä, HTML:llä, CSS:llä ja JavaScriptillä.

## Kohderyhmä

- Luontomatkailusta ja pohjoismaisista maisemista kiinnostuneet ihmiset.
- Retkeilyn ja muiden ulkoiluaktiviteettien aloittelijat ja kokeneemmat harrastajat.
- Matkailijat, jotka etsivät tietoa varusteista, säästä ja matkaan valmistautumisesta.
- Kävijät, jotka haluavat tutustua palveluihin tai kysyä niistä lisää.

## Toiminnot

- **Etusivu:** Esittelee Nordic Escapen ja nostaa esiin palveluja ja artikkeleita.
- **Palvelut:** Sisältää viisi palveluryhmää: vaellusretket, melontaretket, maastopyöräily, talviretket ja outdoor-kurssit. Jokaisella palvelulla on oma sivu.
- **Artikkelit:** Tarjoaa tietoa retkeilyn aloittamisesta, päiväretken varusteista, turvallisuudesta, talvivaelluksesta ja Suomen luontokohteista.
- **Artikkelihaku:** Suodattaa artikkeleita hakusanan perusteella ja näyttää hakutulosten määrän.
- **Galleria:** Näyttää luonto- ja aktiviteettikuvia. Kuvan voi avata suurempana ja sulkea painikkeella, kuvan ulkopuolelta tai Escape-näppäimellä.
- **Usein kysytyt kysymykset:** Kysymykset ja vastaukset voi avata ja sulkea erikseen.
- **Yhteystiedot:** Sisältää yhteystietoja ja lomakkeen. Lomake tarkistaa käyttäjän antamat tiedot selaimessa.
- **Tietosuoja:** Kuvaa henkilötietojen käsittelyä sivuston nykyisessä tilanteessa.
- **Yhteinen navigaatio:** PHP-sivut käyttävät yhteisiä ylä- ja alatunnisteita. Sivusto on suunniteltu toimimaan myös pienillä näytöillä.

## Rakenne

```text
.
|-- index.html                 # Etusivu
|-- services.php               # Palvelujen luettelo
|-- articles.php               # Artikkelit ja haku
|-- gallery.php                # Kuvagalleria
|-- faq.php                    # Usein kysytyt kysymykset
|-- contact.php                # Yhteystiedot ja lomake
|-- privacy.php                # Tietosuojaseloste
|-- articles/                  # Artikkelien alasivut
|-- services/                  # Palvelujen alasivut
|-- includes/                  # Yhteiset PHP-mallit
|-- css/style.css              # Sivuston tyylit
|-- js/main.js                 # Selaimen toiminnot
|-- images/                    # Sivuston kuvat
```

## Teknologia

- **PHP:** Sivujen, sisältölistojen ja yhteisten mallien toteutus.
- **HTML5:** Sivujen sisältö, lomakkeet ja navigaatio.
- **CSS:** Sivuston ulkoasu ja eri näyttökokoihin sopiva asettelu tiedostossa `css/style.css`.
- **JavaScript:** Artikkelihaku, kuvagalleria, lomakkeen tarkistus ja usein kysyttyjen kysymysten toiminta tiedostossa `js/main.js`.
- Projekti ei tällä hetkellä tarvitse ulkoisia ohjelmistokehyksiä tai kirjastoja.

## Käynnistäminen paikallisesti

### Vaatimukset

- PHP 7.4 tai uudempi. PHP 8.x on suositeltava.
- Ajantasainen verkkoselain.

### Käynnistys

- Projektilla ei ole linkkejä mihinkään ulkoisiin kirjastoihin tai frameworkeihin, joten se voi toimia millä tahansa virtuaalipalvelimella.

## Nykyiset rajoitukset

- Tämä on vain prototyyppi, joten siitä puuttuu tällä hetkellä:
  *Käyttäjätilit, tietokannat, varausjärjestelmät tai maksutoiminto.
  *Yhteydenottolomake tarkistaa tiedot ja näyttää ilmoitukse.
  *Palvelujen osallistumisvaatimuksia, varusteiden vuokrausta sekä sää- ja peruutuskäytäntöjä ei ole vielä määritelty kaikilta osin.
  *Projektissa ei ole analytiikkaa eikä evästeitä käyttäviä toimintoja.

## Mahdollisia jatkokehityskohteita

- Yhdistä yhteydenottolomake sähköpostipalveluun ja lisää tietojen tarkistus palvelimelle sekä roskapostin esto.
- Lisää vahvistetut tiedot osallistumisvaatimuksista, varusteista, varauksista ja peruutuksista.
- Lisää tietokanta tai sisällönhallintajärjestelmä, jos sivuston sisältöä halutaan päivittää usein.
- Testaa sivustoa eri selaimilla ja näyttökooilla sekä tarkista saavutettavuus.