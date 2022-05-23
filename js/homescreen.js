const elctronicsSlide = document.querySelector('.electronics');
const elctronicsImage = document.querySelectorAll('.electronics img');

//Buttons
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

//Counter
let counter = 1;
const size = elctronicsImage[0].clientWidth;

elctronicsSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

//Button Listeners

nextBtn.addEventListener('click', ()=>{
  if(counter>= elctronicsImage.length - 1) return;
  elctronicsSlide.style.transition= "transform 0.4s ease-in-out";
  counter++;
  // console.log(counter);
  elctronicsSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

});


prevBtn.addEventListener('click', ()=>{
  if(counter <= 0) return;
  elctronicsSlide.style.transition= "transform 0.4s ease-in-out";
  counter--;
  elctronicsSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

});

elctronicsSlide.addEventListener('transitionend', () =>{
  if(elctronicsImage[counter].id==='lastClone'){
    elctronicsSlide.style.transition="none";
    counter = elctronicsImage.length -2;
    elctronicsSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
  }
  if(elctronicsImage[counter].id==='firstClone'){
    elctronicsSlide.style.transition="none";
    counter = elctronicsImage.length - counter;
    elctronicsSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
  }

});

//clothing

const clothingSlide = document.querySelector('.clothing');
const clothingImage = document.querySelectorAll('.clothing img');

//Buttons
const prevBtnClothing = document.querySelector('#prevBtnClothing');
const nextBtnClothing = document.querySelector('#nextBtnClothing');

//Counter
let counterClothing = 1;
const sizeClothing = clothingImage[0].clientWidth;

clothingSlide.style.transform = 'translateX(' + (-sizeClothing * counterClothing) + 'px)';

//Button Listeners

nextBtnClothing.addEventListener('click', ()=>{
  if(counterClothing>= clothingImage.length - 1) return;
  clothingSlide.style.transition= "transform 0.4s ease-in-out";
  counterClothing++;
  // console.log(counterClothing);
  clothingSlide.style.transform = 'translateX(' + (-sizeClothing * counterClothing) + 'px)';

});


prevBtnClothing.addEventListener('click', ()=>{
  if(counterClothing <= 0) return;
  clothingSlide.style.transition= "transform 0.4s ease-in-out";
  counterClothing--;
  clothingSlide.style.transform = 'translateX(' + (-sizeClothing * counterClothing) + 'px)';

});

clothingSlide.addEventListener('transitionend', () =>{
  if(clothingImage[counterClothing].id==='lastCloneClothing'){
    clothingSlide.style.transition="none";
    counterClothing = clothingImage.length -2;
    clothingSlide.style.transform = 'translateX(' + (-sizeClothing * counterClothing) + 'px)';
  }
  if(clothingImage[counterClothing].id==='firstCloneClothing'){
    clothingSlide.style.transition="none";
    counterClothing = clothingImage.length - counterClothing;
    clothingSlide.style.transform = 'translateX(' + (-sizeClothing * counterClothing) + 'px)';
  }

});

/*-----household-------*/

const householdSlide = document.querySelector('.household');
const householdImage = document.querySelectorAll('.household img');

//Buttons
const prevBtnHousehold = document.querySelector('#prevBtnHousehold');
const nextBtnHousehold = document.querySelector('#nextBtnHousehold');

//Counter
let counterHousehold = 1;
const sizeHousehold = householdImage[0].clientWidth;

householdSlide.style.transform = 'translateX(' + (-sizeHousehold * counterHousehold) + 'px)';

//Button Listeners

nextBtnHousehold.addEventListener('click', ()=>{
  if(counterHousehold>= householdImage.length - 1) return;
  householdSlide.style.transition= "transform 0.4s ease-in-out";
  counterHousehold++;
  // console.log(counterClothing);
  householdSlide.style.transform = 'translateX(' + (-sizeHousehold * counterHousehold) + 'px)';

});


prevBtnHousehold.addEventListener('click', ()=>{
  if(counterHousehold <= 0) return;
  householdSlide.style.transition= "transform 0.4s ease-in-out";
  counterHousehold--;
  householdSlide.style.transform = 'translateX(' + (-sizeHousehold * counterHousehold) + 'px)';

});

householdSlide.addEventListener('transitionend', () =>{
  if(householdImage[counterHousehold].id==='lastCloneHousehold'){
    householdSlide.style.transition="none";
    counterHousehold = householdImage.length -2;
    householdSlide.style.transform = 'translateX(' + (-sizeHousehold * counterHousehold) + 'px)';
  }
  if(householdImage[counterHousehold].id==='firstCloneHousehold'){
    householdSlide.style.transition="none";
    counterHousehold = householdImage.length - counterHousehold;
    householdSlide.style.transform = 'translateX(' + (-sizeHousehold * counterHousehold) + 'px)';
  }

});



