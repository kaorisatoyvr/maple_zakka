document.addEventListener('DOMContentLoaded', function() {
    let acc = document.getElementsByClassName("accordion");
    let i;
    for (let i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            let panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
                panel.classList.remove("open");
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                panel.classList.add("open");
            }
        });
    }
});