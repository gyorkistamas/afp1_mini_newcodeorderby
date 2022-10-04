# Rendszerterv
## 1. A rendszer célja
   Termék értékelő weblap háttérben működő adatbázissal, felhasználó rendszerrel, termék feltöltése és felhasználó regisztrálása funkciókkal PHP-ban (Backend) és HTML + CSS + JS-ben (Frontend) megvalósítva.  
   Az oldalon lehetőség adódik felhasználói fiók létrehozására, a fiókkal rendelkező felhasználóknak email és jelszó megadásával bejelentkezésre.  
   Jogosultsági rendszer is működik a weboldalon. Két fajta felhasználó lehetséges (User és Moderator), akiknek hatáskörük az oldalon lévő dolgokra eltérő.
   Regisztrálni csak is közönséges felhasználót (User) lehet email cím, felhasználónév, jelszó (2X) megadásával, akinek korlátozott hozzáférése van az oldalon.  
   Moderátorként nem lehet regisztrálni az oldalon!!!
   A egyszerű/közönséges felhasználónak lehetősége van termékeket feltölteni az webes felületre, a már létezőekhez értékelést írni.  
   Minden amit a normál felhasználó tud, azt tudja a Moderátor is, csak neki a hatásköre kiegészül azzal, hogy tud értékeléseket törölni.  
   Mi számít értékelésnek az oldalon? A termékek alatt szöveges formában lehet kifejezniük a felhasználóknak az elégedettségüket az adott termék iránt.
   Bejelentkezés nélkül is látogatható az oldal. Ekkor egy lista tekinthető meg az eddig feltöltött termékekről.

## 2. Projektterv
   PHP, HTML + CSS + JS projekt, ahol lehetőség van termékek kilistázására, felhasználók létrehozására, termékek létrehozására, termékekhez értékelések írására.
   Az oldal támogassa a reszponzivitást.

### 2.1 Projektszerepkörök, felelőségek:
   * Scrum masters: Banyik Nándor, Matuch Richárd
   * Product owner: Matuch Richárd
   * Üzleti szereplő: Banyik Nándor
     
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
   * 1. **Felhasználói fiók létrehozása:**
     * *Felhasználónév*, *Email cím*, *Jelszó* kétszeri megadásával.
   * 2. **Bejelentkezés:**
     * *Email cím* + *Jelszó* megadásával.
   * 3. **Kijelentkezés:**
     * A weboldalon a felső részén lesz megtaláható a *Kijelentkezés* gomb.
   * 4. **User hatásköre:**
     * __Termék hozzáadása:__ Webes felület segítségével, felvihet adatokat egy termékről.
     * __Értékelések/vélemények írása:__ Már korábban felvitt termékekhez írhat értékelést, véleményt.
   * 5. **Mod. hatásköre:**
     * __Termék hozzáadása:__ Ugyanaz, mint a *User*-nél.
     * __Értékelések/vélemények írása:__ Ugyanaz, mint a *User*-nél.
     * __Értékelések/véleméyek törlése:__ A többi felhasználó értékeléseit tudja törölni a termékhez tartozó oldalról.
  
### 3.1 Üzleti szereplők
   * Moderator (Moderátor)
   * User (Felhasználó)

## 4. Követelmények
   - [ ] Reszponzív, dinamikus weboldal
   - [ ] Felhasználókezelő rendszer
   - [ ] Backend része PHP legyen
   - [ ] Űrlap mezők validálása
   - [ ] 'Termékek hozzáadása' funkció megvalósítása
  
### 4.1 Funkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | Regisztrációs lehetőség | Felhasználói fiók létrehozására való opció |
| K2 | Bejelentkezés | A korábban már regisztrált felhasználók be tudjanak jelentkezni az oldalra |
| K3 | Szerepkörök | Felhasználók elkülönülnek jogosultságaik alapján |
| K4 | Adatbázis | Relációs adatbázis (MySQL) alkalmazása az oldal fontosabb adatainak tárolására (Felhasználók, Termékek, Értékelések) |
| K5 | Termékek feltöltése | Minden felhasználónak legyen lehetősége egy termék adatainak felvitelére a weblap mögött működő adatbázisba, az így felvitt termék megjelenik majd a webes felületen is |
| K6 | Értékelés, vélemény írása | A felhasználók elmondhatják véleményüket egy már feltöltött termék iránt |

### 4.2 Nemfunkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | Felhasználói fiók szükségessége | Fiók nélkül ne lehessen értékelést írni/törölni, terméket felvinni az oldalra |
| K2 | Jogosultásgok | Egy közönséges felhasználó kevesebb dologhoz férhessen hozzá, mint egy moderátor joggal rendelkező. Csak a moderátor tudjon értékeléseket törölni. |
| K3 | Adatbázis rendezettsége | Táblákra és azokon belül mezőkre szedett adatok az adatbázisban. |

