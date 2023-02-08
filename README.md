This repo is a fork of [yukisov/php-owasp-zap-v2](https://github.com/yukisov/php-owasp-zap-v2). There is a branch here called `gigadat-custom` which contains a specific ammendment for [truly_legit](https://github.com/gigadat/truly_legit) and is `required` by composer. Do not merge or delete it.
```json
"require": {
    "zaproxy/php-owasp-zap-v2": "dev-gigadat-custom"
},
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/gigadat/php-owasp-zap-v2"
    }
]
```
