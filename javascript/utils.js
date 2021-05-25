function readMore( selectedDiv) {
    let section = document.getElementById(selectedDiv);

    if (section.style.display === "none") {
        section.style.display = "block";

    } else {
        section.style.display = "none";
    }
}