### 4.3 Támogatott eszközök
   * PC Windows vagy Linux vagy MacOS operációs rendszerrel
  
## 5. Funkcionális terv
Rendszerszereplők:
   * Moderator (Moderátor)
   * User (Felhasználó)

## 6. Fizikai környezet
   Lokális webszerver (Apache)

### 6.1 Fejlesztő eszközök
   * Programozás nyelvek: PHP, JavaScript
   * Leíró nyelvek: HTML, CSS + Bootstrap
   * Text Editor: Visual Studio Code, Vim
   * Debugoláshoz: Google Chrome/Mozilla Firefox/Microsoft Edge/Opera fejlesztői konzol
  
## 7. Architekturális terv
   A szerveroldali funkcionalitást PHP-ban valósítottuk meg.  
   A Backend képes kommunkálni egy MySQL adatbázissal.  
   A Frontend részén űrlapos mezőkkel kezeltünk adatbázis műveleteket és oldalak közötti navigációt.
   Az alkalmazást webböngészőn keresztül lehet elérni.

### 7.1 Webszerver
   Apache (Xampp-al futtatva)

### 7.2 Adatbázis rendszer
   Relációs adatbázis - MySQL

### 7.3 A program elérése, kezelése
   Webszerveren (Apache)

## 8. Adatbázis terv
   
   ![Image](database%20diagram.jpg)

   Adatbázist leíró szkript:
   ```SQL

      -- phpMyAdmin SQL Dump
      -- version 5.1.1
      -- https://www.phpmyadmin.net/
      -- PHP verzió: 8.1.2

      SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
      START TRANSACTION;
      SET time_zone = "+00:00";


      /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
      /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
      /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
      /*!40101 SET NAMES utf8mb4 */;

      --
      -- Adatbázis: `review site`
      --
      CREATE DATABASE IF NOT EXISTS `review site` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
      USE `review site`;

      -- --------------------------------------------------------

      --
      -- Tábla szerkezet ehhez a táblához `product`
      --

      CREATE TABLE `product` (
      `product_id` int(11) NOT NULL,
      `product_name` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
      `description` varchar(2000) COLLATE utf8_hungarian_ci DEFAULT NULL,
      `added_by` int(11) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

      -- --------------------------------------------------------

      --
      -- Tábla szerkezet ehhez a táblához `review`
      --

      CREATE TABLE `review` (
      `review_id` int(11) NOT NULL,
      `message` varchar(2000) COLLATE utf8_hungarian_ci NOT NULL,
      `added_by` int(11) NOT NULL,
      `product_id` int(11) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

      -- --------------------------------------------------------

      --
      -- Tábla szerkezet ehhez a táblához `user`
      --

      CREATE TABLE `user` (
      `user_id` int(11) NOT NULL,
      `name` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
      `email` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
      `password` varchar(35) COLLATE utf8_hungarian_ci NOT NULL,
      `moderator` tinyint(1) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

      --
      -- Indexek a kiírt táblákhoz
      --

      --
      -- A tábla indexei `product`
      --
      ALTER TABLE `product`
      ADD PRIMARY KEY (`product_id`),
      ADD KEY `fk_user_id` (`added_by`);

      --
      -- A tábla indexei `review`
      --
      ALTER TABLE `review`
      ADD PRIMARY KEY (`review_id`),
      ADD KEY `fk_user_id_2` (`added_by`),
      ADD KEY `fk_product_id` (`product_id`);

      --
      -- A tábla indexei `user`
      --
      ALTER TABLE `user`
      ADD PRIMARY KEY (`user_id`);

      --
      -- A kiírt táblák AUTO_INCREMENT értéke
      --

      --
      -- AUTO_INCREMENT a táblához `product`
      --
      ALTER TABLE `product`
      MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

      --
      -- AUTO_INCREMENT a táblához `review`
      --
      ALTER TABLE `review`
      MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

      --
      -- AUTO_INCREMENT a táblához `user`
      --
      ALTER TABLE `user`
      MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

      --
      -- Megkötések a kiírt táblákhoz
      --

      --
      -- Megkötések a táblához `product`
      --
      ALTER TABLE `product`
      ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`added_by`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

      --
      -- Megkötések a táblához `review`
      --
      ALTER TABLE `review`
      ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
      ADD CONSTRAINT `fk_user_id_2` FOREIGN KEY (`added_by`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
      COMMIT;

      /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
      /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
      /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



   ```

