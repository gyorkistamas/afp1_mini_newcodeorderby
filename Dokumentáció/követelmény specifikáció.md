# Követelmény specifikáció

## 1. Áttekintés

Adott egy feltörekvő bolt. Jelen álláspont szerint a vásárlóknak nincs lehetőségük ezen termékeket értékelni, maximum szóban. Ezen probléma megoldására kell létrehozni egy web alapú alkalmazást, ahol a vásárlók tudnak értékeléseket hagyni, illetve a potenciális vevők el tudják ezeket olvasni, ezzel is ösztönözve őket a vásárlásra.


## 2. A jelenlegi helyzet leírása
A jelenlegi helyzet alapján nincs lehetőség a termékek értékelésére, így az esetleges felhasználók, vásárlók nem tudnak tájékozódni a többiek véleményéből.

## 3. Vágyálomrendszer

Egy web alapú alkalmazás létrehozása, ahol a felhasználók képesek regisztráció és bejelentkezés után termékek hozzáadására, illetve ezen termékek értékelésére. Az alkalmazás tulajdonosai tudják ezeket moderálni, illetve az értékeléseket (review-okat) bárki meg is tekintheti.

## 4. Jelenlegi üzleti folyamatok modellje
A jelenlegi rendszer nem ad lehetőséget a vágyálomrendszerben megjelölt követelményekre, esetleg az értékelések szóban történő közlésére.

## 5. Igényelt üzleti folyamatok modellje

- 1. Felhasználói fiók létrehozása
  - 1.1 Megfelelő jogosultsági körök (Felhasználó, admin)
- 2. Termékek felvitele az adatbázisba
  - 2.1 Termékek adatainak szerkesztése, vagy törlése (admin esetén)
- 3. Termékek értékelésének lehetősége
- 4. Felhasználók kezelése
  - 4.1 Lehetőség a felhasználót törölni, vagy módosítani jogait.

## 6. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| M1 | Regisztráció | Regisztráció | Regisztrációs űrlap |
| M2 | Bejelentkezés | Bejelentkezés | Bejelentkezési űrlap |
| M3 | Terméklista | Terméklista | Adatbázisban található termékek kilistázása|
| M4 | Termékmegtekint | Termék megtekintése | Termék adatainak és értékeléseinek megtekintése.|
| M5 | Értékeléshozzáad | Értékelés hozzáadása | Szöveges értékelés hozzáadása termékhez. |

## 7. Fogalomtár

- review: értékelés idegen szóval
- admin: adminisztrátor, a rendszert kezelő személy(ek)