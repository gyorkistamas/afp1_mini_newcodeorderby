DB_FILES := Adatbázis/db.sql Adatbázis/db_user.sql
DB_TEST_FILES:= Adatbázis/test_users.sql Adatbázis/test_items.sql Adatbázis/test_reviews.sql
DB_EXEC := DROP DATABASE IF EXISTS review_site; $(addprefix SOURCE ,$(addsuffix ;,${DB_FILES} ${DB_TEST_FILES}))


main:
	@/bin/echo -e "Targets:\n\tdb"

install: db
	@echo "Installed."

db:
	@echo "${DB_EXEC}"
	mysql -u root -p --execute "${DB_EXEC}"
