function addActionField() {
    var div = document.createElement("div");
    div.classList.add("input-group");

    var input_description = document.createElement("input");
    input_description.setAttribute("type", "text");
    input_description.setAttribute("name", "description[]");
    input_description.setAttribute("placeholder", "Action");
    input_description.setAttribute("required", "required");
    input_description.classList.add("form-control", "bg-light", "border", "small");

    var input_date = document.createElement("input");
    input_date.setAttribute("type", "date");
    input_date.setAttribute("name", "date[]");
    input_date.setAttribute("placeholder", "Date");
    input_date.setAttribute("required", "required");
    input_date.classList.add("form-control", "bg-light", "border", "small");

    var button = document.createElement("button");
    button.setAttribute("type", "button");
    button.classList.add("btn", "btn-danger", "btn-icon-split");

    button.addEventListener('click', function(event){
        event.preventDefault();
        button.parentNode.remove();
    })

    var span = document.createElement("span");
    span.classList.add("icon", "text-white-50");

    var i = document.createElement("i");
    i.classList.add("fas", "fa-trash");

    span.appendChild(i);
    button.appendChild(span);

    div.appendChild(input_description);
    div.appendChild(input_date);
    div.appendChild(button);

    document.getElementById("add-action").appendChild(div);
}

const removeButtons = document.querySelectorAll(".remove-line");
removeButtons.forEach(function(button){
    button.addEventListener('click', function(event){
        event.preventDefault();
        button.parentNode.remove();
    })
})