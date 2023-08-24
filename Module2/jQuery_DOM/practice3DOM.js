// Посмотрим содержимое выбранного элемента
// $('селектор').html();

// $(function () {
//     alert($('h3').html());
// })
//
// $(function () {
//     alert($('h3').text());
// })

//работа с событиями

// $(function () {
//     $('a').click(function (event) {
//         alert(event.type);
//         alert('Посещение сайта мешает обучению!');
//         event.preventDefault();
//     });
//
// });


// Изменим содержимое выбранного элемента
// $('селектор').html('Новое содержимое');
$('#but1').click(function () {
    $('.article-text').html('jQuery — библиотека JavaScript, содержащая в себе готовые функции языка JavaScript')
     $('.active').removeClass('active');
    $(event.target).addClass('active');
})

// Добавим указанный класс выбранному элементу
// $('селектор').addClass('имяКласса');
// Удалим указанный класс у выбранного элемента
// $('селектор').removeClass('имяКласса');
// При первом вызове указанный класс будет добавлен, а втором – удалён
// $('селектор').toggleClass('имяКласса');

$('#but2').click(function () {
    $('.active').removeClass('active');
    $(event.target).addClass('active');
})

// Добавим текст после внутреннего содержимого элемента
// $('селектор').append('произвольныйТекст');
// Добавим текст перед внутренним содержимым элемента
// $('селектор').prepend('произвольныйТекст');

$('h3').click(function () {
    $('h3').prepend('<div style="font-size:16px; font-weight: 200" >jQuery — библиотека JavaScript, содержащая в себе готовые функции языка JavaScript</div>')
})

// Узнаём значение произвольного атрибута
// $('селектор').attr('атрибут');
// Установим новое значение произвольному атрибуту
// $('селектор').attr('атрибут', 'новое значение');
// Удалим атрибут
// $('селектор').removeAttr('атрибут');

$('#but3').click(function () {
    $('a').html(Date())
    $('.active').removeClass('active');
    $(event.target).addClass('active');

})

$('#but4').click(function () {
    $('.active').removeClass('active');
    $(event.target).addClass('active');
    alert($('a').attr('href'))
    $('.article-list').attr('type', 'square')
    $('a').removeAttr('title')

})

// Обернём тегом
// $('селектор').wrap('<нач_тэг><кон_тэг>');

$('.article-list').click(function (event) {
    $(event.target).wrap('<del></del>')
})

//дз
$('a').click(function () {
    $('a').removeAttr('title');
    $('a').attr('href', 'https://maximumtest.ru/');
    $('a').html('Посетить сайт школы MAXIMUM Education');
});






