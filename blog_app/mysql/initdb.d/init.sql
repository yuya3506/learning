CREATE TABLE test_db.blog (
    id             INT           NOT NULL PRIMARY KEY,
    title          VARCHAR(191)  NOT NULL,
    content        INT           NOT NULL,
    category       INT           NOT NULL,
    post_at        TIMESTAMP     NOT NULL,
    publish_status INT           NOT NULL DEFAULT '1'
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
