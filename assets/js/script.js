const bars = document.querySelector('#bars')
const crossCross = document.querySelector('#crossCross')
const dropDown = document.querySelector('#dropDown')
const menuText = document.querySelector('#menuText')
const overlay = document.querySelector('#overlay')

bars.onclick = () => {
    dropDown.classList.add('active')
    overlay.style.display = "block"
}

crossCross.onclick = () => {
    dropDown.classList.remove('active')
    overlay.style.display = "none"
}

let oldScrollHeight = 0

window.addEventListener('scroll', e => {
    const currentScrollHeight = window.scrollY

    console.log(window.scrollY)

    if (currentScrollHeight < oldScrollHeight) {

        if (window.scrollY > 450) {
            navbar.classList.add('show')
        }

    } else {
        navbar.classList.remove('show')
    }

    if (window.scrollY < 450) {
        navbar.classList.remove('show')
    }

    oldScrollHeight = window.scrollY
})

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})