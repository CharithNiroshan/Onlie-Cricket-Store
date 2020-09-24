const Add=document.querySelector("#add");
const Edit=document.querySelector("#edit");
const Delete=document.querySelector("#delte");
const form=document.querySelector(".addproduct");

console.log(Add,Edit,Delete,form);

let addcount=0;
Add.addEventListener('click',()=>{
    addcount++;
    console.log("dsdad");
    if(addcount%2==0)
    {
        form.style.display="none";
    }
    else if(addcount%2==1)
    {
        form.style.display="flex";
    }
})