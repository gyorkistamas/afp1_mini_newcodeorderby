### Teszt Jegyzőkönyv ###
## Regisztráció ##

**Tesztelő:** Kovács Dávid

**Tesztelés dátuma:** 2022.10.12

| Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés |
| :-------: | :----------: | :-----------: | :------: | :--------: |
| _TST_001_ | érvénytelen email megadása "@admin.admin" | az oldal szövegesen figyelmeztet az email érvénytelenségére és megtagadja a regisztrációt | várt eredmény | |
| _TST_002_ | érvénytelen email megadása "admin@.admin" | az oldal szövegesen figyelmeztet az email érvénytelenségére és megtagadja a regisztrációt | várt eredmény | |
| _TST_003_ | érvénytelen email megadása "admin@.admin" | az oldal szövegesen figyelmeztet az email érvénytelenségére és megtagadja a regisztrációt | várt eredmény | |
| _TST_004_ | túlrövid jelszó "test" megadása | az oldal emlékeztet a minimum jelszó hoszzra, figyelmeztet, hogy ez alattit adtam meg és megtagadja a regisztrációt | várt eredmény | |
| _TST_005_ | nem eggyező jelszavak "testtest1" és "testtest2" megadása | az oldal figyelmeztet és megtagadja a regisztrációt | várt eredmény | |
| _TST_006_ | a fenti teszteken nem megbukó adatok megadása | új felhaszálói fiók jön létre | várt eredmény | |
| _TST_007_ | _TST_006_-ban megadott adatok újra próbálása | a szerver megtagadja a regisztrációs kérelmet | várt eredmény | |

## Bejelentkezés/kijelentkezés ##
| Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés |
| :-------: | :----------: | :-----------: | :------: | :--------: |
| _TST_007_ | _TST_006_-ban megadott adatokkal történő bejelentkezési kísérlet | sikeres belépés; kijelentkezés gomb feltünése | várt eredmény | |
| _TST_008_ | _TST_007_ után kijelentkezés gomb megnyomása index.php-n | kijelentkezés; session bontása | várt eredmény | |
| _TST_009_ | _TST_007_ után kijelentkezés gomb megnyomása item.php-n | kijelentkezés; session bontása | várt eredmény | |

## Felhasználói műveletek ##
| Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés |
| :-------: | :----------: | :-----------: | :------: | :--------: |
| _TST_010_ | hozzászólás hozzáadása gomb megnyomása (bejelentkezés nélkül) | bejelentkezésre felszólító felugró ablak feltűnése | várt eredmény | |
| _TST_011_ | hozzászólás hozzáadása gomb megnyomása bejelentkezés után | az oldal frissül és a megjegyzés megjelenik | várt eredmény | |
