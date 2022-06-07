function addNewTodo (e) {

    e.preventDefault();

    // get the value
    let input = document.getElementById("title-input");
    let newTodo = input.value;
    input.value = "";
    input.focus();

    // create a new li element
    let listItem = document.createElement("li");
    listItem.className = "todo-item";
    listItem.style = "boder: 1px solid red;";

    let span = document.createElement("span");
    span.innerText = newTodo;

    // create a checkbox
    let checkbox = document.createElement("input");
    checkbox.type = "checkbox";
    checkbox.addEventListener('change', function (event) {
        if (event.currentTarget.checked) {
            event.currentTarget.parentElement.className = "todo-item done";
        } else {
            event.currentTarget.parentElement.className = "todo-item";
        }
    });

    listItem.appendChild(checkbox);
    listItem.appendChild(span);

    let list = document.getElementById("todo-list");
    list.appendChild(listItem);
}