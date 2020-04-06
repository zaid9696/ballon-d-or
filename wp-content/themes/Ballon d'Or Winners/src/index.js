import _ from 'lodash';
import 'simplebar'; // or "import SimpleBar from 'simplebar';" if you want to use it manually.
import 'simplebar/dist/simplebar.css';

import search from './search';
import ballonSearch from './ballonSearch';
import {searchView} from './searchView';
import {ballonView} from './ballonView';

//DOM Elements
const inputForm = document.querySelector('.header__form');
const inputField = document.querySelector('#header__input');
const load = document.querySelector('.loading');
const ballonLoader = document.querySelector('.ballon_loader');

let noPrev;



const removeDrop = () =>{
    const derop = document.querySelector('.header__dropdown');
    if(derop){
        derop.parentNode.removeChild(derop);
    }
    load.style.display = 'none';


}


// Remove Dropdown by clicking anywhere;;
document.addEventListener('click', (e) => {
    
    if(e.target.matches('#header__input') || e.target.matches('.simplebar-content') || e.target.matches('.searchIcon')) return;
    removeDrop();

})

const searchControl = async (e) =>{
    
    e.preventDefault();
    const searchValue = inputField.value;

    if(searchValue == noPrev) return;

    noPrev = searchValue;

   

    try{
        
       
        load.style.display = 'inline';

        
        await search(searchValue).then(data => {

            if(data.length !== 0){
                

                if(searchValue == ''){
                    removeDrop();
                    const noResult = document.querySelector('.noResult')
                    if(noResult){
                        noResult.parentNode.removeChild(noResult);
                    }
                    return;
                };
               
                
                var dropElement = inputField.nextElementSibling.nextElementSibling;
                if(dropElement){
                    dropElement.parentNode.removeChild(dropElement);
                }
                
                load.style.display = 'none';
                searchView(data);

            }else{
                

                removeDrop()

                const noResult = document.querySelector('.noResult');
                if(noResult){
                    noResult.parentNode.removeChild(noResult);
                }
            

                inputForm.insertAdjacentHTML('beforeend', '<p class="noResult">Sorry, no result found.</p>');
                
            }

        })
    }
    catch(err){
        console.log(err);
    }


}
// Form Control
inputForm.addEventListener('keyup', searchControl);

// Ballon Search Control; 
const ballonSearchControl = async (e) =>{

    const id = window.location.hash.replace('#', '');

    if(id == '') return;

   try{

    await ballonSearch(id).then(data => {

        

        ballonView(data);
        
    })

   }
   catch(err){
       console.log(err)
   }

}

const EventSearch = ['load','hashchange'];

EventSearch.forEach(item => window.addEventListener(item,  ballonSearchControl));


// Remove loader after load
window.addEventListener('load',  () =>{


    ballonLoader.style.opacity = '0';
    setTimeout(() =>{

        ballonLoader.style.display = 'none';

    },2000)
    

})

// Show Second Section
window.addEventListener('scroll', ()=>{

const secondContent = document.querySelector('.second__content');
const secondContentLast = document.querySelector('.second__content_last');

   
    if(window.scrollY >= 565){

        secondContent.classList.add('moveUp')
        secondContentLast.classList.add('moveUpLast')
        
    }
});