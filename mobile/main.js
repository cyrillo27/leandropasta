var page = document.getElementById('page');
    page.innerHTML = 'Bem Vindo'; 

//var title = document.getElementsByTagName('h1');
var buttons = document.getElementsByTagName('button');

buttons[0].addEventListener('click', function (event) {
    console.log(event);
})

/*Object.values(title).forEach(function (elemento, index ) {
        console.log(elemento, index);
})*/


//console.log(title);

