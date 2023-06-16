function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

/*function cardClick(index) {
    const carousel = document.querySelector('.carousel');
    const cards = Array.from(document.querySelectorAll('.card'));
    carousel.style.transform = `translateX(-${index * (card.offsetWidth + 10)}px)`;
    cards.forEach((c) => {
        c.classList.remove('active');
    });
    cards[index].classList.add('active');
}*/

const carousel = document.querySelector('.carousel');
const cards = Array.from(document.querySelectorAll('.card'));
cards.forEach((card, index) => {
    card.addEventListener('click', () => {
        carousel.style.transform = `translateX(-${index * (card.offsetWidth + 10)}px)`;
        cards.forEach((c) => {
            c.classList.remove('active');
        });
        card.classList.add('active');
    });
});

function openPopup() {
    document.getElementById("myPopup").style.display = "block";
}

function closePopup() {
    document.getElementById("myPopup").style.display = "none";
}

