const CACHE_NAME = "esemka-v1";
const urlToCache = [
    '/assets/icons/logo-512.png',
    '/assets/icons/logo-256.png',
    '/assets/icons/logo-128.png',
    '/assets/icons/logo-64.png',
    '/assets/icons/logo-32.png',
    '/assets/json/28861-connection-style-2.json',
    '/offline'
];

const libraryCache = [
  'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js',
];

urlToCache.push(...libraryCache);

//Install Service Worker
self.addEventListener("install", function(event) {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
          return cache.addAll(urlToCache);
      })
  )
});

self.addEventListener("fetch", event => {
  cacheFirst(event.request);

  // Cache Only
  function cacheOnly(request) {
    event.respondWith(caches.match(request));
  }

  // Cache First
  function cacheFirst(request) {
    event.respondWith(
      caches.match(request).then(response => {
          return response || fetch (request).catch(error => {
            return caches.match('/offline');
          });
      })
    );
  }
});

//Activate Service Worker
self.addEventListener("activate", event => {
  event.waitUntil(
      caches.keys().then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            if (cacheName != CACHE_NAME) {
              console.log(`ServiceWorker: cache ${cacheName} deleted`);
              return caches.delete(cacheName);
            }
          })
        );
      })
    );
});