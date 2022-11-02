<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ToolSlugSettings extends Settings {
    public ?string $WebsiteStatusChecker;
    public ?string $UserAgentFinder;
    public ?string $WhatsMyIp;
    public ?string $WordCount;
    public ?string $TextToBinary;
    public ?string $BinaryToText;
    public ?string $LoremIpsumGenerator;
    public ?string $SEOTagsGenerator;
    public ?string $HTMLMinifier;
    public ?string $HTMLFormatter;
    public ?string $CSSMinifier;
    public ?string $JSMinifier;
    public ?string $CSSFormatter;
    public ?string $JSFormatter;
    public ?string $MD5Generator;
    public ?string $SHAGenerator;
    public ?string $ImageToBase64;
    public ?string $JSObfuscator;
    public ?string $URLEncoder;
    public ?string $URLDecoder;
    public ?string $URLUnshortener;
    public ?string $SSLChecker;
    public ?string $TimestampConverter;
    public ?string $QRGenerator;
    public ?string $PasswordGenerator;
    public ?string $HashGenerator;
    public ?string $Ping;
    public ?string $TextToBase64;
    public ?string $QRCodeReader;
    public ?string $DomainGenerator;
    public ?string $DomainWhois;
    public ?string $IPToHostname;
    public ?string $HostnameToIP;
    public ?string $RGBToHex;
    public ?string $HexToRGB;
    public ?string $HTTPHeadersParser;
    public ?string $HTMLTagsStripper;
    public ?string $MarkdownToHTML;
    public ?string $HTMLToMarkdown;
    public ?string $DuplicateLinesRemover;
    public ?string $TextSeparator;
    public ?string $HTMLEntityEncode;
    public ?string $HTMLEntityDecode;
    public ?string $CSVToJSON;
    public ?string $JSONToCSV;
    public ?string $UUIDv4Generator;
    public ?string $BcryptGenerator;
    public ?string $HTTPStatusCodeChecker;
    public ?string $LineBreakRemover;
    public ?string $EmailExtractor;
    public ?string $URLExtractor;
    public ?string $YouTubeThumbnailDownloader;
    public ?string $IPInformation;
    public ?string $SQLBeautifier;
    public ?string $PasswordStrengthTest;
    public ?string $RobotstxtGenerator;
    public ?string $HTACCESSRedirectGenerator;
    public ?string $PrivacyPolicyGenerator;
    public ?string $TermsOfServiceGenerator;
    public ?string $EmailValidator;

public static function group(): string {
        return 'tool-slugs';
    }
}