#!/bin/sh
echo 'ソースコードを差分アップロードします。'

rsync -auvz ../dev amaraimusi@amaraimusi.sakura.ne.jp:www/laravel5_hello

echo "------------ 送信完了"
cmd /k