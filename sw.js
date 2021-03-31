console.log('Service worker wake up...');

self.addEventListener('install', event => {
    console.log('Service worker is  installed !');
    event.waitUntil(
        caches.open(CACHE_NAME)
        .then(cache => {
            return cache.addAll(urlsToCache);
        })
    );
    console.log('Service worker cache is ready !');
});

self.addEventListener('activate', event => {
    console.log('Service worker is activated !');
});

const CACHE_NAME = 'Csintship_cache_v1';
const urlsToCache = [
    './',
    './index.php',

      './assets/pages/create.php',
      './assets/pages/home.php',
      './assets/pages/update_delete.php',

     './assets/php/classes/compagny.php',
     './assets/php/classes/connection.php',
     './assets/php/classes/DB_class.php',
     './assets/php/classes/footer.php',
     './assets/php/classes/header.php',
     './assets/php/classes/internship.php',
     './assets/php/classes/user.php',

     './assets/php/template/locality.class.php',
     './assets/php/template/test.php',

     './assets/pictures/Cesinternship.png',
     './assets/pictures/cesinternshipLOGO.png',
     './assets/pictures/CesintershipLOGO.png',
     './assets/pictures/LOGO.png',

     './assets/script/create.js',
     './assets/script/home.js',
     './assets/script/update_delete.js',

     './assets/style/home_style.css',
     './assets/style/style.css',

      './test_connection\\hanton/connexion.php',
    //   './test_connection\\hanton/deconnexion.php',
    //   './test_connection\\hanton/Page_test.php',
      './test_connection\\hanton/Sign-in.php',
    // './test_connection\\hanton/',
]