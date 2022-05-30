const checkboxAll = document.querySelector("#checkboxAll1");
const checkboxOptions = document.querySelectorAll(".option");

checkboxAll.addEventListener("change", () => {
    Array.from(checkboxOptions).map((checkbox) => {
        checkbox.checked = checkboxAll.checked;
    });
});