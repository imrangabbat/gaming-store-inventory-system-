window.onload = function () {
    console.log("Amazon Clone Loaded Successfully");
};
function validateSearch() {
    let searchBox =
        document.querySelector(".search-input");
    if (searchBox.value.trim() === "") {
        alert("Please enter something to search");
        return false;
    }
    return true;
}
let clickCount = 0;
function countProductClick() {
    clickCount++;
    console.log("Products Clicked : " + clickCount);
}