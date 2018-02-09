### 開発環境の起動方法
#### mac上で
```
$ git clone git@github.com:Gozu-naturecue/study-cakephp.git
$ cd study-cakephp/opsfiles/vagrant
$ vagrant up
$ vagrant ssh
```

#### vagrant上で
```
$ cd /usr/share/nginx/html
$ composer update
$ cp config/app.default.php config/app.php 
#ビルトインサーバーを起動
$ bin/cake server -H 192.168.33.101 -p 8000
```

起動確認 `http://192.168.33.101:8000`