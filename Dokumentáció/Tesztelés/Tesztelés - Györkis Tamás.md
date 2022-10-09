### Bejelentkezés / regisztráció tesztelése

**Tesztelő:** Györkis Tamás

**Tesztelés dátuma:** 2022.10.09


| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| GYT_001 | Regisztráció esetén mezők hiányos kitöltése. | Az oldal figyelmeztet a hiányosságokra. | Megegyzik a várt eredménnyel. | Nem találtam hibát. |
| GYT_002 | 8 karakternél rövidebb jelszó megadása regisztrációnál. | A hibára figyelmeztet az alkalmazás, nem történik meg a regisztráció | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_003 | A jelszó megerősítésénél nem egyezik a két mezőben található jelszó. | Az oldalt figyelmeztet, a regisztráció nem történik meg. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_004 | Regisztrációnál az e-mail mezőben hibás e-mail megadása. | A hibára figyelmeztet a weboldal, nem történik meg a regisztráció. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_005 | Regisztráció már használt e-mail címmel. | A hiba jelzésre kerül, nem történik meg a regisztráció | Megegyezik az elvárt eredménnyle. | Nem találtam hibát.
| GYT_006 | Regisztráció helyes megadott, nem lefoglalt adatokkal. | A regisztráció megtörténik. | Megegyezik az elvárt eredménnyel. | Nem találtam hibát. |
| GYT_007 | Bejelentkezés nem létező felhasználóval. | Nem történik meg a bejelentkezés. | Megegyezik az elvárt eredménnyel. | Nem találtam hibát. |
| GYT_008 | Bejelentkezés megfelelő adatokkal. | Megtörténik a bejelentekzés, átnavigál a weboldal a főoldalra. | Megegyezik az elvárt eredménnyel. | Nem találtam hibát. |
| GYT_009 | Bejelentkezés és regisztráció nem működő adatbázis kapcsolat mellett. | A kapcsolati hibáról figyelmezteti a felhasználót az oldal. | Megegyezik az elvárt eredménnyel. | Nem találtam hibát. |

&nbsp;

### Termék hozzáadása tesztelése

**Tesztelő:** Györkis Tamás

**Tesztelés dátuma:** 2022.10.09


| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| GYT_010 | Termék hozzáadása oldalra navigálás bejelentkezés nélkül. | Az oldal visszairányít a bejelentkezésre. | Megegyezik az elvárt eredménnyel. | Nem találtam hibát. |
| GYT_011 | Termék adatok hiányos kitöltése | A hiányosságokra figyelmeztet az oldal, nem történik meg a termék felvitele az adatbázisba. | Megegyezik az elvárt eredménnyel. | Nem találtam hibát. |
| GYT_012 | Termék felvitele adatbázis kapcsolat hiánya mellett. | Nem történik meg a termék felvitele, hibaüzenet megjelenítése. | Megegyezik az elvárt eredménnyel. | Nem találtam hibát. |