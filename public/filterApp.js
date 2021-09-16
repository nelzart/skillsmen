// //filtre les figure de classe effect-sarah selon un filtre de classe donné
// function filterSelection(filter) {
//     let elemList = document.getElementsByClassName("galerie");
//     //pour chaque element de classe effect-sarah
//     for (var i = 0; i < elemList.length; i++) {
//       // si la classe filtrée existe dans la liste de classe de l'element
//       if (elemList[i].classList.contains(filter)) {
//         //alors on retire la classe qui cache l'element
//         elemList[i].classList.remove('hide');
//       } else {
//         //sinon on cache l'element
//         elemList[i].classList.add('hide');
//       }
//       //si on affiche tout on retire le cache de tous les elements
//       if (filter == 0) {
//         elemList[i].classList.remove('hide');
//       }
//     }
//   }
    
//   //ajout d'un event listener de clic permettant le filtre sur les boutons de la page adoption
//   let btnContainer = document.getElementById("thisBase");
//   let btns = btnContainer.querySelectorAll("container > input:checked ~ custom-checkbox");
//   for (var i = 0; i < btns.length; i++) {
//     btns[i].addEventListener("click", (target) => {
//       //on effectue le filtre avec l'id du bouton (chat, chien, nac ou all)
//       filterSelection(target.target.id)
//     })
//   }


for (i = 0 ; i < 11 ; i++){
    console.log(i)
    rech = 'base'+i

// myBtnContener = document.getElementById('myBtnContainer').length
// console.log(myBtnContener)
myBtnFilter = document.getElementById(rech)
// console.log('base'+i)
myBtnFilter.addEventListener('click', (e) => {
    if (myBtnFilter.checked) {
        document.getElementById('result').innerHTML = myBtnFilter.value;
    } else {
        document.getElementById('result').innerHTML = '';
    }
})}
// let array = [];
// for( i = 0 ; myBtnFilter.length ; i++ ) {
//     document.getElementById('result').innerHTML = myBtnFilter.value;
// }

//   var array = [
//     {"base":"tequila"}
// ];
// var newArray = array.slice();
// showArray(newArray);

// function showArray(array) {
//     document.getElementById("result").innerHTML = JSON.stringify(array);
// }

// function handleChange() {
//   newArray = array.filter(filterByBase);
//   showArray(newArray);
// //   newArray.setAttribute('checked', '');
// }


// function filterByBase(target) {
//     return document.getElementById(target.base).checked;
// }

// // test = document.getElementsByClassName('selectBase');
// test = document.getElementsById('selectBase');


// test.addEventListener("click", (target) => {
//     target.console.log('coucou');
// })



// var cares = document.getElementsByClassName("cars");
// var btnContainer = document.getElementById("myBtnContainer");
// var btn = btnContainer.getElementsByClassName("btn");

// for (x = 0; x < cares.length; x++){

//   console.log(x, cares[x].classList.add("supercars"));
// }

// filterSelection("all")
// function filterSelection(c) {
//     var x, i;
//     x = document.getElementsByClassName("filterDiv");
//     if (c == "all") c = "";
//     // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
//     for (i = 0; i < x.length; i++) {
//         w3RemoveClass(x[i], "show");
//         if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
//     }
// }

// // Show filtered elements
// function w3AddClass(element, name) {
//     var i, arr1, arr2;
//     arr1 = element.className.split(" ");
//     arr2 = name.split(" ");
//     for (i = 0; i < arr2.length; i++) {
//         if (arr1.indexOf(arr2[i]) == -1) {
//         element.className += " " + arr2[i];
//         console.log[arr2];
//         }
//     }
// }

// // Hide elements that are not selected
// function w3RemoveClass(element, name) {
//     var i, arr1, arr2;
//     arr1 = element.className.split(" ");
//     arr2 = name.split(" ");
//     for (i = 0; i < arr2.length; i++) {
//         while (arr1.indexOf(arr2[i]) > -1) {
//         arr1.splice(arr1.indexOf(arr2[i]), 1);
//         }
//     }
//     element.className = arr1.join(" ");
//     }

