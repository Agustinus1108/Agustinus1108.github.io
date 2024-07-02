const dots = document.querySelectorAll('.dot');
const testimonials = document.querySelectorAll('.testimonial');

let slideIndex = 0;

function showTestimonials(index) {
    testimonials.forEach(testimonial => {
        testimonial.style.display = 'none';
    });
    dots.forEach(dot => {
        dot.classList.remove('active-dot');
    });
    testimonials[index].style.display = 'block';
    dots[index].classList.add('active-dot');
}

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        slideIndex = index;
        showTestimonials(slideIndex);
    });
});

showTestimonials(slideIndex);