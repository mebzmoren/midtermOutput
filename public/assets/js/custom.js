// Tab Selector Module
let tabs = document.querySelectorAll('.row_toggle'), contents = document.querySelectorAll('.row_content');

tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        contents.forEach((content) => {
            content.classList.remove('is-active');
        });
        tabs.forEach((tab) => {
            tab.classList.remove('is-active');
        });
        contents[index].classList.add('is-active');
        tabs[index].classList.add('is-active');
    });
});



// FAQs Module
const faqs = document.querySelectorAll(".faq")

faqs.forEach(faq => {
    faq.addEventListener("click", () => {
        faq.classList.toggle("active");
    });
});

// Post Module
const openPost = document.getElementById("openPost")
const closePost = document.getElementById("closePost")
const postModal = document.getElementById("post")

openPost.addEventListener('click', () => {
    postModal.classList.add('show');
});

closePost.addEventListener('click', () => {
    postModal.classList.remove('show');
});
