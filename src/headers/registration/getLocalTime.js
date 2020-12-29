const local = document.querySelector('.localTime');

const showTime = () => {
    const d = new Date();
    local.innerHTML = d.toLocaleTimeString();
}

setInterval(showTime, 1000);
