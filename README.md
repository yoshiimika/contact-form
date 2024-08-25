# お問い合わせフォーム　　
お問い合わせフォームを作成しました。　　
↓お問い合わせフォーム画面　　
<img width="1512" alt="スクリーンショット 2024-08-25 17 24 11" src="https://github.com/user-attachments/assets/6a7a1795-a706-4782-a4d8-4095a73d1d3d">
↓管理画面　　
<img width="1512" alt="スクリーンショット 2024-08-25 17 29 34" src="https://github.com/user-attachments/assets/803ac152-8fd0-42e5-b505-9f75eb1c9f73">


## 環境構築
### Dockerビルド

1.git clone git@github.com:coachtech-material/laravel-docker-template.git

2.docker-compose up -d --build

### Laravel環境開発

1.docker-compose exec php bash

2.composer install

3..env.exampleファイルから.envを作成し、環境変数を変更

4.php artisan key:generate

5.php artisan migrate

6.php artisan db:seed



## 使用技術(実行環境)
- php8.0
- laravel10.0
- MySQL8.0

## ER図


## URL
- 開発環境：http://localhost/
- phpMyAdmin:http://localhost:8080/
