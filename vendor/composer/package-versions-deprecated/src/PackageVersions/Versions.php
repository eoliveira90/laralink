<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = 'laravel/laravel';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'akaunting/setting' => '1.1.2@194f8c60285f66835f70e0a8e87e1a66d989b111',
  'asm89/stack-cors' => '1.3.0@b9c31def6a83f84b4d4a40d35996d375755f0e08',
  'aws/aws-sdk-php' => '3.138.10@cf197a033ad75cd9e3a90a207cf5ec8935aafa48',
  'bacon/bacon-qr-code' => '1.0.3@5a91b62b9d37cee635bbf8d553f4546057250bee',
  'brick/math' => '0.8.15@9b08d412b9da9455b210459ff71414de7e6241cd',
  'clue/stream-filter' => 'v1.4.1@5a58cc30a8bd6a4eb8f856adf61dd3e013f53f71',
  'composer/package-versions-deprecated' => '1.8.0@98df7f1b293c0550bd5b1ce6b60b59bdda23aa47',
  'dacoto/laravel-vue-dashboard-installer' => 'v1.3.1@b3fc826b97cef0415d4f9eee85e077c347bc2359',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dragonmantank/cron-expression' => 'v2.3.0@72b6fbf76adb3cf5bc0db68559b33d41219aba27',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'fideloper/proxy' => '4.3.0@ec38ad69ee378a1eec04fb0e417a97cfaf7ed11a',
  'flugger/laravel-responder' => 'v3.1.1@28dac8e2230dd30db53e2646d4441f276b0499fb',
  'fruitcake/laravel-cors' => 'v1.0.6@1d127dbec313e2e227d65e0c483765d8d7559bf6',
  'guzzlehttp/guzzle' => '6.5.4@a4a1b6930528a8f7ee03518e6442ec7a44155d9d',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'http-interop/http-factory-guzzle' => '1.0.0@34861658efb9899a6618cef03de46e2a52c80fc0',
  'intervention/image' => '2.5.1@abbf18d5ab8367f96b3205ca3c89fb2fa598c69e',
  'jackiedo/dotenv-editor' => '1.1.1@f54431c5a86d341e15c6b96c384133ea3c4ff67d',
  'jaybizzle/crawler-detect' => 'v1.2.95@a7936c4b60c78f8ae9024eeecf7e8d4cf470b730',
  'jean85/pretty-package-versions' => '1.3.0@e3517fb11b67e798239354fe8213927d012ad8f9',
  'jenssegers/agent' => 'v2.6.3@bcb895395e460478e101f41cdab139c48dc721ce',
  'kkomelin/laravel-translatable-string-exporter' => '1.10.1@4f81ad2a89463a50ebd27e981a19344d570d3464',
  'laravel/framework' => 'v7.13.0@6fa69bfbd57744a5bbec5538ce483919b3fd625f',
  'laravel/tinker' => 'v2.4.0@cde90a7335a2130a4488beb68f4b2141869241db',
  'laravolt/avatar' => '3.2.1@4650dd596e1fe3aa1909e30ee4fe5bf2b6766246',
  'lcobucci/jwt' => '3.3.2@56f10808089e38623345e28af2f2d5e4eb579455',
  'league/commonmark' => '1.4.3@412639f7cfbc0b31ad2455b2fe965095f66ae505',
  'league/flysystem' => '1.0.69@7106f78428a344bc4f643c233a94e48795f10967',
  'league/fractal' => '0.17.0@a0b350824f22fc2fdde2500ce9d6851a3f275b0e',
  'mobiledetect/mobiledetectlib' => '2.8.34@6f8113f57a508494ca36acbcfa2dc2d923c7ed5b',
  'monolog/monolog' => '2.1.0@38914429aac460e8e4616c8cb486ecb40ec90bb1',
  'mtdowling/jmespath.php' => '2.5.0@52168cb9472de06979613d365c7f1ab8798be895',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nesbot/carbon' => '2.35.0@4b9bd835261ef23d36397a46a76b496a458305e5',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'opis/closure' => '3.5.3@cac47092144043d5d676e2e7cf8d0d2f83fc89ca',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'php-http/client-common' => '2.1.0@a8b29678d61556f45d6236b1667db16d998ceec5',
  'php-http/discovery' => '1.7.4@82dbef649ccffd8e4f22e1953c3a5265992b83c0',
  'php-http/guzzle6-adapter' => 'v2.0.1@6074a4b1f4d5c21061b70bab3b8ad484282fe31f',
  'php-http/httplug' => '2.1.0@72d2b129a48f0490d55b7f89be0d6aa0597ffb06',
  'php-http/message' => '1.8.0@ce8f43ac1e294b54aabf5808515c3554a19c1e1c',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'phpoption/phpoption' => '1.7.3@4acfd6a4b33a509d8c88f50e5222f734b6aeebae',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.0@496a823ef742b632934724bf769560c2a5c7c44e',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.4@a8aec1b2981ab66882a01cce36a49b6317dc3560',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.0.1@925ad8cf55ba7a3fc92e332c58fd0478ace3e1ca',
  'ramsey/uuid' => '4.0.1@ba8fff1d3abb8bb4d35a135ed22a31c6ef3ede3d',
  'sentry/sdk' => '2.1.0@18921af9c2777517ef9fb480845c22a98554d6af',
  'sentry/sentry' => '2.4.0@e44561875e0d724bac3d9cdb705bf58847acd425',
  'sentry/sentry-laravel' => '1.7.1@8ec4695c5c6fa28d952c0f361e02997e84920354',
  'simplesoftwareio/simple-qrcode' => '2.0.0@90b2282dd29be1e52565e9832dc23af41610ea07',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/console' => 'v5.1.0@00bed125812716d09b163f0727ef33bb49bf3448',
  'symfony/css-selector' => 'v5.1.0@e544e24472d4c97b2d11ade7caacd446727c6bf9',
  'symfony/deprecation-contracts' => 'v2.1.2@dd99cb3a0aff6cadd2a8d7d7ed72c2161e218337',
  'symfony/error-handler' => 'v5.1.0@7d0b927b9d3dc41d7d46cda38cbfcd20cdcbb896',
  'symfony/event-dispatcher' => 'v5.1.0@cc0d059e2e997e79ca34125a52f3e33de4424ac7',
  'symfony/event-dispatcher-contracts' => 'v2.1.2@405952c4e90941a17e52ef7489a2bd94870bb290',
  'symfony/finder' => 'v5.1.0@4298870062bfc667cb78d2b379be4bf5dec5f187',
  'symfony/http-foundation' => 'v5.1.0@e0d853bddc2b2cfb0d67b0b4496c03fffe1d37fa',
  'symfony/http-kernel' => 'v5.1.0@75ff5327a7d6ede3ccc2fac3ebca9ed776b3e85c',
  'symfony/mime' => 'v5.1.0@56261f89385f9d13cf843a5101ac72131190bc91',
  'symfony/options-resolver' => 'v5.1.0@663f5dd5e14057d1954fe721f9709d35837f2447',
  'symfony/polyfill-ctype' => 'v1.17.0@e94c8b1bbe2bc77507a1056cdb06451c75b427f9',
  'symfony/polyfill-iconv' => 'v1.17.0@c4de7601eefbf25f9d47190abe07f79fe0a27424',
  'symfony/polyfill-intl-grapheme' => 'v1.17.0@e094b0770f7833fdf257e6ba4775be4e258230b2',
  'symfony/polyfill-intl-idn' => 'v1.17.0@3bff59ea7047e925be6b7f2059d60af31bb46d6a',
  'symfony/polyfill-intl-normalizer' => 'v1.17.0@1357b1d168eb7f68ad6a134838e46b0b159444a9',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php56' => 'v1.17.0@e3c8c138280cdfe4b81488441555583aa1984e23',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/polyfill-php80' => 'v1.17.0@5e30b2799bc1ad68f7feb62b60a73743589438dd',
  'symfony/polyfill-util' => 'v1.17.0@4afb4110fc037752cf0ce9869f9ab8162c4e20d7',
  'symfony/polyfill-uuid' => 'v1.17.0@6dbf0269e8aeab8253a5059c51c1760fb4034e87',
  'symfony/process' => 'v5.1.0@7f6378c1fa2147eeb1b4c385856ce9de0d46ebd1',
  'symfony/routing' => 'v5.1.0@95cf30145b26c758d6d832aa2d0de3128978d556',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'symfony/string' => 'v5.1.0@90c2a5103f07feb19069379f3abdcdbacc7753a9',
  'symfony/translation' => 'v5.1.0@d387f07d4c15f9c09439cf3f13ddbe0b2c5e8be2',
  'symfony/translation-contracts' => 'v2.1.2@e5ca07c8f817f865f618aa072c2fe8e0e637340e',
  'symfony/var-dumper' => 'v5.1.0@46a942903059b0b05e601f00eb64179e05578c0f',
  'tijsverkoyen/css-to-inline-styles' => '2.2.2@dda2ee426acd6d801d5b7fd1001cde9b5f790e15',
  'torann/geoip' => '1.2.1@15c7cb3d2edcfbfd7e8cd6f435defc2352df40d2',
  'tucker-eric/eloquentfilter' => '2.3.0@1bf140acfa05653e3531469d149b38ad2a672460',
  'tymon/jwt-auth' => '1.0.0@d4cf9fd2b98790712d3e6cd1094e5ff018431f19',
  'vlucas/phpdotenv' => 'v4.1.6@0b32505d67c1abbfa829283c86bfc0642a661bf6',
  'voku/portable-ascii' => '1.5.1@e7f9bd5deff09a57318f9b900ab33a05acfcf4d3',
  'wildbit/swiftmailer-postmark' => '3.1.0@f3932a6eedf04e7f43f8005ff43e103258ed1661',
  'barryvdh/laravel-ide-helper' => 'v2.7.0@5f677edc14bdcfdcac36633e6eea71b2728a4dbc',
  'barryvdh/reflection-docblock' => 'v2.0.6@6b69015d83d3daf9004a71a89f26e27d27ef6a16',
  'composer/ca-bundle' => '1.2.7@95c63ab2117a72f48f5a55da9740a3273d45b7fd',
  'composer/composer' => '1.10.6@be81b9c4735362c26876bdbfd3b5bc7e7f711c88',
  'composer/semver' => '1.5.1@c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
  'composer/spdx-licenses' => '1.5.3@0c3e51e1880ca149682332770e25977c70cf9dae',
  'composer/xdebug-handler' => '1.4.1@1ab9842d69e64fb3a01be6b656501032d1b78cb7',
  'doctrine/cache' => '1.10.1@35a4a70cd94e09e2259dfae7488afc6b474ecbd3',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'facade/flare-client-php' => '1.3.2@db1e03426e7f9472c9ecd1092aff00f56aa6c004',
  'facade/ignition' => '2.0.5@38e1b180544bfefebe37e0f65980792ea78a534a',
  'facade/ignition-contracts' => '1.0.0@f445db0fb86f48e205787b2592840dd9c80ded28',
  'filp/whoops' => '2.7.2@17d0d3f266c8f925ebd035cd36f83cf802b47d4a',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'hamcrest/hamcrest-php' => 'v2.0.0@776503d3a8e85d4f9a1148614f95b7a608b046ad',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'mockery/mockery' => '1.4.0@6c6a7c533469873deacf998237e7649fc6b36223',
  'myclabs/deep-copy' => '1.9.5@b2c28789e80a97badd14145fda39b545d83ca3ef',
  'nunomaduro/collision' => 'v4.2.0@d50490417eded97be300a92cd7df7badc37a9018',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpunit/php-code-coverage' => '8.0.2@ca6647ffddd2add025ab3f21644a441d7c146cdc',
  'phpunit/php-file-iterator' => '3.0.1@4ac5b3e13df14829daa60a2eb4fdd2f2b7d33cf4',
  'phpunit/php-invoker' => '3.0.0@7579d5a1ba7f3ac11c80004d205877911315ae7a',
  'phpunit/php-text-template' => '2.0.0@526dc996cc0ebdfa428cd2dfccd79b7b53fee346',
  'phpunit/php-timer' => '3.1.4@dc9368fae6ef2ffa57eba80a7410bcef81df6258',
  'phpunit/php-token-stream' => '4.0.1@cdc0db5aed8fbfaf475fbd95bfd7bab83c7a779c',
  'phpunit/phpunit' => '9.1.5@1b570cd7edbe136055bf5f651857dc8af6b829d2',
  'scrivo/highlight.php' => 'v9.18.1.1@52fc21c99fd888e33aed4879e55a3646f8d40558',
  'sebastian/code-unit' => '1.0.2@ac958085bc19fcd1d36425c781ef4cbb5b06e2a5',
  'sebastian/code-unit-reverse-lookup' => '2.0.0@5b5dbe0044085ac41df47e79d34911a15b96d82e',
  'sebastian/comparator' => '4.0.0@85b3435da967696ed618ff745f32be3ff4a2b8e8',
  'sebastian/diff' => '4.0.1@3e523c576f29dacecff309f35e4cc5a5c168e78a',
  'sebastian/environment' => '5.1.0@c753f04d68cd489b6973cf9b4e505e191af3b05c',
  'sebastian/exporter' => '4.0.0@80c26562e964016538f832f305b2286e1ec29566',
  'sebastian/global-state' => '4.0.0@bdb1e7c79e592b8c82cb1699be3c8743119b8a72',
  'sebastian/object-enumerator' => '4.0.0@e67516b175550abad905dc952f43285957ef4363',
  'sebastian/object-reflector' => '2.0.0@f4fd0835cabb0d4a6546d9fe291e5740037aa1e7',
  'sebastian/recursion-context' => '4.0.0@cdd86616411fc3062368b720b0425de10bd3d579',
  'sebastian/resource-operations' => '3.0.0@8c98bf0dfa1f9256d0468b9803a1e1df31b6fa98',
  'sebastian/type' => '2.0.0@9e8f42f740afdea51f5f4e8cec2035580e797ee1',
  'sebastian/version' => '3.0.0@0411bde656dce64202b39c2f4473993a9081d39e',
  'seld/jsonlint' => '1.8.0@ff2aa5420bfbc296cf6a0bc785fa5b35736de7c1',
  'seld/phar-utils' => '1.1.0@8800503d56b9867d43d9c303b9cbcc26016e82f0',
  'symfony/filesystem' => 'v5.1.0@6e4320f06d5f2cce0d96530162491f4465179157',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'laravel/laravel' => 'dev-master@9a1442fbc4d83cc242eb02061a1c31bc5ab59c65',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
