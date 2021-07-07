// peguei o botao e transformei em uma variavel
let navigation = document.querySelector("#navbarSideCollapse");
// peguei o container que eu queria esconder e transformei em uma variavel
let navbarsExampleDefault = document.querySelector("#navbarsExampleDefault");
//peguei a variavel do botão e o evento do click em seguida coloquei uma classe dentro do container 
//que eu queria esconder. fui no css e apenas com nome da classe e um display none resolvi
navigation.onclick = function () {
  navbarsExampleDefault.classList.toggle("sidebarhide")

}



