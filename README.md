# silverstripe-skeleton-project
Silverstripe skeleton project with initial settings.
## Start work
Clone repo to your local directory <br />
```
gh repo clone sabina-talipova/silverstripe-skeleton-project
```

Add the following moduls to the require section in `composer.json`: <br/>

```
        "silverstripe/recipe-plugin": "^2",
        "silverstripe/recipe-core": "^5",
        "silverstripe/admin": "^2",
        "silverstripe/reports": "^5",
        "silverstripe/siteconfig": "^5",
        "silverstripe/login-forms": "^5"
```

Or just one CMS modules: <br/>

```
"silverstripe/recipe-cms": "^5"
```

Run this composer command <br />
```
composer install
```

### Run Docker environment

```
docker compose build

docker compose up
```
Open in browser `http://localhost:88/dev/build?flush` to run DB creation process

## Other steps

***Coming soon. In progress...***