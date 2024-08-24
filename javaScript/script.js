

/*##### MENU FIXO #######*/
window.onscroll = function () {
  let top = window.scrollY;

  if (top > 1200) {
    document.getElementById("menufixo").classList.add("menufixo");
  } else {
    document.getElementById("menufixo").classList.remove("menufixo");
  }
}

/*----Menu Mobile----*/

document.querySelector(".abrir-menu").onclick = function (){
  console.log("Menu")
  document.documentElement.classList.add("menu-mobile")

}


document.querySelector(".fechar-menu").onclick = function (){
  console.log("Menu")
  document.documentElement.classList.remove("menu-mobile")

}
