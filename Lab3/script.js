function nameFunction() {
    var x = document.getElementById("nameinp");

    // x.value = x.value.toUpperCase();
    var name = [];
    var a=0;
    name[0]=x.value[0].toUpperCase();
 for (let i = 1; i < x.value.length; i++) {
     
     const element = x.value[i];

     if (element == " ") {
         a=1;
        //   x.value[i+1]=  x.value[i+1];
        name[i] = x.value[i]

        name[i+1]= x.value[i+1].toUpperCase()
        i++;
     }
     else{
        name[i] = x.value[i]

     }
 }
 if (a==0) {
    alert('There Should Be A First Name And Last Name');
 }
let ans = name.join("");
x.value= ans;

}

var nums = ["Vanilla", "Chocolate", "Green Tea", "Strawberry", "Mango" , "Avocado"],    
    ranNums = [],
    i = nums.length,
    j = 0;

while (i--) {
    j = Math.floor(Math.random() * (i+1));
    ranNums.push(nums[j]);
    nums.splice(j,1);
}