## 9. Implementációs terv
   A weboldal HTML, CSS, JS, PHP nyelveken írtuk.  
   A különböző nyelvek kódjait elszeparáltuk egymástól külön mappákba, ebből kifolyólag átláthatóbb lesz az alkalmazás szerkezete.
   A forráskód és alkönyvtárak angol elnevezéseinek használatában döntöttünk, míg a program könyvtár nevénél maradtunk a magyarnál, tehát a változók és metódusok neveit, továbbá az almappák neveit angolul implementáltuk.
   Törekedtünk arra, hogy az oldalon fellelhető adatok nagy részét MySQL adatbázisban tároljuk.

## 10. Tesztterv

A tesztelések célja a rendszer és komponensei funkcionalitásának teljes vizsgálata,
ellenőrzése a rendszer által megvalósított üzleti szolgáltatások verifikálása.
A teszteléseket a fejlesztői csapat minden tagja elvégzi.
Egy teszt eredményeit a tagok dokumentálják külön fájlokba.

### 10.1 Tesztesetek

 | Teszteset | Elvárt eredmény | 
 |-----------|-----------------| 
 | Regisztráció tesztelése __név__+__email cím__+__jelszó kétszeri megadással__: | *Sikeres Regisztráció* oldalra navigál át az alkalmazás. | 
 | Regisztráció tesztelése __nem megfelelő email címmel__: | Az oldal felhívja a figyelmet az **email cím** helytelenségéről. |
 | Regisztráció __8 karakternél rövidebb jelszóval__: | Az oldal *piros szöveggel* felhívja a figyelmet arra, hogy __a jelszó túl rövid__. |
 | Regisztráció __jelszó nélkül__: | Ugyanaz a figyelmeztetés jelenik meg, mint a 8 karakternél rövidebb **jelszó** eseténél. A gomb megnyomása után figyelmeztet, hogy a **jelszó**hoz tartozó űrlap __mező kitöltése kötelező__. |
 | Regisztráció __jelszó megerősítés nélkül__: | Az oldal *piros szöveggel* felhívja a figyelmet arra, hogy a __jelszó megerősítés kötelező__. |
 | Regisztráció __név megadás nélkül__: | Az oldal felhívja a figyelmet arra, hogy a **név**hez tartozó űrlap __mező kitöltése kötelező__. | 
 | Regisztráció __email cím megadás nélkül__: | Az oldal felhívja a figyelmet arra, hogy az **email cím** tartozó űrlap __mező kitöltése kötelező__. |
 | Regisztráció __egy már létező felhasználó adataival__: | *Sikertelen Regisztráció* oldalra navigál át az alkalmazás. |
 | Bejelentkezés __email cím__+__jelszó megadással__: | Az alkalmazás a kezdőlapra navigál. |
 | Bejelentkezés __nem megfelelő email címmel__: | Az oldal felhívja a figyelmet az **email cím** helytelenségéről. |
 | Bejelentkezés __jelszó megadása nélkül__: | A *Bejelentkezés* gomb megnyomása után, a weboldal figyelmeztet arra, hogy a __jelszó mezőjének kitöltése kötelező__. |
 | Bejelentkezés egy nem létező felhasználó adataival: | A weboldal a *Sikertelen bejelentkezés* részre irányít át. |
 

### 10.2 A tesztelési jegyzőkönyv kitöltésére egy sablon:

**Tesztelő:** Vezetéknév Keresztnév

**Tesztelés dátuma:** Év.Hónap.Nap

Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés
----------|--------------|---------------|----------|-----------
például. Teszt #01 | Regisztráció | A felhasználó az adatok megadásával sikeresen regisztrálni tud  | A felhasználó sikeresen regisztrált | Nem találtam problémát.
... | ... | ... | ... | ...

## 11. Telepítési terv
   Windows és Linux operációs rendszer használata esetén szükséges hozzá a Xampp nevű alkalmazás.  
   Windows-nál az alkalmazás fájljait tartalmazó mappát be kell másolni a xampp\htdocs mappába, elindítani a grafikus alkalmazásban az apache és mysql szolgáltatásokat és egy tetszőleges böngészőben a localhost-hoz navigálni.  
   Míg Linuxnál a /opt/lampp/htdocs mappába kell másolni az alkalmazás fájljait. A sudo /opt/lampp/lampp start parancs kiadása után az alkalmazás oldala megtekinthető egy tetszőleges böngészőben a localhost címen.

## 12. Karbantartási terv

Figyelembe kell venni a felhasználó által jött visszajelzést is a programmal kapcsolatban.
Ha hibát talált, mielőbb orvosolni kell, lehet az:
*	Működéssel kapcsolatos
*	Kinézet, dizájnnal kapcsolatos

Ezekkel kapcsolatban egyelőre emailben tudja felvenni velünk a kapcsolatot.