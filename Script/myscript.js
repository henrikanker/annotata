
function addItem(){
    var knapp = document.createElement("knapp");
    var input = document.getElementById("grønn");
    knapp.innerHTML = input.value;
    input.value = "IGNORER";
    alert("Du trykket 'Ignorer'. Fortsetter printen")
    document.getElementById("grønn").appendChild(knapp);
}