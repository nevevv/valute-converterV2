const menu = document.querySelector('.header__nav-menu')


if(window.innerWidth <= 1000) {
    menu.addEventListener('click', () => {
        menu.classList.toggle('active__menu')  
        $('.header__nav-list').toggle(200)
        $('.header__nav-list').css({
            display:'flex',
        })
    })    
    $('.header__nav-links').click(function() {
        $('.header__nav-list').hide();
        menu.classList.remove('active__menu')
    })
}



// Calculator

const rates = {}
const input = document.querySelector('#usd')
const result = document.querySelector('#result')

getCurrencies()

 async function getCurrencies() {
    const response = await fetch('https://www.cbr-xml-daily.ru/daily_json.js')
    const data = await response.json();
    const result = await data;
    rates.USD = result.Valute.USD
}   


input.oninput = function() {
    result.value = (+input.value * rates.USD.Value).toFixed(2)    
}