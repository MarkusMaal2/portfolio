

function toggleElement(content) {
    if (content.style.display == "none") {
        content.style.display = "block";
    } else if (content.style.display == "block") {
        content.style.display = "none";
    } else {
        content.style.display = "block";
    }
}

function onClick(e) {
    if (e.target.parentElement.className != null) {
        if (e.target.className == "expand") {
            let content = e.target.nextElementSibling;
            toggleElement(content);
        } else  if (e.target.parentElement.className == "expand") {
            let content = e.target.parentElement.nextElementSibling;
            toggleElement(content);
        } else  if (e.target.parentElement.parentElement.className == "expand") {
            let content = e.target.parentElement.parentElement.nextElementSibling;
            toggleElement(content);
        }
    }
}

document.querySelector("#page_main").addEventListener("click", onClick)
