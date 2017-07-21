# TYPO3 Extension getenv_typoscript

## Description

This extension provides a simple way to access environment variables within
TypoScript at places where `stdWrap` is not available. For instance on `TEXT`
cObjects `page.10.data = getenv:MY_ENV_VARIABLE` works out of the box even
without this extension. For scenarios where `stdWrap` is not available, this
extension kicks in and allows to bridge the gap by using the `getenv` TypoScript
modifier.

General usage: `property := getenv(MY_ENV_VARIABLE)`

## Examples

The following example overrides TYPO3's baseUrl setting which does not support
`stdWrap` out of the box and thus allows to make the setting more dynamic.

```
config.baseURL = getenv(MY_BASE_URL)
```

The next example allows to configure Solr server settings in TypoScript which
as well don't support `stdWrap`.

```
plugin {
    tx_solr {
        solr {
            host := getenv(T3_SOLR_HOST)
            port := getenv(T3_SOLR_PORT)
            path := getenv(T3_SOLR_PATH)
            username := getenv(T3_SOLR_USERNAME)
            password := getenv(T3_SOLR_PASSWORD)
        }
    }
}
```

## Installation

```
composer require h4ck3r31/getenv-typoscript
```

or

```
cd typo3conf/ext/
git clone https://github.com/ohader/getenv_typoscript.git
```

Once the sources are available, the extension has to be enabled,
e.g. using the Extension Manager or making use of
[TYPO3 Console](https://github.com/TYPO3-Console/TYPO3-Console).
