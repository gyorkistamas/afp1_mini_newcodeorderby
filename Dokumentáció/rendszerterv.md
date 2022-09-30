# Rendszerterv
## 1. A rendszer célja
   Termék értékelő weblap háttérben működő adatbázissal, felhasználó rendszerrel, termék feltöltése és felhasználó regisztrálása funkciókkal PHP-ban (Backend) és HTML + CSS + JS-ben (Frontend) megvalósítva.

## 2. Projektterv
   PHP, HTML + CSS + JS projekt, ahol lehetőség van termékek kilistázására, felhasználók létrehozására, termékek létrehozása, termékekhez értékelések írására, termékek adatainak szerkesztésére.
   Az oldal támogassa a reszponzivitást.

### 2.1 Projektszerepkörök, felelőségek:
   * Scrum masters: Banyik Nándor, Matuch Richárd
   * Product owner: N/A
   * Üzleti szereplő: N/A
     
### 2.2 Projektmunkások és felelőségek:
   * Frontend: Kovács Dávid
   * Backend: Györkis Tamás
   * Tesztelés: Karácsony Balázs
     
### 2.3 Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |             
|Funkcionális specifikáció|Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Rendszerterv             |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Program                  |Képernyőtervek elkészítése              |         2 |             1 |                      1 |                1 |                   1 |
|Program                  |Prototípus elkészítése                  |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Alapfunkciók elkészítése                |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Tesztelés                               |         4 |             2 |                      2 |                2 |                   2 |

### 2.4 Mérföldkövek:
   * Prototípus átadása

## 3. Üzleti folyamatok modellje
   * 1. Felhasználói fiók létrehozása
      * Admin és Felhasználó jogosultsági körök
   * 2. Termékek hozzáadasa az adatbázis megfelelő táblájába
     * Termekek adatainak módosítása és törlése
   * 3. Termékek értékelése funkció
   * 4. Felhasználók kezelése
     * Felhasználó törlése, jogainak módosítása
  
### 3.1 Üzleti szereplők
   N/A

### 3.2 Üzleti folyamatok

## 4. Követelmények
   - [ ] Reszponzív, dinamikus weboldal
   - [ ] Felhasználókezelő rendszer
   - [ ] Backend része PHP legyen
   - [ ] Űrlap mezők validálása
   - [ ] 'Termékek hozzáadása' funkció megvalósítása
  
### 4. 1 Funkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | ... | ... |

### 4.2 Nemfunkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K4 | ... | ... |

### 4.3 Támogatott eszközök
   * PC
   * Tablet
   * Mobiltelefon
  
## 5. Funkcionális terv

### 5.1 Rendszerszereplők

### 5.2 Menühierarchiák

## 6. Fizikai környezet
   Lokális webszerver (Apache)

### 6.1 Hardver topológia

### 6.2 Fizikai alrendszerek

### 6.3 Fejlesztő eszközök
   * Programozás nyelvek: PHP, JavaScript
   * Leíró nyelvek: HTML, CSS + Bootstrap
   * Text Editor: Visual Studio Code, Vim
   * Debugoláshoz: Google Chrome/Mozilla Firefox/Microsoft Edge/Opera fejlesztői konzol
  
## 7. Architekturális terv

### 7.1 Webszerver
   Apache (Xampp-al futtatva)

### 7.2 Adatbázis rendszer
   Relációs adatbázis - MySQL

### 7.3 A program elérése, kezelése
   Webszerveren (Apache)

## 8. Adatbázis terv
   
   ![Image](database%20diagram.jpg)

## 9. Implementációs terv

## 10. Tesztterv

A tesztelések célja a rendszer és komponensei funkcionalitásának teljes vizsgálata,
ellenőrzése a rendszer által megvalósított üzleti szolgáltatások verifikálása.
A teszteléseket a fejlesztői csapat minden tagja elvégzi.
Egy teszt eredményeit a tagok dokumentálják külön fájlokba.

### 10.1 Tesztesetek

 | Teszteset | Elvárt eredmény | 
 |-----------|-----------------| 
 | ... | ... |

### 10.2 A tesztelési jegyzőkönyv kitöltésére egy sablon:

**Tesztelő:** Vezetéknév Keresztnév

**Tesztelés dátuma:** Év.Hónap.Nap

Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés
----------|--------------|---------------|----------|-----------
például. Teszt #01 | Regisztráció | A felhasználó az adatok megadásával sikeresen regisztrálni tud  | A felhasználó sikeresen regisztrált | Nem találtam problémát.
... | ... | ... | ... | ...

## 11. Telepítési terv

Fizikai telepítési terv: 

Szoftver telepítési terv: 

## 12. Karbantartási terv

Fontos ellenőrizni:
...

Figyelembe kell venni a felhasználó által jött visszajelzést is a programmal kapcsolatban.
Ha hibát talált, mielőbb orvosolni kell, lehet az:
*	Működéssel kapcsolatos
*	Kinézet, dizájnnal kapcsolatos