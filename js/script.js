// NavBar 

        //On regroupe la nav
        const   nav=document.querySelector(".nav"),

        //On sélectionne les li 
        navList=nav.querySelectorAll("li"),

        // On prend toute la longueur 
        totalNavList=navList.length,

        // On prend toutes les <section>
        allSection=document.querySelectorAll("section"),

        // On prend toute la longueur 
        totalSection=allSection.length;


// Pour toute la longueur de la nav on crée des variables 
for(let i=0; i<totalNavList; i++){

    // On prend tous les liens de tous les li de la nav et on les met dans a
    const a=navList[i].querySelector("a");
    // On met un écouteur d'évent sur ces a 
    // On leur colle un écouteur au click, avec son action
    a.addEventListener("click", function(){
        // au clic : 
        // On crée des variables pour l'ensemble de toutes les <section>
        // Pour chaque <section> on enlève la class "back-section"
        // "back-section" = z index à 1
        // donc on le repasse en z index à 0
        // .section = z index 0 
        // .section.back-section = z index 1
        // .section.active = z index à 2
        for(let i=0; i<totalSection; i++){
            allSection[i].classList.remove("back-section");

            //Donc en gros quand on clique sur un a de la nav
            // on vire toutes les class back-section des <section>
            // et toutes les <section> repassent en z0
        }

        // on crée des variables pour toute la longueur des li de la nav
        for(let j=0; j<totalNavList; j++){

            // si les a de la navlist ont une class "active" dessus 
            if(navList[j].querySelector("a").classList.contains("active")){

                // alors on ajoute la class "back-section" à chacune des <section>
                // qui correspondent à la nav [j]
                // donc on les remet en z1
                allSection[j].classList.add("back-section");
            }

            // Et les liens li correspondant enlève leur class active
            navList[j].querySelector("a").classList.remove("active");
        }
       this.classList.add("active");
       showSection(this);

       if(window.innerWidth < 1200){
           asideSectionTogglerBtn();
       }
    })
}


function showSection(element){
    for(let i=0; i<totalSection; i++){
        allSection[i].classList.remove("active");
    }
    const target=element.getAttribute("href").split("#")[1];

    document.querySelector("#"+target).classList.add("active")
}

const   navTogglerBtn=document.querySelector(".nav-toggler"),
        aside=document.querySelector(".aside");

    navTogglerBtn.addEventListener("click",() =>{
        asideSectionTogglerBtn();
    })

    function asideSectionTogglerBtn(){
        aside.classList.toggle("open");
        navTogglerBtn.classList.toggle("open");

        for(let i=0; i<totalSection; i++){
            allSection[i].classList.toggle("open");
        }
    }   




// Articles 

const   theme=document.querySelector(".theme-info"),
        themeLink=theme.querySelectorAll(".theme-link"),
        totalThemeLink=themeLink.length,
        
        allArticles=document.querySelectorAll(".article"),
        totalArticles=allArticles.length;

for(let k=0; k<totalThemeLink; k++){
    const a=themeLink[k].querySelector("a");
    a.addEventListener("click", function(){

         // remove back section class
         for(let k=0; k<totalArticles; k++){
            allArticles[k].classList.remove("back-article");
        }

        for(let l=0; l<totalThemeLink; l++){
            if(themeLink[l].querySelector("a").classList.contains("active")){

        // add back section class

                allArticles[l].classList.add("back-article");
            }
            themeLink[l].querySelector("a").classList.remove("active");
        }
       this.classList.add("active");
       showArticle(this);

       if(window.innerWidth < 1200){
           asideSectionTogglerBtn();
       }
    })
}

function showArticle(element){
    for(let k=0; k<totalArticles; k++){
        allArticles[k].classList.remove("active");
    }
    const target=element.getAttribute("href").split("#")[1];

    document.querySelector("#"+target).classList.add("active")
}

 
