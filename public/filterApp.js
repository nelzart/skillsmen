//filtre les figure de classe selon un filtre de classe donné
function filterSelection(filter) {
    let elemList = document.getElementsByClassName("galerie");
    // console.log(elemList)
    
    //pour chaque element de classe galerie
    for (var i = 0; i < elemList.length; i++){
        //   si la classe filtrée existe dans la liste de classe de l'element
        // console.log(btns.value)
        if (elemList[i].classList.contains(filter)) {
        
            if (elemList[i].classList.contains('show')){
                elemList[i].classList.remove('show') 
                elemList[i].classList.add('hide')

            } else if (elemList[i].classList.contains('hide') ){
                elemList[i].classList.remove('hide')
                elemList[i].classList.add('show')  
                // console.log(elemList[i] == btns[i])               
            } 
        } 
    }
}
    
  //ajout d'un event listener de clic permettant le filtre sur les boutons de la page
  let btnContainer = document.getElementById("myBtnContainer");
  let btns = btnContainer.querySelectorAll("input");
  console.log(btns)

  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", (target) => {
      //on effectue le filtre avec l'id du bouton
      filterSelection(target.target.value)
    // console.log('coucou')
    })
  }

// let i = []
// myBtnFilter = document.getElementById('base'[y])

// for (y = 1 ; y <= 11 ; y++){
//     console.log(y)
//     console.log(myBtnFilter)
// }
//     // document.getElementById('result').innerHTML =  'coucou' ;

// // myBtnContener = document.getElementById('myBtnContainer').length
// // console.log(myBtnContener)
// // console.log('base'+i)
// myBtnFilter.addEventListener('click', (e) => {
//     if (e.myBtnFilter.checked) {
//         document.getElementById('result').innerHTML = 'couocu';
//     } else {
//         document.getElementById('result').innerHTML = '';
//     }
// })
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

