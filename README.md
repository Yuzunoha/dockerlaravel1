# dockerlaravel1
- [@A-Kira 2019年10月15日に更新 Dockerを使ってLaravel開発環境構築][link1]

## docker起動
```
# プロジェクト直下で
docker-compose up -d
```

## phpコンテナに入る
```
# プロジェクト直下で
docker-compose exec php bash
```

## Laravelプロジェクト作成
```
# phpコンテナで
laravel new
```

## vendorディレクトリ作成
- (laravelプロジェクトをcloneした場合)
```
# phpコンテナで
composer install
```


[link1]:https://qiita.com/A-Kira/items/1c55ef689c0f91420e81
