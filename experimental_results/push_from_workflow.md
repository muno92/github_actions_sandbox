# ワークフローからのcommit・push

```bash
git config --global user.name $GITHUB_ACTOR
git config --global user.email "${GITHUB_ACTOR}@users.noreply.github.com"
```

でワークフローをトリガーしたユーザーでのcommit・pushが可能

参考)

https://docs.github.com/ja/actions/learn-github-actions/environment-variables#default-environment-variables  
https://docs.github.com/ja/account-and-profile/setting-up-and-managing-your-github-user-account/managing-email-preferences/setting-your-commit-email-address
