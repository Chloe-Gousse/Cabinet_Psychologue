// NavBar 

        const   nav=document.querySelector(".nav"),

        navList=nav.querySelectorAll("li"), 
        totalNavList=navList.length,
        allSection=document.querySelectorAll(".section"),
        totalSection=allSection.length;

for(let i=0; i<totalNavList; i++){

    const a=navList[i].querySelector("a");
            
        a.addEventListener("click", function(){
                
            for(let i=0; i<totalSection; i++){
                allSection[i].classList.remove("back-section");
            }

            for(let j=0; j<totalNavList; j++){

                if(navList[j].querySelector("a").classList.contains("active")){
                allSection[j].classList.add("back-section");
                }

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
        
   

//Articles 

// const   theme=document.querySelector(".theme"),
//         themeLink=theme.querySelectorAll("p"),
//         totalThemeLink=themeLink.length,
  
//         allArticles=document.querySelectorAll(".article"),
//         totalArticles=allArticles.length;
  
//         for(let k=0; k<totalThemeLink; k++){

//             const a=themeLink[k].querySelector("a");

//             a.addEventListener("click", function(){
        
//                 for(let k=0; k<totalArticles; k++){
//                     allArticles[k].classList.remove("back-article");
//                 }
        
//                 for(let l=0; l<totalThemeLink; l++){
//                     if(themeLink[l].querySelector("a").classList.contains("active")){
//                         allArticles[l].classList.add("back-article");
//                     }

//                     themeLink[l].querySelector("a").classList.remove("active");
//                 }

//             this.classList.add("active");
//             showArticle(this);
        
//             if(window.innerWidth < 1200){
//                 asideSectionTogglerBtn();
//             }
//             })
//         }
        
//         function showArticle(element){

//             for(let k=0; k<totalArticles; k++){
//                 allArticles[k].classList.remove("active");
//             }

//             const target=element.getAttribute("href").split("#")[1];
//             document.querySelector("#"+target).classList.add("active")
//         }
    
    
    
        const lireLaSuite = document.getElementsByTagName("a");
        const articles = document.querySelectorAll(".article");
         
        for (let lien of lireLaSuite)
        {
            lien.onclick = () =>
            {
                for(let article of articles) 
                article.classList.remove("active");
         
                let id = lien.getAttribute("href").replace("#","");
                document.getElementById(id).classList.add("active");
            };
        }
        

            

        

        