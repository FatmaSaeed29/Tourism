var DivOne = document.getElementById("one");
var DivTwo = document.getElementById("two");
var DivThree = document.getElementById("three");
var DivFour = document.getElementById("four");
var Next1 = document.getElementById("FirstNext");
var previous = document.getElementById("previous");
var Next2 = document.getElementById("SecondNext");
var previous2  = document.getElementById("previous2");
var submitBtn = document.getElementById("final");
var End = document.getElementById("FinalPre");


Next1.addEventListener('click' , function(){
    DivOne.style.display  = "none";
    DivTwo.style.display = "block"
})

previous.addEventListener('click' , function(){
    DivTwo.style.display = "none";
    DivOne.style.display="block";
})

Next2.addEventListener('click' , function(){
    DivTwo.style.display="none";
    DivThree.style.display="block"
})

previous2.addEventListener('click' , function(){
    DivThree.style.display="none";
    DivTwo.style.display="block";
})
submitBtn.addEventListener('click' , function(){
    DivThree.style.display = "none";
    DivFour.style.display="block";
})

End.addEventListener('click' , function(){
    DivFour.style.display = "none";
    DivThree.style.display="block";
})
