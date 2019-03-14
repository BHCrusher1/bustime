var CACHE_STATIC_VERSION = 'static-2018121109';

// サービスワーカーのインストール
self.addEventListener('install', function(event) {
  console.log('[Service Worker] Installing Service Worker...');

  // キャッシュできるまで次の処理を待つ
  event.waitUntil(
    caches.open(CACHE_STATIC_VERSION)
      .then(function(cache) {
        console.log('[Service Worker] Precaching App...');
        // キャッシュするファイル
        cache.addAll([
          'https://bhcrusher1.net/bustime/',
          'https://bhcrusher1.net/bustime/index.php',
          'https://bhcrusher1.net/bustime/style.css',
          'https://bhcrusher1.net/bustime/00000AH/index.php',
          'https://bhcrusher1.net/bustime/00000AK/index.php',
          'https://bhcrusher1.net/bustime/00000BH/index.php',
          'https://bhcrusher1.net/bustime/00000BK/index.php',
          'https://bhcrusher1.net/bustime/00010AH/index.php',
          'https://bhcrusher1.net/bustime/00010AK/index.php',
          'https://bhcrusher1.net/bustime/00010BH/index.php',
          'https://bhcrusher1.net/bustime/00010BK/index.php',
        ]);
      })
  );
});

var CACHE_DYNAMIC_VERSION = 'dynamic-2018121109';

self.addEventListener('fetch', function(event) {
  console.log('[Service Worker] Fetching something ...');
  event.respondWith(
    // キャッシュの存在チェック
    caches.match(event.request)
      .then(function(response) {
        if (response) {
          return response;
        } else {
          // キャッシュがなければリクエストを投げて、レスポンスをキャッシュに入れる
          return fetch(event.request)
            .then(function(res) {
              return caches.open(CACHE_DYNAMIC_VERSION)
                .then(function(cache) {
                  // 最後に res を返せるように、ここでは clone() する必要がある
                  cache.put(event.request.url, res.clone());
                  return res;
                })
            })
            .catch(function() {
              // エラーが発生しても何もしない
            });
        }
      })
  );
});

self.addEventListener('activate', function(event) {
    console.log('[Service Worker] Activating Service Worker...');
    event.waitUntil(
      caches.keys()
        .then(function(keyList) {
          return Promise.all(keyList.map(function(key) {
            if (key !== CACHE_STATIC_VERSION && key !== CACHE_DYNAMIC_VERSION) {
              console.log('[Service Worker] Removing old cache...');
              return caches.delete(key);
            }
          }));
        })
    );
    return self.clients.claim();
  });