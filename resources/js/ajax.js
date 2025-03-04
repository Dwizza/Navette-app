function load(event, id) {
    event.preventDefault();
    if (confirm("veux-tu vraiment supprimer cet article?")) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
                document.getElementById("status").innerHTML = "Votre article a été supprimé avec succès";
                document.querySelector(`button[onclick="load(${id})"]`).parentElement.remove(); 
            

        
        xhttp.open("DELETE", `http://127.0.0.1:8000/api/delete/${id}`, true);
        
        
        // xhttp.setRequestHeader("X-CSRF-TOKEN", document.querySelector('meta[name="csrf-token"]').getAttribute("content"));
        
        
        xhttp.send();
    }
}
}