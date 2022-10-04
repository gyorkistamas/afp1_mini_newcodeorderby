# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása
+ A megszabott felhasználási módot a megrendelő pusztán analalog módon pótolja ki. Minden kommunikáció pusztán szóban történik, adatkezelésről nem beszélhetünk. Jelenleg semmi féle rendszer nem áll rendelkezésre. Minden funkciót az alapoktól kell meg valósítani.

## 2. Vágyállomrendszer leírása
+ Egy olyan termék értékelő oldal, amellyen a termékek listája publikusan elérhető.
+ *felhasználó*k hozzáadhatnak termékeket és szövegesen értékelhetik bármelyiket. Amennyiben *felhasználó* névvel, email-el és jelszóval regisztráltak.
+ Az oldaltulajdonos az értékeléseket szabadon szerkesztheti vagy törölheti ha helyén valónak látja.

## 3. Jelenlegi üzleti folyamatok modellje
+ Jelenleg a bolt vásárlóinak csak is az eladók szakértélermére és hozzáértésére vannak bízva. Ahogy érdeklődni lehessen egy termékről a felhasználónak személyesen vagy telefonon kell felvenni a kapcsolatot az üzlettel. Ebből adódik a probléma, hogy a tudakozódás nyitáshoz kötött. Továbbá mivel az eladóknak nincs személyes tapasztalata minden termékről így sok nem egyértelmű részlet kívül esik a tudásokun.
+ Más boltok rendelkeznek a vágyálomban megfogalmazotthoz hasonló rendszerekkel. Ezzel piaci előnyhöz jutattva azokat.

## 4. Igényelt üzleti folyamatok modellje
+ Profil kezelés
    + felhasználó
    + moderátor
+ Termék lista olvasás
+ Termék kezelés
    + felvitel
    + értékelés
    + moderátori felülbírálás

## 5. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| 1 | home.php | főoldal | a köszöntő oldal ami feltünteti a *felhasználó* lehetőségeit (termék böngészés / regisztráció / bejelentkezés) |
| 2 | item.php | termék_leírás | egy-egy kiválasztott terméket megjelenítő oldal |
| 3 | auth.php | bejelentkezés | *felhasználó* bejelentkezés kezelő |
| 4 | auth.php | regisztráció | *felhasználó* regisztráció kezelő |
| 5 | addProduct.php | Hozzáadás | új termék feltöltésére szolgáló felület |
| 6 | list.php | böngésző | képes termék lista |

## 6. Használati esetek
1. Ha egy vásárló egy adott terméket már megvásárolt és kipróbálta akkor tapasztalatait megoszthatja az oldalon ezzel segítve a vásárlásra még csak készülő ember társait.
2. (Az első pontnak megfelelően) ha valaki online piac kutatást végez, hogy megtalálja a saját igényeinek legmegfelelőbb terméket akkor ezt az oldalt kereshetné fel.
3. A *moderátor* változtatni kíván egy termék adatain vagy az ahoz tarttozó értékeléseken. Példa: Egy termék képét szeretné kicserélni egy jobb minőségűbbre; Egy értékelés megfogalmazásának stílusát károsnak találja az üzletére ezért eltávolítaná;

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket
### Termék értékelés ###
| Lefedett használati eset | Követelmény |
| :---: | :---: |
| A felhasznó megnyitja az oldalt, itt több kattintható opció fogadja. | főoldal |
| A *felhasználó* a regisztrációt választva kitölt egy űrlapot az adataival amiket eltárolunk az adatbázisban. | regisztráció |
| A *felhasználó* *profil* adatai megadásával hitelesíti személy azonosságát. Ezzel jogot nyerve avélemény írásra és publikálásra. | bejelentkezés |
| A *felhasználó* megkeresi az adott terméket amit értékelni szeretne. | böngésző |
| A *felhasználó* a értékelni kívánt terméket kiválasztva megírja és publikálásja az értékelését. | termék_leírás | 
| Mivel a termékről még egy értékelés sem készült, ezért a *felhasználó* hozzá adja a termék listához, az első (saját) értékelléssel egyetemben. | Hozzáadás |
### Termék böngészés ###
| Lefedett használati eset | Követelmény |
| :---: | :---: |
| A felhasznó megnyitja az oldalt, itt több kattintható opció fogadja. | főoldal |
| A felhasznó a böngészést választva kap egy listát minden már értékelt termékről. | böngésző || A felhasznó a keresett terméket megtalálva annak saját oldalán elolvashatja a mások álltal hagyott értékeléseket. | termék_leírás |
### Üzemeltetői felülbírálás ###
| Lefedett használati eset | Követelmény |
| :---: | :---: |
| A *moderátor* megnyitja az oldalt, itt több kattintható opció fogadja. | főoldal |
| A *moderátor* miután a bejelentkezést választotta hitelesíti *profil* adatait. Innentől kezdve élhet moderátori jogkörével | főoldal |
| A *moderátor* kikeresi a módosítani kívánt terméket. | böngésző |
| A *moderátor* a megfelelő terméket kiválasztotta. Szabadon módosíthatja azt és a hozzá tartozó értékeléseket. | termék_leírás |

## 8. Képernyőtervek

![Regisztrációs lap](../Dokumentáció/Képernyőtervek/Bejelentkezés_és_Regisztráció_Lap.png)
![Sikeres regisztrációs lap](../Dokumentáció/Képernyőtervek/Sikeres_Regisztráció_Lap.png)
![Siketelen regisztrációs lap](../Dokumentáció/Képernyőtervek/Sikertelen_Regisztráció.png)
![Siketelen bejelentkezés lap](../Dokumentáció/Képernyőtervek/Sikertelen_Bejelentkezés_Lap.png)

## 9. Forgatókönyvek

## 10. Funkció - követelmény megfeleltetése

| Id | Követelmény | Funkció |
| :---: | --- | --- |
| K4 | ... | ... |

## 11 Fogalomszótár
+ **review**: áttekintés idegen szóval
+ **profil**: az oldalon való személyazonosság hitelesítéshez szükséges adat halmaz.
    * részei:
        - felhasználó név
        - email cím
        - jelszó
        - jogkör
+ **jogkör**: egy felhasználható álltal végre hajtható műveletek halmaza.
	* fajtái:
		- felhasználói: értékelésírás; saját értékelés módosítás;-i képesség(ek)et ad
		- moderátori: felhasználó; bármely értékelés módosítás; bármely értékelés módosítás;-i képesség(ek)et ad
+ **felhasználó**: olyan személy aki rendelkezik *profil*-lal
+ **moderátor**: olyan felhasználó akinek *jogköre* moderátori
