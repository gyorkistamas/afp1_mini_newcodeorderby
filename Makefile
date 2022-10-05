DB_FILES := database/db.sql database/test_users.sql database/test_items.sql
DB_EXEC := DROP DATABASE IF EXISTS review_site; $(addprefix SOURCE ,$(addsuffix ;,${DB_FILES}))


main:
	@/bin/echo -e "Targets:\n\tdb"

db:
	@echo "${DB_EXEC}"
	mysql -u root -p --execute "${DB_EXEC}"
