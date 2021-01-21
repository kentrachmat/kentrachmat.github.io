const option1 = document.getElementById("option1");
const option2 = document.getElementById("option2");
const option3 = document.getElementById("option3");
var x = document.getElementById("myAudio"); 
var answer = 0;

function random_equation(){ 
  var val1 = Math.floor(Math.random() * 13); 
  var val2 = Math.floor(Math.random() * 13);
  var dummyAnswer1 = Math.floor(Math.random() * 50);
  var dummyAnswer2 = Math.floor(Math.random() * 50);
  var random = [];

  answer = eval(val1 * val2);
  
  document.getElementById("value1").innerHTML = val1; 
  document.getElementById("value2").innerHTML = val2; 

  var randomAnswers = [answer, dummyAnswer1, dummyAnswer2];

  for (var randomAnswers = [answer, dummyAnswer1, dummyAnswer2], i = randomAnswers.length; i--;){
    random.push(randomAnswers.splice(Math.floor(Math.random() * (i + 1)), 1)[0]);
  };

  option1.innerHTML = random[0];
  option2.innerHTML = random[1];
  option3.innerHTML = random[2]; 

};

option1.addEventListener("click", function(){
    if(option1.innerHTML == answer){
      random_equation();
    }
    else{
      x.play();
    }
});
option2.addEventListener("click", function(){
    if(option2.innerHTML == answer){
      random_equation();
    }
    else{
      x.play();
    }
});
option3.addEventListener("click", function(){
    if(option3.innerHTML == answer){
      random_equation();
    }
    else{
      x.play();
    }
});

random_equation()


