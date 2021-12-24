# PHPUnitでのテストコード実装超入門ハンズオン用 環境構築

よかったらstarつけてください！！

## 環境・バージョン

- PHP: 8.0.13
- Laravel: 8.76.2
- Nginx: 1.19.x
- Mysql: 8.0.x

## Dockerインストール
以下記事を参考にインストール

### Macユーザー
[DockerをMacにインストールする（更新: 2019/7/13）](https://qiita.com/kurkuru/items/127fa99ef5b2f0288b81)

### Windowsユーザー
[Windows 10 HomeへのDocker Desktop (ver 3.0.0) インストールが何事もなく簡単にできるようになっていた (2020.12時点)](https://qiita.com/zaki-lknr/items/db99909ba1eb27803456)

- Docker Desktopが起動しない場合は、Hyper-Vを有効化にしてみてください。
- 参考記事：[【入門】はじめての Docker Desktop for Windows のインストールと CentOS の仮想環境構築のセットアップ](https://qiita.com/gahoh/items/7b21377b5c9e3ffddf4a#hyper-v%E3%81%AE%E6%9C%89%E5%8A%B9%E5%8C%96-%E3%81%AB%E3%81%99%E3%82%8B)

以下コマンドを実行してバージョンが表示されたらインストール完了

```sh
docker -v
docker-compose -v
```

## Docker環境起動

```sh
docker-compose up -d --build
```

以下が出力されたら起動完了

```sh
Successfully built e310c39612cdffd4617eb3c21e02534f372c6ea8234230011e123afd0be4dfbb
Creating hands-on-phpunit_db_1  ... done
Creating hands-on-phpunit_app_1 ... done
Creating hands-on-phpunit_web_1 ... done
```

念のため以下のコマンドでコンテナの起動状態を確認。

```sh
docker-compose ps
```

全てのコンテナのSTATUSが`running`になっていたらOK。

```sh
NAME                     SERVICE             STATUS              PORTS
hands-on-phpunit_app_1   app                 running             9000/tcp
hands-on-phpunit_db_1    db                  running             0.0.0.0:3306->3306/tcp, 33060/tcp
hands-on-phpunit_web_1   web                 running             0.0.0.0:80->80/tcp
```

## Laravel設定

[既存のLaravelプロジェクトをgit cloneしてローカルで開発準備をする時の手順（Docker、Docker Compose使用）](https://zenn.dev/shimotaroo/articles/4ee537dbed319e)にまとめているが、以下にも記載↓

### .envの作成

`src`ディレクトリの中の`.env.example`をコピーして`.env`という名前で作成

### composerパッケージのインストール

以降のコマンドはルートディレクトリで実行する

```sh
docker-compose exec app composer install
```

### APP_KEYの作成

```sh
docker-compose exec app php artisan key:generate
```

### マイグレーションとシーダーの実行

```sh
docker-compose exec app php artisan migrate --seed
```

### Laravelへのアクセス

http://localhost:80 にアクセスして以下の画面が表示されたらOK

![ハンズオントップ画面](https://user-images.githubusercontent.com/58982088/146734840-f10978dd-446e-4809-8bce-2872e15d0f83.png)

※実際のコードでは「入門」ではなく「超入門」に変更しています。