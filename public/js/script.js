const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click", function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});

function deleteTask(){
    if (confirm("Are you sure you want to delete?")){

    }
    else {
    }
}