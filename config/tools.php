<?php

use App\Filament\Pages\Tools\ManageBcryptGeneratorSettings;
use App\Filament\Pages\Tools\ManageBinaryToTextSettings;
use App\Filament\Pages\Tools\ManageCSSMinifierSettings;
use App\Filament\Pages\Tools\ManageCSVToJSONSettings;
use App\Filament\Pages\Tools\ManageDomainGeneratorSettings;
use App\Filament\Pages\Tools\ManageDomainWhoisSettings;
use App\Filament\Pages\Tools\ManageDuplicateLinesRemoverSettings;
use App\Filament\Pages\Tools\ManageEmailExtractorSettings;
use App\Filament\Pages\Tools\ManageEmailValidatorSettings;
use App\Filament\Pages\Tools\ManageHashGeneratorSettings;
use App\Filament\Pages\Tools\ManageHexToRGBSettings;
use App\Filament\Pages\Tools\ManageHostnameToIPSettings;
use App\Filament\Pages\Tools\ManageHTACCESSRedirectGeneratorSettings;
use App\Filament\Pages\Tools\ManageHTMLEntityDecodeSettings;
use App\Filament\Pages\Tools\ManageHTMLEntityEncodeSettings;
use App\Filament\Pages\Tools\ManageHTMLFormatterSettings;
use App\Filament\Pages\Tools\ManageHTMLMinifierSettings;
use App\Filament\Pages\Tools\ManageHTMLTagsStripperSettings;
use App\Filament\Pages\Tools\ManageHTMLToMarkdownSettings;
use App\Filament\Pages\Tools\ManageHTTPHeadersParserSettings;
use App\Filament\Pages\Tools\ManageHTTPStatusCodeCheckerSettings;
use App\Filament\Pages\Tools\ManageImageToBase64Settings;
use App\Filament\Pages\Tools\ManageIPInformationSettings;
use App\Filament\Pages\Tools\ManageIPToHostnameSettings;
use App\Filament\Pages\Tools\ManageJSFormatterSettings;
use App\Filament\Pages\Tools\ManageJSMinifierSettings;
use App\Filament\Pages\Tools\ManageJSObfuscatorSettings;
use App\Filament\Pages\Tools\ManageJSONToCSVSettings;
use App\Filament\Pages\Tools\ManageLineBreakRemoverSettings;
use App\Filament\Pages\Tools\ManageLoremIpsumGeneratorSettings;
use App\Filament\Pages\Tools\ManageMarkdownToHTMLSettings;
use App\Filament\Pages\Tools\ManageMD5GeneratorSettings;
use App\Filament\Pages\Tools\ManagePasswordGeneratorSettings;
use App\Filament\Pages\Tools\ManagePasswordStrengthTestSettings;
use App\Filament\Pages\Tools\ManagePingSettings;
use App\Filament\Pages\Tools\ManagePrivacyPolicyGeneratorSettings;
use App\Filament\Pages\Tools\ManageQRCodeReaderSettings;
use App\Filament\Pages\Tools\ManageQRGeneratorSettings;
use App\Filament\Pages\Tools\ManageRGBToHexSettings;
use App\Filament\Pages\Tools\ManageRobotstxtGeneratorSettings;
use App\Filament\Pages\Tools\ManageSEOTagsGeneratorSettings;
use App\Filament\Pages\Tools\ManageSHAGeneratorSettings;
use App\Filament\Pages\Tools\ManageSQLBeautifierSettings;
use App\Filament\Pages\Tools\ManageSSLCheckerSettings;
use App\Filament\Pages\Tools\ManageTermsOfServiceGeneratorSettings;
use App\Filament\Pages\Tools\ManageTextSeparatorSettings;
use App\Filament\Pages\Tools\ManageTextToBase64Settings;
use App\Filament\Pages\Tools\ManageTextToBinarySettings;
use App\Filament\Pages\Tools\ManageTimestampConverterSettings;
use App\Filament\Pages\Tools\ManageURLDecoderSettings;
use App\Filament\Pages\Tools\ManageURLEncoderSettings;
use App\Filament\Pages\Tools\ManageURLExtractorSettings;
use App\Filament\Pages\Tools\ManageURLUnshortenerSettings;
use App\Filament\Pages\Tools\ManageUserAgentFinderSettings;
use App\Filament\Pages\Tools\ManageUUIDv4GeneratorSettings;
use App\Filament\Pages\Tools\ManageWebsiteStatusCheckerSettings;
use App\Filament\Pages\Tools\ManageWordCountSettings;
use App\Filament\Pages\Tools\ManageYouTubeThumbnailDownloaderSettings;
use App\Http\Livewire\Tools\BcryptGenerator;
use App\Http\Livewire\Tools\CSVToJSON;
use App\Http\Livewire\Tools\DomainGenerator;
use App\Http\Livewire\Tools\DomainWhois;
use App\Http\Livewire\Tools\HashGenerator;
use App\Http\Livewire\Tools\HostnameToIP;
use App\Http\Livewire\Tools\HTTPHeadersParser;
use App\Http\Livewire\Tools\HTTPStatusCodeChecker;
use App\Http\Livewire\Tools\JSONToCSV;
use App\Http\Livewire\Tools\MD5Generator;
use App\Http\Livewire\Tools\Ping;
use App\Http\Livewire\Tools\PrivacyPolicyGenerator;
use App\Http\Livewire\Tools\QRGenerator;
use App\Http\Livewire\Tools\SHAGenerator;
use App\Http\Livewire\Tools\SSLChecker;
use App\Http\Livewire\Tools\TermsOfService;
use App\Http\Livewire\Tools\TermsOfServiceGenerator;
use App\Http\Livewire\Tools\TimestampConverter;
use App\Http\Livewire\Tools\URLDecoder;
use App\Http\Livewire\Tools\URLEncoder;
use App\Http\Livewire\Tools\URLUnshortener;
use App\Http\Livewire\Tools\UserAgentFinder;
use App\Http\Livewire\Tools\UUIDv4Generator;
use App\Http\Livewire\Tools\WebsiteStatusChecker;
use App\Http\Livewire\Tools\WhatsMyIp;
use App\Settings\Tools\BcryptGeneratorSettings;
use App\Settings\Tools\BinaryToTextSettings;
use App\Settings\Tools\CSSFormatterSettings;
use App\Settings\Tools\CSSMinifierSettings;
use App\Settings\Tools\CSVToJSONSettings;
use App\Settings\Tools\DomainGeneratorSettings;
use App\Settings\Tools\DomainWhoisSettings;
use App\Settings\Tools\DuplicateLinesRemoverSettings;
use App\Settings\Tools\EmailExtractorSettings;
use App\Settings\Tools\EmailValidatorSettings;
use App\Settings\Tools\HashGeneratorSettings;
use App\Settings\Tools\HexToRGBSettings;
use App\Settings\Tools\HostnameToIPSettings;
use App\Settings\Tools\HTACCESSRedirectGeneratorSettings;
use App\Settings\Tools\HTMLEntityDecodeSettings;
use App\Settings\Tools\HTMLEntityEncodeSettings;
use App\Settings\Tools\HTMLFormatterSettings;
use App\Settings\Tools\HTMLMinifierSettings;
use App\Settings\Tools\HTMLTagsStripperSettings;
use App\Settings\Tools\HTMLToMarkdownSettings;
use App\Settings\Tools\HTTPHeadersParserSettings;
use App\Settings\Tools\HTTPStatusCodeCheckerSettings;
use App\Settings\Tools\ImageToBase64Settings;
use App\Settings\Tools\IPInformationSettings;
use App\Settings\Tools\IPToHostnameSettings;
use App\Settings\Tools\JSFormatterSettings;
use App\Settings\Tools\JSMinifierSettings;
use App\Settings\Tools\JSObfuscatorSettings;
use App\Settings\Tools\JSONToCSVSettings;
use App\Settings\Tools\LineBreakRemoverSettings;
use App\Settings\Tools\LoremIpsumGeneratorSettings;
use App\Settings\Tools\MarkdownToHTMLSettings;
use App\Settings\Tools\MD5GeneratorSettings;
use App\Settings\Tools\PasswordGeneratorSettings;
use App\Settings\Tools\PasswordStrengthTestSettings;
use App\Settings\Tools\PingSettings;
use App\Settings\Tools\PrivacyPolicyGeneratorSettings;
use App\Settings\Tools\QRCodeReaderSettings;
use App\Settings\Tools\QRGeneratorSettings;
use App\Settings\Tools\RGBToHexSettings;
use App\Settings\Tools\RobotstxtGenerator;
use App\Settings\Tools\RobotstxtGeneratorSettings;
use App\Settings\Tools\SEOTagsGeneratorSettings;
use App\Settings\Tools\SHAGeneratorSettings;
use App\Settings\Tools\SQLBeautifierSettings;
use App\Settings\Tools\SSLCheckerSettings;
use App\Settings\Tools\TermsOfServiceGeneratorSettings;
use App\Settings\Tools\TextSeparatorSettings;
use App\Settings\Tools\TextToBase64Settings;
use App\Settings\Tools\TextToBinarySettings;
use App\Settings\Tools\TimestampConverterSettings;
use App\Settings\Tools\URLDecoderSettings;
use App\Settings\Tools\URLEncoderSettings;
use App\Settings\Tools\URLExtractorSettings;
use App\Settings\Tools\URLUnshortenerSettings;
use App\Settings\Tools\UserAgentFinderSettings;
use App\Settings\Tools\UUIDv4GeneratorSettings;
use App\Settings\Tools\WebsiteStatusCheckerSettings;
use App\Settings\Tools\WhatsMyIpSettings;
use App\Settings\Tools\WordCountSettings;
use App\Settings\Tools\YouTubeThumbnailDownloaderSettings;

