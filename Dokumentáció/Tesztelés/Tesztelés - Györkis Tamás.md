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
