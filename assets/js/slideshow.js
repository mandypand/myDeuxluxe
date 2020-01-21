const slides = document.querySelectorAll('.myslide')

if (slides && (slides.lenght > 0 || Object.keys(slides).length)) {
    const slideCount = slides.length;
    let index = 0

    slides[0].style.display = 'flex'
    setInterval(() => {
        slides.forEach(slide => {
            slide.style.display = 'none'
        })

        slides[index].style.display = 'flex'
        slides[index].classList.add('fadeInAnimation')
        index++

        if (index >= slideCount) {
            index = 0
        }
    }, 2000)
}