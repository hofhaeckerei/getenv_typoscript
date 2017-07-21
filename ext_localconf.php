<?php
defined('TYPO3_MODE') || die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tsparser.php']['preParseFunc']['getenv']
    = \H4ck3r31\GetEnvTypoScript\Modifier::class . '->resolve';