USE review_site;

INSERT INTO user (name, email, password, moderator) VALUES ('anon', 'anon@anon.anon', MD5('anon'), false);
INSERT INTO user (name, email, password, moderator) VALUES ('mod', 'mod@mod.mod', MD5('mod'), true);
