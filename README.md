# news API

## Installation
```
composer require wangta69/news

composer require "wangta69/news @dev"

```

Step 1) Add ServiceProvider to the providers array in `config/app.php`.
```
Pondol\News\NewsServiceProvider::class,
```

.env
```
NAVER_CLIENT_ID=WhatYouGetFromNaver
NAVER_CLIENT_SECRET=WhatYouGetFromNaver
```

config/services.php
```
'naver' => [
        'client_id' => env('NAVER_CLIENT_ID'),
        'client_secret' => env('NAVER_CLIENT_SECRET'),
    ],
```