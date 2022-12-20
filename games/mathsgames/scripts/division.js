const option1 = document.getElementById('option1');
const option2 = document.getElementById('option2');
const option3 = document.getElementById('option3');
const correct = document.getElementById('correct');
const wrong = document.getElementById('wrong');
var answer = 0;

function genarate_equation(){
    var num1 = Math.floor(Math.random()*13);
    var num2 = Math.floor(Math.random()*13);
    var dummy1 = Math.floor(Math.random()*13);
    var dummy2 = Math.floor(Math.random()*13);
    var allAnswers = [];
    var switchAnswers = [];

    answer = num1 / num2;

    document.getElementById("num1").innerHTML = num1;
    document.getElementById("num2").innerHTML = num2;

    allAnswers = [answer, dummy1, dummy2];

    for(i = allAnswers.length; i--;){
        switchAnswers.push(allAnswers.splice(Math.floor(Math.random()*(i+1)),1)[0]);
    }

    option1.innerHTML = switchAnswers[0];
    option2.innerHTML = switchAnswers[1];
    option3.innerHTML = switchAnswers[2];
};

option1.addEventListener("click", function(){
    if(option1.innerHTML == answer){
        genarate_equation();
        correct.play();
    }
    else{
        wrong.play();
        genarate_equation();
    }
});

option2.addEventListener("click", function(){
    if(option2.innerHTML == answer){
        genarate_equation();
        correct.play();
    }
    else{
        wrong.play();
        genarate_equation();
    }
});

option3.addEventListener("click", function(){
    if(option3.innerHTML == answer){
        genarate_equation();
        correct.play();
    }
    else{
        wrong.play();
        genarate_equation();
    }
});

genarate_equation();