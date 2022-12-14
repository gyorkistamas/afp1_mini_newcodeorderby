# Követelmény specifikáció

## 1. Áttekintés

Adott egy feltörekvő bolt. Jelen álláspont szerint a vásárlóknak nincs lehetőségük ezen termékeket értékelni, maximum szóban. Ezen probléma megoldására kell létrehozni egy web alapú alkalmazást, ahol a vásárlók tudnak értékeléseket hagyni, illetve a potenciális vevők el tudják ezeket olvasni, ezzel is ösztönözve őket a vásárlásra.


## 2. A jelenlegi helyzet leírása
A jelenlegi helyzet alapján nincs lehetőség a termékek maradandó értékelésére, esetleg szóban tudnak az ügyfelek megjegyzést tenni. Így a vásárlók nem tudnak tájékozódni mások véleménye alapján, csak a termékek leírására tudnak támaszkodni, ami nem mindig kielégítő ahhoz, hogy döntésre tudjanak jutni, tekintettel arra, hogy ezek nem tartalmaznak tényleges tapasztalatokat. Ezek a szóban elhangzott megjegyzések maximum baráti, vagy családi körbe jutnak el, nem elérhetőek nagyobb közönség felé. Ezen okok miatt a vásárlók bizalma nem túl optimális a termékek felé, főleg a kevésbé ismert, vagy újabb márkák iránt.

## 3. Vágyálomrendszer

Egy web alapú alkalmazás létrehozása, ahol a felhasználók képesek regisztráció és bejelentkezés után termékek hozzáadására, illetve ezen termékek értékelésére. Az értékeléseket bárki megtekintheti, ezzel is ösztönözve más potenciális vevőket a vásárlásra. Az alkalmazás tulajdonosai képesek az értékelések moderálására, ha az valamilyen vulgáris kifejezést, vagy egyéb, nem megengedett részleteket tartalmaz. Ilyen esetben lehetőség van az értékelés törlésére, de szerkesztésére nem. A felhasználók név, e-mail cím és jelszó megadása után regisztrálhatnak, az itt megadott név jelenik meg értékeléseiknél. A termékek, és az értékelések is publikusan megtekinthetők, a felhasználó fiók létrehozása ezeknek a hozzáadásához szükséges. A termékeknek megjelenik a nevük, illetve leírásuk, ami egyéb információkat tartalmazhat, illetve a hozzá tartozó értékelések is megjelennek.

## 4. Jelenlegi üzleti folyamatok modellje

A jelenlegi helyzet szerint nincs lehetőség a termékek egy rendszerben történő értékelésére. Néhány cég biztosít a saját rendszerében a saját termékeinek értékelésére űrlapot, viszont ez decentralizált módon valósul meg. A különböző cégek különböző módon valósítják meg az értékelések bekérését, ami tovább rontja a centralizáltságot. Például van, ahol egy 1-től 5-ig tartó skálán lehet értékelni a termékeket csillagokkal, más esetben egy szöveges üzenetet lehet hagyni, illetve ezeknek kombinációja is létezik.

## 5. Igényelt üzleti folyamatok modellje

- 1. Felhasználói fiók létrehozása
  - 1.1 Megfelelő jogosultsági körök (Felhasználó, moderátor)
- 2. Termékek felvitele az adatbázisba
- 3. Termékek értékelésének lehetősége
  - 3.1 Értékelés törlése nem megfelelő (vulgáris) szóhasználat esetén.

## 6. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| M1 | Regisztráció | Regisztráció | Regisztrációs űrlap |
| M2 | Bejelentkezés | Bejelentkezés | Bejelentkezési űrlap |
| M3 | Terméklista | Terméklista | Adatbázisban található termékek kilistázása|
| M4 | Termékmegtekint | Termék megtekintése | Termék adatainak és értékeléseinek megtekintése.|
| M5 | Értékeléshozzáad | Értékelés hozzáadása | Szöveges értékelés hozzáadása termékhez. |

## 7. Fogalomtár

- review: áttekintés idegen szóval
- moderátor: személy(ek), aki a bevitt adatokat ellenőrzi, hogy megfelel-e bizonyos kritériumoknak, szabályoknak
- centralizált: más szóval központosított.
- decentralizált: centralizált ellentettje, azaz nem központosított.