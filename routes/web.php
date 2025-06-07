<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home', [
    'header' => 'Home Page'
  ]);
});

Route::get('/about', function () {
  return view('about')
    ->with('header', 'About Me')
    ->with('nama', 'Faturrahman Al Farisi'
  );
});

Route::get('/blog', function () {
  return view('blog', [
    'header' => 'Blog',
    'posts' => [
    [
      'judul' => 'Judul Artikel 1',
      'penulis' => 'Faturrahman Alfarisi',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus aspernatur odio porro officiis tenetur consequuntur necessitatibus officia, magnam ipsa optio laudantium, rerum exercitationem architecto rem doloribus, totam amet ipsam? Distinctio minima, expedita magni dolorem sed dicta iusto modi voluptatem eveniet.'
    ],
    [
      'judul' => 'Judul Artikel 2',
      'penulis' => 'Fiqiatul Alam Syahru Ramadhan',
      'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque possimus exercitationem tempora perspiciatis soluta harum magnam libero at non, officia pariatur dolor illo qui sunt id, odit recusandae tempore minima nisi impedit ipsum aliquam cupiditate. Deserunt numquam quidem neque quaerat doloribus, voluptatibus inventore excepturi, qui eveniet magni aliquam reprehenderit iure aperiam saepe quo corporis nulla distinctio nemo delectus adipisci fugiat totam fugit eaque? Culpa corrupti nisi asperiores, soluta cupiditate dolor.'
    ],
    [
      'judul' => 'Judul Artikel 3',
      'penulis' => 'Firaz Firza Najwan Syauqillah',
      'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum expedita similique eveniet ipsa veniam. Modi in ab aspernatur debitis at, id laborum magnam possimus. Est cupiditate veniam doloremque neque reiciendis accusantium molestias, commodi, consectetur minus facere laudantium mollitia asperiores? Recusandae quisquam reprehenderit alias. Voluptas tempore maiores exercitationem nisi nesciunt laborum velit ratione harum? Ut?'
    ],
    [
      'judul' => 'Judul Artikel 4',
      'penulis' => 'Farisha Azra Salima',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ex tempore libero nostrum mollitia suscipit aut porro odit numquam amet est corrupti ducimus, delectus maiores dicta error officia molestiae voluptas doloribus! Velit optio obcaecati, ipsa pariatur porro rem consequuntur quaerat facilis sunt, atque amet quidem et quasi voluptas. Incidunt tenetur vel, harum veritatis assumenda dolore quae, officia optio, ipsa quam velit recusandae sint vitae quas molestias saepe.'
    ]
  ]
  ]);
});

Route::get('/contact', function () {
  return view('contact', [
    'header' => 'Contact Me'
  ]);
});