return [
    'categories' => [
        'Utilities' => [
            'view'  => 'modules.categories.utilities',
            'admin' => [
                'title' => 'Utilities'
            ],
            
            'tools' => [
                'WebsiteStatusChecker' => [
                    'name' => 'website-status-checker',

                    'settings'  => WebsiteStatusCheckerSettings::class,
                    'component' => WebsiteStatusChecker::class,

                    'templates' => [
                        'header'   => 'modules.tools.website-status-checker.header',
                        'selector' => 'modules.tools.website-status-checker.selector'
                    ],

                    'admin' => [
                        'title'         => 'Website Status Checker',
                        'summary'       => 'Check the Status of any Website',
                        'settings-page' => ManageWebsiteStatusCheckerSettings::class
                    ]
                ],

                'UserAgentFinder' => [
                    'name' => 'user-agent-finder',

                    'settings'  => UserAgentFinderSettings::class,
                    'component' => UserAgentFinder::class,

                    'templates' => [
                        'header'   => 'modules.tools.user-agent-finder.header',
                        'selector' => 'modules.tools.user-agent-finder.selector'
                    ],

                    'admin' => [
                        'title'         => 'User Agent Finder',
                        'summary'       => 'Find your the User Agent',
                        'settings-page' => ManageUserAgentFinderSettings::class
                    ]
                ],

                'WhatsMyIp' => [
                    'name' => 'whats-my-ip',

                    'settings'  => WhatsMyIpSettings::class,
                    'view'      => 'modules.tools.whats-my-ip.view',

                    'templates' => [
                        'header'   => 'modules.tools.whats-my-ip.header',
                        'selector' => 'modules.tools.whats-my-ip.selector'
                    ],

                    'admin' => [
                        'title'         => 'Whats My IP',
                        'summary'       => 'Find your IP Address',
                        'settings-page' => ManageUserAgentFinderSettings::class
                    ]
                ],

                'Ping' => [
                    'name' => 'ping',

                    'settings'  => PingSettings::class,
                    'component' => Ping::class,

                    'templates' => [
                        'header'   => 'modules.tools.ping.header',
                        'selector' => 'modules.tools.ping.selector'
                    ],

                    'admin' => [
                        'title'         => 'Ping',
                        'summary'       => 'Measure latency from any Address',
                        'settings-page' => ManagePingSettings::class
                    ]
                ],

                'URLUnshortener' => [
                    'name' => 'url-unshortener',

                    'settings'  => URLUnshortenerSettings::class,
                    'component' => URLUnshortener::class,

                    'templates' => [
                        'header'   => 'modules.tools.url-unshortener.header',
                        'selector' => 'modules.tools.url-unshortener.selector'
                    ],

                    'admin' => [
                        'title'         => 'URL Unshortener',
                        'summary'       => 'Unshorten your URLs',
                        'settings-page' => ManageURLUnshortenerSettings::class
                    ]
                ],

                'URLEncoder' => [
                    'name' => 'url-encoder',

                    'settings'  => URLEncoderSettings::class,
                    'component' => URLEncoder::class,

                    'templates' => [
                        'header'   => 'modules.tools.url-encoder.header',
                        'selector' => 'modules.tools.url-encoder.selector'
                    ],

                    'admin' => [
                        'title'         => 'URL Encoder',
                        'summary'       => 'Encode your URLs',
                        'settings-page' => ManageURLEncoderSettings::class
                    ]
                ],

                'URLDecoder' => [
                    'name' => 'url-decoder',

                    'settings'  => URLDecoderSettings::class,
                    'component' => URLDecoder::class,

                    'templates' => [
                        'header'   => 'modules.tools.url-decoder.header',
                        'selector' => 'modules.tools.url-decoder.selector'
                    ],

                    'admin' => [
                        'title'         => 'URL Decoder',
                        'summary'       => 'Decode your URLs',
                        'settings-page' => ManageURLDecoderSettings::class
                    ]
                ],

                'SSLChecker' => [
                    'name' => 'ssl-checker',

                    'settings'  => SSLCheckerSettings::class,
                    'component' => SSLChecker::class,

                    'templates' => [
                        'header'   => 'modules.tools.ssl-checker.header',
                        'selector' => 'modules.tools.ssl-checker.selector'
                    ],

                    'admin' => [
                        'title'         => 'SSL Checker',
                        'summary'       => 'Validate SSL Certificates',
                        'settings-page' => ManageSSLCheckerSettings::class
                    ]
                ],

                'QRGenerator' => [
                    'name' => 'qr-generator',

                    'settings'  => QRGeneratorSettings::class,
                    'view'      => 'modules.tools.qr-generator.view',

                    'templates' => [
                        'header'   => 'modules.tools.qr-generator.header',
                        'selector' => 'modules.tools.qr-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'QR Code Generator',
                        'summary'       => 'Create QR Codes',
                        'settings-page' => ManageQRGeneratorSettings::class
                    ]
                ],

                'QRCodeReader' => [
                    'name' => 'qr-code-reader',

                    'settings'  => QRCodeReaderSettings::class,
                    'view'      => 'modules.tools.qr-code-reader.view',

                    'templates' => [
                        'header'   => 'modules.tools.qr-code-reader.header',
                        'selector' => 'modules.tools.qr-code-reader.selector'
                    ],

                    'scripts' => [
                        ['js/qr-scanner.js', 'internal']
                    ],

                    'admin' => [
                        'title'         => 'QR Code Reader',
                        'summary'       => 'Read QR Codes',
                        'settings-page' => ManageQRCodeReaderSettings::class
                    ]
                ],

                'HTTPHeadersParser' => [
                    'name' => 'http-headers-parser',

                    'settings'  => HTTPHeadersParserSettings::class,
                    'component' => HTTPHeadersParser::class,

                    'templates' => [
                        'header'   => 'modules.tools.http-headers-parser.header',
                        'selector' => 'modules.tools.http-headers-parser.selector'
                    ],

                    'admin' => [
                        'title'         => 'HTTP Headers Parser',
                        'summary'       => 'View & Parse HTTP Headers',
                        'settings-page' => ManageHTTPHeadersParserSettings::class
                    ]
                ],

                'UUIDv4Generator' => [
                    'name' => 'uuidv4-generator',

                    'settings'  => UUIDv4GeneratorSettings::class,
                    'component' => UUIDv4Generator::class,

                    'templates' => [
                        'header'   => 'modules.tools.uuidv4-generator.header',
                        'selector' => 'modules.tools.uuidv4-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'UUIDv4 Generator',
                        'summary'       => 'Generate UUIDv4 IDs',
                        'settings-page' => ManageUUIDv4GeneratorSettings::class
                    ]
                ],

                'YouTubeThumbnailDownloader' => [
                    'name' => 'youtube-thumbnail-downloader',

                    'settings'  => YouTubeThumbnailDownloaderSettings::class,
                    'view' => 'modules.tools.youtube-thumbnail-downloader.view',

                    'templates' => [
                        'header'   => 'modules.tools.youtube-thumbnail-downloader.header',
                        'selector' => 'modules.tools.youtube-thumbnail-downloader.selector'
                    ],

                    'admin' => [
                        'title'         => 'YouTube Thumbnail Downloader',
                        'summary'       => 'Download YouTube Thumbnails',
                        'settings-page' => ManageYouTubeThumbnailDownloaderSettings::class
                    ]
                ],

                'EmailValidator' => [
                    'name' => 'email-validator',

                    'settings'  => EmailValidatorSettings::class,
                    'view' => 'modules.tools.email-validator.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.email-validator.header',
                        'selector' => 'modules.tools.email-validator.selector'
                    ],

                    'admin' => [
                        'title'         => 'E-mail Validator',
                        'summary'       => 'Validate E-mail Addressess',
                        'settings-page' => ManageEmailValidatorSettings::class
                    ]
                ],
            ]
        ],

        'Converters' => [
            'view' => 'modules.categories.converters',
            'admin' => [
                'title' => 'Converters'
            ],

            'tools' => [
                'RGBToHex' => [
                    'name' => 'rgb-to-hex',

                    'settings'  => RGBToHexSettings::class,
                    'view'      => 'modules.tools.rgb-to-hex.view',

                    'templates' => [
                        'header'   => 'modules.tools.rgb-to-hex.header',
                        'selector' => 'modules.tools.rgb-to-hex.selector'
                    ],

                    'admin' => [
                        'title'         => 'RGB To Hex',
                        'summary'       => 'Convert RGB to Hex Colors',
                        'settings-page' => ManageRGBToHexSettings::class
                    ]
                ],

                'HexToRGB' => [
                    'name' => 'hex-to-rgb',

                    'settings'  => HexToRGBSettings::class,
                    'view'      => 'modules.tools.hex-to-rgb.view',

                    'templates' => [
                        'header'   => 'modules.tools.hex-to-rgb.header',
                        'selector' => 'modules.tools.hex-to-rgb.selector'
                    ],

                    'admin' => [
                        'title'         => 'Hex To RGB',
                        'summary'       => 'Convert Hex to RGB Colors',
                        'settings-page' => ManageHexToRGBSettings::class
                    ]
                ],

                'TimestampConverter' => [
                    'name' => 'timestamp-converter',

                    'settings'  => TimestampConverterSettings::class,
                    'component' => TimestampConverter::class,

                    'templates' => [
                        'header'   => 'modules.tools.timestamp-converter.header',
                        'selector' => 'modules.tools.timestamp-converter.selector'
                    ],

                    'admin' => [
                        'title'         => 'Timestamp Converter',
                        'summary'       => 'Convert UNIX Timestamps',
                        'settings-page' => ManageTimestampConverterSettings::class
                    ]
                ],

                'TextToBinary' => [
                    'name' => 'text-to-binary',

                    'settings'  => TextToBinarySettings::class,
                    'view' => 'modules.tools.text-to-binary.view',

                    'templates' => [
                        'header'   => 'modules.tools.text-to-binary.header',
                        'selector' => 'modules.tools.text-to-binary.selector'
                    ],

                    'admin' => [
                        'title'         => 'Text To Binary',
                        'summary'       => 'Convert Text to Binary',
                        'settings-page' => ManageTextToBinarySettings::class
                    ]
                ],

                'BinaryToText' => [
                    'name' => 'binary-to-text',

                    'settings'  => BinaryToTextSettings::class,
                    'view' => 'modules.tools.binary-to-text.view',

                    'templates' => [
                        'header'   => 'modules.tools.binary-to-text.header',
                        'selector' => 'modules.tools.binary-to-text.selector'
                    ],

                    'admin' => [
                        'title'         => 'Binary to Text',
                        'summary'       => 'Convert Binary to Text',
                        'settings-page' => ManageBinaryToTextSettings::class
                    ]
                ],

                'TextToBase64' => [
                    'name' => 'text-to-base64',

                    'settings'  => TextToBase64Settings::class,
                    'view' => 'modules.tools.text-to-base64.view',

                    'templates' => [
                        'header'   => 'modules.tools.text-to-base64.header',
                        'selector' => 'modules.tools.text-to-base64.selector'
                    ],

                    'admin' => [
                        'title'         => 'Text to Base64',
                        'summary'       => 'Convert Text to Base64',
                        'settings-page' => ManageTextToBase64Settings::class
                    ]
                ],

                'ImageToBase64' => [
                    'name' => 'image-to-base64',

                    'settings'  => ImageToBase64Settings::class,
                    'view' => 'modules.tools.image-to-base64.view',

                    'templates' => [
                        'header'   => 'modules.tools.image-to-base64.header',
                        'selector' => 'modules.tools.image-to-base64.selector'
                    ],

                    'admin' => [
                        'title'         => 'Image to Base64',
                        'summary'       => 'Convert Images to Base64',
                        'settings-page' => ManageImageToBase64Settings::class
                    ]
                ],

                'MarkdownToHTML' => [
                    'name' => 'markdown-to-html',

                    'settings'  => MarkdownToHTMLSettings::class,
                    'view' => 'modules.tools.markdown-to-html.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'https://cdn.jsdelivr.net/npm/showdown@2.1.0/dist/showdown.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/mode-html.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify.min.js',      'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify-css.min.js',  'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify-html.min.js', 'external' ]
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.markdown-to-html.header',
                        'selector' => 'modules.tools.markdown-to-html.selector'
                    ],

                    'admin' => [
                        'title'         => 'Markdown To HTML',
                        'summary'       => 'Convert Markdown to HTML',
                        'settings-page' => ManageMarkdownToHTMLSettings::class
                    ]
                ],

                'HTMLToMarkdown' => [
                    'name' => 'html-to-markdown',

                    'settings'  => HTMLToMarkdownSettings::class,
                    'view' => 'modules.tools.html-to-markdown.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'https://cdn.jsdelivr.net/npm/showdown@2.1.0/dist/showdown.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/mode-html.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify.min.js',      'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify-css.min.js',  'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify-html.min.js', 'external' ]
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.html-to-markdown.header',
                        'selector' => 'modules.tools.html-to-markdown.selector'
                    ],

                    'admin' => [
                        'title'         => 'HTML To Markdown',
                        'summary'       => 'Convert HTML to Markdown',
                        'settings-page' => ManageHTMLToMarkdownSettings::class
                    ]
                ],

                'CSVToJSON' => [
                    'name' => 'csv-to-json',

                    'settings'  => CSVToJSONSettings::class,
                    'component' => CSVToJSON::class,

                    'templates' => [
                        'header'   => 'modules.tools.csv-to-json.header',
                        'selector' => 'modules.tools.csv-to-json.selector'
                    ],

                    'admin' => [
                        'title'         => 'CSV To JSON',
                        'summary'       => 'Convert CSV to JSON',
                        'settings-page' => ManageCSVToJSONSettings::class
                    ]
                ],

                'JSONToCSV' => [
                    'name' => 'json-to-csv',

                    'settings'  => JSONToCSVSettings::class,
                    'component' => JSONToCSV::class,

                    'templates' => [
                        'header'   => 'modules.tools.json-to-csv.header',
                        'selector' => 'modules.tools.json-to-csv.selector'
                    ],

                    'admin' => [
                        'title'         => 'JSON To CSV',
                        'summary'       => 'Convert JSON to CSV',
                        'settings-page' => ManageJSONToCSVSettings::class
                    ]
                ]
            ]
        ],

        'Security' => [
            'view'  => 'modules.categories.security',
            'admin' => [
                'title' => 'Security'
            ],

            'tools' => [
                'PasswordGenerator' => [
                    'name' => 'password-generator',

                    'settings'  => PasswordGeneratorSettings::class,
                    'view'      => 'modules.tools.password-generator.view',

                    'templates' => [
                        'header'   => 'modules.tools.password-generator.header',
                        'selector' => 'modules.tools.password-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'Password Generator',
                        'summary'       => 'Create secure passwords',
                        'settings-page' => ManagePasswordGeneratorSettings::class
                    ]
                ],

                'PasswordStrengthTest' => [
                    'name' => 'password-strength-test',

                    'settings'  => PasswordStrengthTestSettings::class,
                    'view' => 'modules.tools.password-strength-test.view',

                    'templates' => [
                        'header'   => 'modules.tools.password-strength-test.header',
                        'selector' => 'modules.tools.password-strength-test.selector'
                    ],

                    'admin' => [
                        'title'         => 'Password Strength Test',
                        'summary'       => 'Test Password Strength',
                        'settings-page' => ManagePasswordStrengthTestSettings::class
                    ]
                ],

                'MD5Generator' => [
                    'name' => 'md5-generator',

                    'settings'  => MD5GeneratorSettings::class,
                    'component' => MD5Generator::class,

                    'templates' => [
                        'header'   => 'modules.tools.md5-generator.header',
                        'selector' => 'modules.tools.md5-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'MD5 Generator',
                        'summary'       => 'Calculate MD5 Hashes',
                        'settings-page' => ManageMD5GeneratorSettings::class
                    ]
                ],

                'SHAGenerator' => [
                    'name' => 'sha-generator',

                    'settings'  => SHAGeneratorSettings::class,
                    'component' => SHAGenerator::class,

                    'templates' => [
                        'header'   => 'modules.tools.sha-generator.header',
                        'selector' => 'modules.tools.sha-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'SHA Generator',
                        'summary'       => 'Calculate SHA Hashes',
                        'settings-page' => ManageSHAGeneratorSettings::class
                    ]
                ],

                'BcryptGenerator' => [
                    'name' => 'bcrypt-generator',

                    'settings'  => BcryptGeneratorSettings::class,
                    'component' => BcryptGenerator::class,

                    'templates' => [
                        'header'   => 'modules.tools.bcrypt-generator.header',
                        'selector' => 'modules.tools.bcrypt-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'Bcrypt Generator',
                        'summary'       => 'Calculate Bcrypt Hashes',
                        'settings-page' => ManageBcryptGeneratorSettings::class
                    ]
                ],

                'HashGenerator' => [
                    'name' => 'hash-generator',

                    'settings'  => HashGeneratorSettings::class,
                    'component' => HashGenerator::class,

                    'templates' => [
                        'header'   => 'modules.tools.hash-generator.header',
                        'selector' => 'modules.tools.hash-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'Hash Generator',
                        'summary'       => 'Generate different hashes.',
                        'settings-page' => ManageHashGeneratorSettings::class
                    ]
                ]
            ]
        ],

        'Content' => [
            'view'  => 'modules.categories.content',
            'admin' => [
                'title' => 'Content'
            ],

            'tools' => [
                'WordCount' => [
                    'name' => 'word-count',

                    'settings'  => WordCountSettings::class,
                    'view' => 'modules.tools.word-count.view',

                    'templates' => [
                        'header'   => 'modules.tools.word-count.header',
                        'selector' => 'modules.tools.word-count.selector'
                    ],

                    'admin' => [
                        'title'         => 'Word Count',
                        'summary'       => 'Count the Words and Letters',
                        'settings-page' => ManageWordCountSettings::class
                    ]
                ],

                'LoremIpsumGenerator' => [
                    'name' => 'lorem-ipsum-generator',

                    'settings'  => LoremIpsumGeneratorSettings::class,
                    'view' => 'modules.tools.lorem-ipsum-generator.view',

                    'scripts' => [ [ 'js/lipsum.js', 'internal' ] ],

                    'templates' => [
                        'header'   => 'modules.tools.lorem-ipsum-generator.header',
                        'selector' => 'modules.tools.lorem-ipsum-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'Lorem Ipsum Generator',
                        'summary'       => 'Generate placeholder text.',
                        'settings-page' => ManageLoremIpsumGeneratorSettings::class
                    ]
                ],

                'TextSeparator' => [
                    'name' => 'text-separator',

                    'settings'  => TextSeparatorSettings::class,
                    'view' => 'modules.tools.text-separator.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ]
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.text-separator.header',
                        'selector' => 'modules.tools.text-separator.selector'
                    ],

                    'admin' => [
                        'title'         => 'Text Separator',
                        'summary'       => 'Separate Text based on any metric.',
                        'settings-page' => ManageTextSeparatorSettings::class
                    ]
                ],

                'DuplicateLinesRemover' => [
                    'name' => 'duplicate-lines-remover',

                    'settings'  => DuplicateLinesRemoverSettings::class,
                    'view' => 'modules.tools.duplicate-lines-remover.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ]
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.duplicate-lines-remover.header',
                        'selector' => 'modules.tools.duplicate-lines-remover.selector'
                    ],

                    'admin' => [
                        'title'         => 'Duplicate Lines Remover',
                        'summary'       => 'Remove Duplicate lines from text',
                        'settings-page' => ManageDuplicateLinesRemoverSettings::class
                    ]
                ],

                'LineBreakRemover' => [
                    'name' => 'line-break-remover',

                    'settings'  => LineBreakRemoverSettings::class,
                    'view' => 'modules.tools.line-break-remover.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ]
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.line-break-remover.header',
                        'selector' => 'modules.tools.line-break-remover.selector'
                    ],

                    'admin' => [
                        'title'         => 'Line Break Remover',
                        'summary'       => 'Remove line break from text',
                        'settings-page' => ManageLineBreakRemoverSettings::class
                    ]
                ],

                'EmailExtractor' => [
                    'name' => 'email-extractor',

                    'settings'  => EmailExtractorSettings::class,
                    'view' => 'modules.tools.email-extractor.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ]
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.email-extractor.header',
                        'selector' => 'modules.tools.email-extractor.selector'
                    ],

                    'admin' => [
                        'title'         => 'Email Extractor',
                        'summary'       => 'Extract Emails from Text',
                        'settings-page' => ManageEmailExtractorSettings::class
                    ]
                ],

                'URLExtractor' => [
                    'name' => 'url-extractor',

                    'settings'  => URLExtractorSettings::class,
                    'view' => 'modules.tools.url-extractor.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ]
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.url-extractor.header',
                        'selector' => 'modules.tools.url-extractor.selector'
                    ],

                    'admin' => [
                        'title'         => 'URL Extractor',
                        'summary'       => 'Extract URLs from Text',
                        'settings-page' => ManageURLExtractorSettings::class
                    ]
                ],

                'SEOTagsGenerator' => [
                    'name' => 'seo-tags-generator',

                    'settings'  => SEOTagsGeneratorSettings::class,
                    'view' => 'modules.tools.seo-tags-generator.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [ 
                        [ 'js/seotags.js', 'internal' ], 
                        [ 'https://unpkg.com/codeflask/build/codeflask.min.js', 'external' ],
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.seo-tags-generator.header',
                        'selector' => 'modules.tools.seo-tags-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'SEO Tags Generator',
                        'summary'       => 'Generate SEO & OpenGraph tags.',
                        'settings-page' => ManageSEOTagsGeneratorSettings::class
                    ]
                ],

                'HTMLEntityEncode' => [
                    'name' => 'html-entity-encode',

                    'settings'  => HTMLEntityEncodeSettings::class,
                    'view' => 'modules.tools.html-entity-encode.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ]
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.html-entity-encode.header',
                        'selector' => 'modules.tools.html-entity-encode.selector'
                    ],

                    'admin' => [
                        'title'         => 'HTML Entity Encode',
                        'summary'       => 'Encode HTML into HTML Entities.',
                        'settings-page' => ManageHTMLEntityEncodeSettings::class
                    ]
                ],

                'HTMLEntityDecode' => [
                    'name' => 'html-entity-decode',

                    'settings'  => HTMLEntityDecodeSettings::class,
                    'view' => 'modules.tools.html-entity-decode.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ]
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.html-entity-decode.header',
                        'selector' => 'modules.tools.html-entity-decode.selector'
                    ],

                    'admin' => [
                        'title'         => 'HTML Entity Decode',
                        'summary'       => 'Decode HTML into HTML Entities.',
                        'settings-page' => ManageHTMLEntityDecodeSettings::class
                    ]
                ],

                'HTMLTagsStripper' => [
                    'name' => 'html-tags-stripper',

                    'settings'  => HTMLTagsStripperSettings::class,

                    'view' => 'modules.tools.html-tags-stripper.view',
                    'templates' => [
                        'header'   => 'modules.tools.html-tags-stripper.header',
                        'selector' => 'modules.tools.html-tags-stripper.selector'
                    ],

                    'admin' => [
                        'title'         => 'HTML Tags Stripper',
                        'summary'       => 'Get rid of HTML Tags',
                        'settings-page' => ManageHTMLTagsStripperSettings::class
                    ]
                ],

                'HTMLMinifier' => [
                    'name' => 'html-minifier',

                    'settings'  => HTMLMinifierSettings::class,
                    'view' => 'modules.tools.html-minifier.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],
                    
                    'scripts' => [
                        [ 'js/htmlminifier.min.js', 'internal' ], 
                        [ 'js/formatters.js',       'internal' ], 

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/mode-html.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.html-minifier.header',
                        'selector' => 'modules.tools.html-minifier.selector'
                    ],

                    'admin' => [
                        'title'         => 'HTML Minifier',
                        'summary'       => 'Minify HTML Code',
                        'settings-page' => ManageHTMLMinifierSettings::class
                    ]
                ],

                'CSSMinifier' => [
                    'name' => 'css-minifier',

                    'settings'  => CSSMinifierSettings::class,
                    'view' => 'modules.tools.css-minifier.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],
                    
                    'scripts' => [
                        [ 'js/htmlminifier.min.js', 'internal' ], 
                        [ 'js/formatters.js',       'internal' ], 

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/mode-css.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.css-minifier.header',
                        'selector' => 'modules.tools.css-minifier.selector'
                    ],

                    'admin' => [
                        'title'         => 'CSS Minifier',
                        'summary'       => 'Minify CSS Code',
                        'settings-page' => ManageCSSMinifierSettings::class
                    ]
                ],

                'JSMinifier' => [
                    'name' => 'js-minifier',

                    'settings'  => JSMinifierSettings::class,
                    'view' => 'modules.tools.js-minifier.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],
                    
                    'scripts' => [
                        [ 'js/htmlminifier.min.js', 'internal' ], 
                        [ 'js/formatters.js',       'internal' ], 

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/mode-javascript.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.js-minifier.header',
                        'selector' => 'modules.tools.js-minifier.selector'
                    ],

                    'admin' => [
                        'title'         => 'JS Minifier',
                        'summary'       => 'Minify JS Code',
                        'settings-page' => ManageJSMinifierSettings::class
                    ]
                ],

                'HTMLFormatter' => [
                    'name' => 'html-formatter',

                    'settings'  => HTMLFormatterSettings::class,
                    'view' => 'modules.tools.html-formatter.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'js/formatters.js', 'internal' ], 

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/mode-html.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify.min.js',      'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify-css.min.js',  'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify-html.min.js', 'external' ]
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.html-formatter.header',
                        'selector' => 'modules.tools.html-formatter.selector'
                    ],

                    'admin' => [
                        'title'         => 'HTML Formatter',
                        'summary'       => 'Format HTML Code',
                        'settings-page' => ManageHTMLFormatterSettings::class
                    ]
                ],

                'CSSFormatter' => [
                    'name' => 'css-formatter',

                    'settings'  => CSSFormatterSettings::class,
                    'view' => 'modules.tools.css-formatter.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'js/formatters.js', 'internal' ], 

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/mode-css.min.js', 'external' ],  
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify.min.js',      'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify-css.min.js',  'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify-html.min.js', 'external' ]
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.css-formatter.header',
                        'selector' => 'modules.tools.css-formatter.selector'
                    ],

                    'admin' => [
                        'title'         => 'CSS Formatter',
                        'summary'       => 'Format CSS Code',
                        'settings-page' => ManageCSSMinifierSettings::class
                    ]
                ],

                'JSFormatter' => [
                    'name' => 'js-formatter',

                    'settings'  => JSFormatterSettings::class,
                    'view' => 'modules.tools.js-formatter.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'js/formatters.js', 'internal' ], 

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/mode-javascript.min.js', 'external' ], 
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify.min.js',      'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify-css.min.js',  'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.4/beautify-html.min.js', 'external' ]
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.js-formatter.header',
                        'selector' => 'modules.tools.js-formatter.selector'
                    ],

                    'admin' => [
                        'title'         => 'JS Formatter',
                        'summary'       => 'Format JS Code',
                        'settings-page' => ManageJSFormatterSettings::class
                    ]
                ],

                'JSObfuscator' => [
                    'name' => 'js-obfuscator',

                    'settings'  => JSObfuscatorSettings::class,
                    'view' => 'modules.tools.js-obfuscator.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'js/formatters.js', 'internal' ], 

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/mode-javascript.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],

                        [ 'https://cdn.jsdelivr.net/npm/javascript-obfuscator/dist/index.browser.js',      'external' ],
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.js-obfuscator.header',
                        'selector' => 'modules.tools.js-obfuscator.selector'
                    ],

                    'admin' => [
                        'title'         => 'JS Obfuscator',
                        'summary'       => 'Obfuscate JS Code',
                        'settings-page' => ManageJSObfuscatorSettings::class
                    ]
                ],

                'SQLBeautifier' => [
                    'name' => 'sql-beautifier',

                    'settings'  => SQLBeautifierSettings::class,
                    'view' => 'modules.tools.sql-beautifier.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'js/formatters.js', 'internal' ], 

                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/mode-javascript.min.js', 'external' ], 
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],

                        [ 'https://unpkg.com/sql-formatter@2.3.3/dist/sql-formatter.min.js',      'external' ],
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.sql-beautifier.header',
                        'selector' => 'modules.tools.sql-beautifier.selector'
                    ],

                    'admin' => [
                        'title'         => 'SQL Beautifier',
                        'summary'       => 'Format SQL Queries',
                        'settings-page' => ManageSQLBeautifierSettings::class
                    ]
                ],

                'PrivacyPolicyGenerator' => [
                    'name' => 'privacy-policy-generator',

                    'settings'  => PrivacyPolicyGeneratorSettings::class,
                    'component' => PrivacyPolicyGenerator::class,

                    'templates' => [
                        'header'   => 'modules.tools.privacy-policy-generator.header',
                        'selector' => 'modules.tools.privacy-policy-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'Privacy Policy Generator',
                        'summary'       => 'Generate Privacy Policy Pages',
                        'settings-page' => ManagePrivacyPolicyGeneratorSettings::class
                    ]
                ],

                'TermsOfServiceGenerator' => [
                    'name' => 'terms-of-service-generator',

                    'settings'  => TermsOfServiceGeneratorSettings::class,
                    'component' => TermsOfServiceGenerator::class,

                    'templates' => [
                        'header'   => 'modules.tools.terms-of-service-generator.header',
                        'selector' => 'modules.tools.terms-of-service-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'Terms of Service Generator',
                        'summary'       => 'Generate Terms of Service Pages',
                        'settings-page' => ManageTermsOfServiceGeneratorSettings::class
                    ]
                ],

                'RobotstxtGenerator' => [
                    'name' => 'robotstxt-generator',

                    'settings'  => RobotstxtGeneratorSettings::class,
                    'view' => 'modules.tools.robotstxt-generator.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.robotstxt-generator.header',
                        'selector' => 'modules.tools.robotstxt-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'Robots.txt Generator',
                        'summary'       => 'Generate Robots.txt Files',
                        'settings-page' => ManageRobotstxtGeneratorSettings::class
                    ]
                ],

                'HTACCESSRedirectGenerator' => [
                    'name' => 'htaccess-redirect-generator',

                    'settings'  => HTACCESSRedirectGeneratorSettings::class,
                    'view' => 'modules.tools.htaccess-redirect-generator.view',

                    'styles' => [
                        [ 'css/ace-custom.css', 'internal' ]
                    ],

                    'scripts' => [
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/ace.min.js', 'external' ],
                        [ 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.8.1/theme-clouds.min.js', 'external' ],
                    ],

                    'templates' => [
                        'header'   => 'modules.tools.htaccess-redirect-generator.header',
                        'selector' => 'modules.tools.htaccess-redirect-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'HTACCESS Redirect Generator',
                        'summary'       => 'Generate HTACESS Redirects Files',
                        'settings-page' => ManageHTACCESSRedirectGeneratorSettings::class
                    ]
                ],
            ]
        ],

        'Domains' => [
            'view' => 'modules.categories.domains',
            'admin' => [
                'title' => 'Domains'
            ],

            'tools' => [
                'DomainGenerator' => [
                    'name' => 'domain-generator',

                    'settings'  => DomainGeneratorSettings::class,
                    'component' => DomainGenerator::class,

                    'templates' => [
                        'header'   => 'modules.tools.domain-generator.header',
                        'selector' => 'modules.tools.domain-generator.selector'
                    ],

                    'admin' => [
                        'title'         => 'Domain Generator',
                        'summary'       => 'Generate Domain Names',
                        'settings-page' => ManageDomainGeneratorSettings::class
                    ]
                ],

                'DomainWhois' => [
                    'name' => 'domain-whois',

                    'settings'  => DomainWhoisSettings::class,
                    'component' => DomainWhois::class,

                    'templates' => [
                        'header'   => 'modules.tools.domain-whois.header',
                        'selector' => 'modules.tools.domain-whois.selector'
                    ],

                    'admin' => [
                        'title'         => 'Domain WHOIS',
                        'summary'       => 'Get WHOIS Info',
                        'settings-page' => ManageDomainWhoisSettings::class
                    ]
                ],

                'IPToHostname' => [
                    'name' => 'ip-to-hostname',

                    'settings'  => IPToHostnameSettings::class,

                    'view' => 'modules.tools.ip-to-hostname.view',
                    'templates' => [
                        'header'   => 'modules.tools.ip-to-hostname.header',
                        'selector' => 'modules.tools.ip-to-hostname.selector'
                    ],

                    'admin' => [
                        'title'         => 'IP To Hostname',
                        'summary'       => 'Get Hostname from IP',
                        'settings-page' => ManageIPToHostnameSettings::class
                    ]
                ],

                'HostnameToIP' => [
                    'name' => 'hostname-to-ip',

                    'settings'  => HostnameToIPSettings::class,
                    'component' => HostnameToIP::class,

                    'templates' => [
                        'header'   => 'modules.tools.hostname-to-ip.header',
                        'selector' => 'modules.tools.hostname-to-ip.selector'
                    ],

                    'admin' => [
                        'title'         => 'Hostname To IP',
                        'summary'       => 'Get IP from Hostname',
                        'settings-page' => ManageHostnameToIPSettings::class
                    ]
                ],

                'IPInformation' => [
                    'name' => 'ip-information',

                    'settings'  => IPInformationSettings::class,
                    
                    'view' => 'modules.tools.ip-information.view',
                    'templates' => [
                        'header'   => 'modules.tools.ip-information.header',
                        'selector' => 'modules.tools.ip-information.selector'
                    ],

                    'admin' => [
                        'title'         => 'IP Information',
                        'summary'       => 'Obtain info about any IP',
                        'settings-page' => ManageIPInformationSettings::class
                    ]
                ],

                'HTTPStatusCodeChecker' => [
                    'name' => 'http-status-code-checker',

                    'settings'  => HTTPStatusCodeCheckerSettings::class,
                    'component' => HTTPStatusCodeChecker::class,

                    'templates' => [
                        'header'   => 'modules.tools.http-status-code-checker.header',
                        'selector' => 'modules.tools.http-status-code-checker.selector'
                    ],

                    'admin' => [
                        'title'         => 'HTTP Status Code Checker',
                        'summary'       => 'Determine Status Codes from URLs',
                        'settings-page' => ManageHTTPStatusCodeCheckerSettings::class
                    ]
                ],
            ]
        ],
    ]
];