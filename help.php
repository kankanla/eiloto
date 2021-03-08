<!-- 
    mysql ダウンロード
    mysql-8.0.23-winx64.zip

    初期化
    mysqld --initialize
    サービス登録
    mysqld --install MYSQL80
    mysqld --remove MYSQL80
    サービス起動
    NET START MYSQL80

    初期パスワード下記のファイルにある
    C:\mysql864\data\DESKTOP30c.err
    [Note] [MY-010454] [Server] A temporary password is generated for root@localhost: !i0i1<%P_<hu
    パスワード変更
    SET PASSWORD = 'toor'

    php.ini
    extension=mysqli
    extension=sqlite3
    extension_dir = "ext"

    MySQLの使い方
    https://www.dbonline.jp/mysql/

    %HOMEPATH%\\Desktop\php8\php -S 192.168.11.110:80 -t %HOMEPATH%\Desktop\eiloto
 -->
<?php
phpinfo();
?>
