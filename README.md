# LAMP環境（Docker）
## 環境構築
### 手順
1. `git clone https://github.com/Riho0511/lamp-docker.git` でリポジトリをクローン
2. `docker-compose build` でコンテナを作成する
3. `docker-compose up -d` で起動する

### 使用ポート（ローカル）
- PHP & Apatch：8080
- MySQL：3306
- phpmyadmin：8888

※ .envファイルにより変更可能

### DB・phpmyadminのユーザー
**rootユーザー**
Pass：root

**ユーザー**
username：dbuser
Pass：password


## 注意
- ローカルにDockerを入れていない場合は入れてから行う。
- 使用PCがM2チップのMacbookのため、` platform: linux/amd64`を記載している。（Windowsなら不要）