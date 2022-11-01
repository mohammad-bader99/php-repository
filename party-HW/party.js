
const minAge = 18;
const maxAge = 35;
let age;





  age = prompt("What is your age?");
  age = Number.parseInt(age);

  if (age < minAge) {
    alert("You are too young");
  } else if (age > maxAge) {
    alert("You are too old");
  } else {
    alert("Hi " + prompt("What is your name?") + ", welcome to the party!");
  }
