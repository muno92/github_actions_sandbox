# serviceコンテナでのbuild matrix使用　

build matrixはserviceコンテナのimage指定でも使える

サンプル)
```yaml
strategy:
  fail-fast: false
  matrix:
    postgres-verison: [ 9.6, 10, 11, 12, 13, 14 ]
services:
  postgres:
    image: postgres:${{ matrix.postgres-verison }}
    env:
      POSTGRES_PASSWORD: password
    ports:
      - 5432:5432
```
