function validateForm() {
    var category = document.forms["category"]["name"].value;
    if (category == null || category == "") {
        alert("Die Kategorie darf nicht leer sein!");
        return false;
    }
}