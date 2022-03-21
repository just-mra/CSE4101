
document.getElementById('check-name').addEventListener('click', function () {
  
    const nameInput = document.getElementById('name');
    const nameValue = nameInput.value.trim();
  
    //console.log(nameValue);
    // console.log(nameValue.split(' '));
    if (nameValue.split(' ').length < 2) {
      alert('You have to give at least two words');
    }
    else {
      const words = nameValue.split(' ');

      for (let i = 0; i < words.length; i++) {
        // console.log(name[0]);

        if(words[i].charAt(0) != words[i].charAt(0).toUpperCase()) {
          alert('You should use Camel Case');
          // break;
        }
        words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
        console.log(words[i]);
      }
      const str2 = words.join(' ');
      nameInput.value = str2;
    }
  
}) 


const one = document.getElementsByClassName('one');
const two = document.getElementsByClassName('two');

for(let i = 0; i < one.length; i++) {
  one[i].style.color = 'blue';
}

for(let i =0; i < two.length;i++) {
  two[i].style.color = 'red';
}

function shuffle(array) {
  return array.sort( ()=>Math.random()-0.5 );
}

let fav_ice = ['Vanilla', 'Chocolate', 'Green Tea', 'Strawberry', 'Mango', 'Avocado'];

let allId = ['One', 'Two', 'Three', 'Four', 'Five', 'Six']


function myFun() {
  const now = shuffle(fav_ice);
  console.log(now);

  for(let i = 0; i < now.length; i++) {
    if(i%2) {
      const str = allId[i];
      console.log(now[i]);
      document.getElementById(str).innerText = now[i];
    }
    else {
      const str = allId[i];
      document.getElementById(str).innerText = now[i];
    }
  }
}