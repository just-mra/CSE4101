document.getElementById('check-name').addEventListener('click', function () {
    // get user name 
    const nameField = document.getElementById('user-name');
    const userName = nameField.value.trim();

    if (userName.split(" ").length < 2) {
        alert('Prease provide at least two words');
    }
    else {
        const words = userName.split(" ");
        for (let i = 0; i < words.length; i++) {
            if (words[i][0] != words[i][0].toUpperCase()) {
                alert('Please use camel case');
            }
            words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
            console.log(words[i]);

        }
        const str2 = words.join(" ");
        nameField.value = str2;
    }


});

function shuffle(array) {
    let currentIndex = array.length, randomIndex;

    // While there remain elements to shuffle...
    while (currentIndex != 0) {

        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex--;

        // And swap it with the current element.
        [array[currentIndex], array[randomIndex]] = [
            array[randomIndex], array[currentIndex]];
    }

    return array;
}

// Used like so
var arr = ["Vanilla", "Chocolate", "Green tea", "Strawberry", "Mango", "Avocado"];
shuffle(arr);
for (var i = 0; i < arr.length; i++) {
    document.getElementById(i.toString()).innerHTML = arr[i]
}


