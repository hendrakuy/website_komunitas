const wrapper = document.getElementById('testimonial-wrapper');
const next = document.getElementById('next');
const prev = document.getElementById('prev');
const total = wrapper.children.length;
let index = 0;

function showSlide(i){
    if(i >= total) index = 0;
    else if(i < 0) index = total - 1;
    else index = i;
    wrapper.style.transform = `translateX(-${index * (100/3)}%)`; // 3 per slide
}

next.addEventListener('click', ()=> showSlide(index + 1));
prev.addEventListener('click', ()=> showSlide(index - 1));

// Optional: auto slide every 5s
setInterval(()=> showSlide(index + 1), 5000);