
//filtre les figure de classe effect-sarah selon un filtre de classe donné
function filterSelection(filter) {
    let elemList = document.getElementsByClassName("view");
    console.log(elemList)
    //pour chaque element de classe effect-sarah
    for (var i = 0; i < elemList.length; i++) {
      // si la classe filtrée existe dans la liste de classe de l'element
        if (elemList[i].classList.contains(filter)) {
        //alors on retire la classe qui cache l'element
        elemList[i].classList.remove('hide')
        elemList[i++].classList.remove('hide')
        } else {
        //sinon on cache l'element
        elemList[i].classList.add('hide')
        elemList[i++].classList.add('hide')
        }
      
    }
}
  
    let btnContainer = document.getElementById("myBtnContainer");
    let btns = btnContainer.getElementsByClassName('btn');

        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", (target) => {
            // console.log('coucou')
            filterSelection(target.target.id)
        })
    }


const tabs = document.querySelector(".wrapper");
const tabButton = document.querySelectorAll(".tab-button");
const contents = document.querySelectorAll(".content");

tabs.onclick = e => {
  const id = e.target.dataset.id;
  if (id) {
    tabButton.forEach(thisBtn => {
        thisBtn.classList.remove("active");
    });
    e.target.classList.add("active");

    contents.forEach(content => {
      content.classList.remove("active");
    });
    const element = document.getElementById(id);
    element.classList.add("active");
  }
}