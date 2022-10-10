### Termék hozzáadása funkció tesztelése:

**Tesztelő:** Karácsony Balázs

**Tesztelés dátuma:** 2022.10.10

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __KB_t001__ | Termék hozzáadása __mezők kitöltése nélkül__: | Az oldal figyelmeztet, hogy töltsem ki az első előforduló input mezőt | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KB_t002__ | Termék hozzáadása __leírás kitöltése nélkül__: | Az alkalmazás felhívja a figyelmet a **termékhez tartozó leírás mező** kitöltésére. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KB_t003__ | Termék hozzáadása __termék megnevezés nélkül__: | A felület figyelmeztet, hogy töltsem ki a **Termék megnevezése** input mezőt. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |

<br/>

### Bejelentkezés / regisztráció tesztelése:

**Tesztelő:** Karácsony Balázs

**Tesztelés dátuma:** 2022.10.10

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- |-----------|-----------------| ------------------ | ---------- |
| __KB_t004__ | Regisztráció tesztelése __név__+__email cím__+__jelszó kétszeri megadással__: | *Sikeres Regisztráció* oldalra navigál át az alkalmazás. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KB_t005__ | Regisztráció tesztelése __nem megfelelő email címmel__: | A webes felület felhívja a figyelmet az **email cím** helytelenségéről. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KB_t006__ | Regisztráció __8 karakternél rövidebb jelszóval__: | Az oldal *piros szöveggel* felhívja a figyelmet arra, hogy __a jelszó túl rövid__. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KB_t007__ | Regisztráció __jelszó nélkül__: | Ugyanaz a figyelmeztetés jelenik meg, mint a 8 karakternél rövidebb **jelszó** eseténél. A gomb megnyomása után figyelmeztet, hogy a **jelszó**hoz tartozó űrlap __mező kitöltése kötelező__. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KB_t008__ | Regisztráció __jelszó megerősítés nélkül__: | A webes program *piros szöveggel* felhívja a figyelmet arra, hogy a __jelszó megerősítés kötelező__. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KB_t009__ | Regisztráció __név megadás nélkül__: | Az oldal felhívja a figyelmet arra, hogy a **név**hez tartozó űrlap __mező kitöltése kötelező__. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KB_t010__ | Regisztráció __email cím megadás nélkül__: | A webes alkalmazás felhívja a figyelmet arra, hogy az **email cím** tartozó űrlap __mező kitöltése kötelező__. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KB_t011__ | Regisztráció __egy már létező felhasználó adataival__: | *Sikertelen Regisztráció* oldalra navigál át az alkalmazás. | Ugyanaz, mint az Elvárt eredmény szekcióban. |  Nem találtam hibára utaló jeleket. |
| __KB_t012__ | Bejelentkezés __email cím__+__jelszó megadással__: | Az alkalmazás a kezdőlapra navigál. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KB_t013__ | Bejelentkezés __nem megfelelő email címmel__: | A weboldal felhívja a figyelmet az **email cím** helytelenségéről. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KB_t014__ | Bejelentkezés __jelszó megadása nélkül__: | A *Bejelentkezés* gomb megnyomása után, a weboldal figyelmeztet arra, hogy a __jelszó mezőjének kitöltése kötelező__. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KB_t015__ | Bejelentkezés __egy nem létező felhasználó adataival__: | A weboldal a *Sikertelen bejelentkezés* részre irányít át. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |

<br/>

### Termék megtekintése funkció tesztelése:

**Tesztelő:** Karácsony Balázs

**Tesztelés dátuma:** 2022.10.10

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __KB_t016__ | 'item.php' elérése, bejelentkezés nélkül | Bejelentkezés szükségességére való felhívás, vagy a kezdőlapra navigálás. | Az oldal a kezdőlapra navigálja a felhasználőt. | Nem találtam hibát. |
| __KB_t017__ | Értékelés publikálása mező kitöltés nélkül. | Az oldal figyelmeztet, a mező kitöltésének szükségességére. | Az oldal figyelmeztet pirossal, hogy: *"Az értékelés szövege üres, melynek kitöltése kötelező"* | Nem találtam semmi féle hibát itt. |