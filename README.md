# MobileDetect for Craft3

MobileDetect integration into Craft CMS 3.

[Mobile Detect](https://github.com/serbanghita/Mobile-Detect) is a lightweight PHP class for detecting mobile devices (including tablets).
It uses the User-Agent string combined with specific HTTP headers to detect the mobile environment.

## Requirements
This plugin requires Craft CMS 3.0.0-RC1 or later.

## Install

- Install with Composer via: ``composer require balazscsaba2006/mobiledetect``
- Navigate to `Settings -> Plugins` and click the "Install" button

## Usage
### Get device version:
```twig
{{ craft.mobiledetect.version('iPad') }} # 4.3 (float)
```

### Get device type:
```twig
{{ craft.mobiledetect.type }} # mobile|tablet|none (string)
```

### Check if device is iOS or Android:
```twig
{{ craft.mobiledetect.isiOS }} or {{ cract.mobiledetect.is('iOS') }}
{{ craft.mobiledetect.isAndroidOS }} or {{ cract.mobiledetect.is('isAndroidOS') }}
```

### Check if device is mobile or tablet:
```twig
{{ craft.mobiledetect.isMobile }}
{{ craft.mobiledetect.isTablet }}
```
