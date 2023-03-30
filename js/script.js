let menu = document.querySelector('.header .nav .menu');

document.querySelector('#menu-btn').onclick = () => {
    menu.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.toggle('active');
}

document.querySelectorAll('input[type="number"]').forEach(inputNumber => {
    inputNumber.oninput = () => {
        if (inputNumber.value.length > inputNumber.maxLength) inputNumber.value = inputNumber.value.slice(0, inputNumber.maxLength);

    };
});

document.querySelectorAll('.faq .box-container .box h3').forEach(headings =>{
    headings.onclick = () =>{
       headings.parentElement.classList.toggle('active');
    }
});

document.querySelectorAll('..faq .box-container .box h3').forEach(headings =>{
    heading.onclick = () =>{
        heading.parentElement.classList.toggle('active');
    }
})