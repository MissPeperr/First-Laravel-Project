CREATE TABLE Posts (
    'id' INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    'slug' VARCHAR NOT NULL,
    'body' TEXT NOT NULL
);

INSERT INTO Posts VALUES (null, 'my-first-post', 'Omg this my first post!! WOW!!');

DELETE FROM Posts WHERE id=1;

DROP TABLE Posts;