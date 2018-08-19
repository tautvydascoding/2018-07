console.log("Labas");

// 1
for (var i = 0; i < $('h1').length; i++) {
  $('h1').eq(i).text('Antraste nr: ' + (i+1));
}

// 2
for (var i = 0; i < $('section h2').length; i++) {
  $('section h2').text('Pakeista antraste');
}

// 3
var liReklama = $('li.reklama').text();
console.log(liReklama);

// 4
var liText = [];
for (var i = 0; i < $('li').length; i++) {
  liText += [$('li').eq(i).text() + ' ']
}
console.log(liText);

// !5
var list = $('ul').html();

// 6
$('li.reklama').attr('style', 'color: red');

// 7
$('li').addClass('nav-item');
$('li').eq(0).addClass('active');

// 8
$('input[type="text"]').attr('value', 'Tomas');
$('input[type="email"]').attr('value', 'a@a.lt');
