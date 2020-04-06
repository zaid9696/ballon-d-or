

export const searchView = (result) => {

const inputForm = document.querySelector('.header__form');

    // inputForm.innerHTML = '';
    
    const ul = `

        <ul class="header__dropdown" data-simplebar>
            ${result.map(item => {

             return `<a href="#${item.id}">
                <li>
                    <div class="header__dropdown-img"><img src="${item.image}" alt="Player"></div>
                    <div class="header__dropdown-info">
                        <h4>${item.content}</h4>
                        <p>${item.title}</p>
                    </div>
                </li>
            </a>`
            }).join(' ')}
        
        </ul>
    `;

    inputForm.insertAdjacentHTML('beforeend', ul);

}