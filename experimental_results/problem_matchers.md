# Problem Matchers

- echoコマンドでProblem Matchersを使う場合のフォーマット
  ```bash
  echo '::(notice|warning|error) file=リポジトリルートからの相対パス,line=行番号,col=列番号::メッセージ'
  ```
- 標準エラー出力もProblem Matchersにキャッチさせられる
  ```bash
  echo '"メッセージ" on ファイルパス(行番号,列番号)' 1>&2
  ```
