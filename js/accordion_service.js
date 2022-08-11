class Accordion{
  constructor(selector, multiple=true){ 
    this.accordion = document.querySelector(selector);
    this.multiple = multiple;
    this.bindEvents();
  }

  bindEvents(){
    this.accordion.querySelectorAll(".red .circle").forEach(elementQuestion =>{

        elementQuestion.addEventListener("click",()=>{
        let item = elementQuestion.parentNode;
        this.validateMultiple(item);
        item.classList.toggle("active");
      })

    });
  }
  validateMultiple(selectedItem){
    if(this.multiple) return;

    this.accordion.querySelectorAll(".red").forEach(item => {
      if(selectedItem == item) return;
      item.classList.remove("active");
    })
  
  }
}

// Inicializamos el script

(function(){
  new Accordion(".red")
})()




