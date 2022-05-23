function shuffle(array) {
    let currentIndex = array.length,  randomIndex;
  
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
  
  
  
          function starting(){
              taste = ["vanilla", "chocolate", "green tea", "strawberry", "mango", "avocado"];
              shuffle(taste);
  
              for (var i = 0;i < 6; i++)
              {
                  var col = taste[i]
                  j = i+1
                  var y = document.getElementById("id" + j).innerHTML = col;
                  
                  // if (i % 2 == 0){
                  //     document.getElementById("id" + j).style.color = "green";
                  // }
                  // else{
                  //     document.getElementById("id" + j).style.color = "red";
                  // }
                  
  
                 
              }
          }
          function myFunction() {
          var x = document.getElementById("name").value;
          x.value = x.toUpperCase();
          arr = x.split(" ");
          for (var i=0; i<arr.length; i++){
              val = arr[i];
              var first = val.charAt(0);
              var rem = val.slice(1);
              var caps = first.toUpperCase() + rem;
              arr[i] = caps;
              
          }
  
          var name = arr.join(" ");
          console.log(name);
          document.getElementById("name").value = name;
  
          if (arr.length >= 2){
              document.getElementById("erroe1").innerHTML = "";
          }
          else{
              document.getElementById("erroe1").innerHTML = "At least two words!";
          }
          }
  
          function selectOnlyThis(id) {
  
              for (var i = 1;i <= 6; i++)
              {
                  if (i%2 == 0){
                      document.getElementById("Check" + i).style.color = "green";
                  }else{
                      document.getElementById("Check" + i).style.color = "red";
                  }
                  
              }
              for (var i = 1;i <= 6; i++)
              {
                  document.getElementById("Check" + i).checked = false;
              }
              document.getElementById(id).checked = true;
          }