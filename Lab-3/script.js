function shuffle(array) {
  array.sort(() => Math.random() - 0.5);
}
window.onload = function() {
  var icecream = ["vanilla", "chocolate", "green tea", "strawberry", "mango", "avocado"];
  shuffle(icecream);
  for (var i=0; i<icecream.length; i++) {
  document.getElementById("icecream"+i).innerHTML = icecream[i];
  }
}


function countWords(str) {
  const arr = str.split(' ');

  return arr.filter(word => word !== '').length;
}



function checkcamelcase() {
    var name = document.getElementById("name").value;
    var myarray = name.split(" ");
    var cam="";
    var word;
    var flag = 0;

    
    word = countWords(name);
    //alert(word);


    if (word <= 1) {
      alert("Please enter at least two word!");

    }
    else {
      for (var j = 0; j<word; j++) {
        if (myarray[j].charAt(0)>="a" && myarray[j].charAt(0)<="z") {
          flag = 1;
        }
      }
      if (flag) {
          alert("This is not a camel case and we are transforming it automatically!");
          for(var k=0; k<word; k++) {
            cam = cam+ myarray[k].charAt(0).toUpperCase() + myarray[k].slice(1) + " ";
          }
      }
  
      document.getElementById("name").value = cam; 

    }

    

    
  }



  