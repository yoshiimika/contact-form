# お問い合わせフォーム　　
お問い合わせフォームを作成しました。  
ログイン後、お問い合わせフォームから送信したお問い合わせ内容を一覧で確認する事が出来ます。  
↓お問い合わせフォーム画面　　
<img width="1512" alt="スクリーンショット 2024-08-25 17 24 11" src="https://github.com/user-attachments/assets/6a7a1795-a706-4782-a4d8-4095a73d1d3d">
↓管理画面　　
<img width="1512" alt="スクリーンショット 2024-08-25 17 29 34" src="https://github.com/user-attachments/assets/803ac152-8fd0-42e5-b505-9f75eb1c9f73">

## 作成した目的
学習のアウトプットとして作成しました。

## URL
- 開発環境：http://localhost/
- phpMyAdmin:http://localhost:8080/

## 機能一覧
- 会員登録機能
- ログイン機能
- ログアウト機能
- 勤務開始/勤務終了(日を跨いだ時点で翌日の出勤操作に切り替え)
- 休憩開始/休憩終了(1日で何度も休憩が可能)
- 日付別勤怠情報取得
- ユーザー別勤怠情報取得
- ユーザー一覧情報取得
- ページネーション（５件ずつ取得）
- メール認証

## 使用技術（実行環境）
- laravel8.0
- laravel10.0
- MySQL8.0

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

## ER図

