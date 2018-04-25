# Designosite v2.0

![alt text][logo]

[logo]: http://www.sandervanhullebusch.be/designosource/logodesigno.png "Logo Designo7"

## Node.js

Vooraleer we alles kunnen installeren via de terminal, moeten we **Node.js** installeren op onze lokale machine.
Deze kan je online vinden.

## Gulp

Om gulp te kunnen gebruiken, moet je zien dat deze eerst geïnstalleerd is. Dit doe je door het commando

>**sudo npm install gulp-cli -g**

uit te voeren  **in** je **terminal**.

## Package.json

Om je package.json aan te maken, waar al je **dev dependencies** zich bevinden, moet je eerst je package.json initialiseren. Dit doen we door onderstaand commando uit te voeren in onze terminal.

>npm init

Hierna vul je al je gegevens in.

1. name
2. version (kan je leeg laten)
3. description
4. entry point (kan je leeg laten)
5. test command (kan je leeg laten)
6. git repository
7. keywords
8. author
9. license

Hierna krijg je de melding `Is this ok? (yes)`. Als je hier `yes` invult, is je package.json aangemaakt.

## Dev dependencies

Vooraleer we aan de slag kunnen, hebben we een paar dev dependencies nodig.
Al deze dependencies die in onze package.json gedefinieerd zijn, kunnen we binnenhalen door het volgende commando:

>**npm install**

In het begin staan hier nog geen dependencies gedefinieerd, deze moeten we dus **eerst nog binnenhalen**.
Je kan verschillende modules online vinden en ook hoe je ze kan installeren. De meesten zullen er als volgt uitzien:

>**npm install naam-dependency --save-dev**

Dependencies die we nodig hebben:

- Gulp
- Sass
- Watch (om ervoor te zorgen dat onze tasks steeds runnen en we deze niet steeds zelf moeten aanroepen)
- Util (om bepaalde dingen te kunnen loggen in de terminal)
- Minify (om onze files achteraf te kunnen minifyen, obvious sherlock)
- Imagemin (om onze afbeeldingen te verkleinen en laadtijd te versnellen)
- Plumber (om eventuele errors te loggen in de terminal)

## SASS

Run hier het commando (indien je de bovenstaande stappen niet hebt gevolgd doordat al de dev dependencies reeds in de package.json stonden).
Ook ga je dit steeds moeten doen als iemand de package.json heeft geupdate. Node modules worden niet mee online gezet dus moet iedereen deze apart binnenhalen.

>**npm install**

Hierna worden **alle node-modules** die gedefinieerd zijn **in** de **package.json binnengehaald**.

## Run Gulp

Gulp kan je gemakkelijk starten door het commando _**gulp**_.
>**NOTE: je kan dit enkel runnen in de map waar de gulpfile.js staat.**

Deze taak blijft lopen tot je deze stopt door het commando
>**ctrl + c**

te gebruiken.

Indien je iets aanpast in de gulpfile, moet je eerst de lopende taak stoppen en herstarten voordat deze nieuwe taak mee wordt uitgevoerd.

## Schrijf SASS

Om SASS te schrijven, schrijf je in een scss file, die zich in de **gulp-resources** map bevindt.

In SASS kan je werken met variabelen. Deze stockeer je in een aparte file onder de map **components** als volgt

>**$color: #kleurcode;**

Deze file moet je implementeren, bovenaan je main sass file, via de volgende lijn code

>**@import "components/_filename.scss";**

Hierna kan je alle gedefinieerde variabelen gebruiken.

## Achteraf

Nadat alles gecodeerd is, moeten we ervoor zorgen dat alle files geminified zijn (css & js).
Javascript returnt momenteel al zo'n file, maar we moeten achteraf de koppelingen naar deze files dus nog veranderen.

Have fun coding!

![Coding gif][gif]

[gif]: https://media.giphy.com/media/QHE5gWI0QjqF2/giphy.gif