class Menu 
{
    xControlElement
    constructor()
    { 
        this.xControlElement = document.querySelector(".control");
    }
    control()
    {
        this.xControlElement.onclick = function()
        {
            var el = document.querySelector(".menu");
            el.style.display = el.style.display == "block" ? "none" : "block";
        }
        
    }
}
var menu = new Menu();
menu.control();