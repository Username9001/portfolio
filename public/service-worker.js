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

