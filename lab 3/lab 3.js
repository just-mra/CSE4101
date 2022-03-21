function validate() {
    var regName = /^[A-Z][a-zA-z]+ [A-Z][a-zA-z]+ [A-Z][a-zA-z]*$/;
    var name = document.getElementById('name_tag').value;
    if (!regName.test(name)) {
        alert('Put the name in correct camelCase format (first & last name).');
        document.getElementById('name_tag').focus();
        return false;
    } else {
        alert('Valid name given.');
        return true;
    }
}


function myFunction() {
    alert("Page is loaded");

    var ar = ["vanilla", "mango", "avocado", "strawberry", "green tea", "chocolate"]
    ar.sort(() => Math.random() - 0.5);

    document.getElementById("x").innerHTML = ar[0]
    document.getElementById("y").innerHTML = ar[1]
    document.getElementById("z").innerHTML = ar[2]
    document.getElementById("a").innerHTML = ar[3]
    document.getElementById("b").innerHTML = ar[4]
    document.getElementById("c").innerHTML = ar[5]
}