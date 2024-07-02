FROM mysql:8.0

# データベースを作成するsqlをdockerで実行
# docker-entrypoint-initdb.dにおくと実行してくれる
COPY init.sql /docker-entrypoint-initdb.d/init.sql

# コンテナ内の環境変数を設定
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=test_db
ENV MYSQL_USER=test
ENV MYSQL_PASSWORD=test

# ボリューム
VOLUME ./data:var/lib/mysql