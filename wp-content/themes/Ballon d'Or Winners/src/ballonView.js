


export const ballonView = (items) =>{

    const firstElm = document.querySelector('.first'); 
    const secondElm = document.querySelector('.second'); 

    firstElm.innerHTML = '';
    secondElm.innerHTML = '';
    

    const firstResult =  `

        <div class="first__content">
            <div class="first__background" style="background-image: url(${items.fimg_url})"></div>
            <div class="first__header">
                <h2 class="first__name">${items.content.rendered}</h2>
                <div class="first__info">
                    <div class="first__info-names">
                        <p class="info-born">Born</p>
                        <p class="info-country">Country</p>
                        <p class="info-club">Club</p>
                        <p class="info-year">Year</p>
                        <p class="info-height">Height</p>
                        <p class="info-position">Position</p>
                        <p  class="info-points">Points</p>
                    </div>
                    <div class="first__info-items">
                        <h3 class="item-born">${items.acf.player_born}</h3>
                        <h3 class="item-country">${items.acf.player_country} <span class="flag"><img src="${items.acf.player_country_flag}" alt="Flag"></span></h3>
                        <h3 class="item-club">${items.acf.player_club} <span class="club"><img src="${items.acf.player_club_flag}" alt="Club Logo"></span></h3>
                        <h3 class="item-year">${items.title.rendered}</h3>
                        <h3 class="item-height">${items.acf.player_height}</h3>
                        <h3 class="item-position">${items.acf.player_position}</h3>
                        <h3 class="item-points">${items.acf.player_points}</h3>
                    </div>
                </div>
            </div>
        </div>

    `;

    firstElm.insertAdjacentHTML('beforeend', firstResult);


    const secondResult = `

        <div class="second__content">
            <h2 class="second__title">2nd</h2>
            <div class="second__info">
            <div class="second__img">
                <img src="${items.acf.second_player_image}" alt="Image">
            </div>
            <h3>${items.acf.second_player_name}</h3>
            <p>Points  <span>${items.acf.second_player_points}</span></p>
            </div>
        </div>

        <div class="second__content second__content_last">
            <h2 class="second__title">3rd</h2>
            <div class="second__info">
            <div class="second__img">
                <img src="${items.acf.third_player_image}" alt="Image">
            </div>
            <h3>${items.acf.third_player_name}</h3>
            <p>Points  <span>${items.acf.third_player_points}</span></p>
            </div>
        </div>

    `;

    secondElm.insertAdjacentHTML('beforeend', secondResult);




}