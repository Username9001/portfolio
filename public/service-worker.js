var cacheName = 'v1'; 

// Default files to always cache
var cacheFiles = [
	'/',
	'/index.html',
	'/js/app.js',
	'/css/app.css',
	'/css/aos.css'
]


self.addEventListener('install', function(e) {
    console.log('[ServiceWorker] Installed');
});


self.addEventListener('activate', function(e) {
    console.log('[ServiceWorker] Activated');
});

var CACHE_NAME = 'static-cache';
var urlsToCache = [
  '.',
  'index.html',
  'styles/main.css'
];
self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(CACHE_NAME)
    .then(function(cache) {
      return cache.addAll(urlsToCache);
    })
  );
});

self.addEventListener('fetch', function(event) {
	event.respondWith(
	  caches.match(event.request)
	  .then(function(response) {
		return response || fetchAndCache(event.request);
	  })
	);
  });
  
  let CACHE_NAME = 'sw-v1'
  self.addEventListener('install', (event) => {
	event.waitUntil(
	  caches.open(CACHE_NAME)
	  .then(cache => cache.addAll('./404.html'))
	)
  })
  self.addEventListener('fetch', (event) => {
	if (event.request.method === 'GET') {
	  event.respondWith(
		caches.match(event.request)
		.then((cached) => {
		  var networked = fetch(event.request)
			.then((response) => {
			  let cacheCopy = response.clone()
			  caches.open(CACHE_NAME)
				.then(cache => cache.put(event.request, cacheCopy))
			  return response;
			})
			.catch(() => caches.match(offlinePage));
		  return cached || networked;
		})
	  )
	}
	return;
  });