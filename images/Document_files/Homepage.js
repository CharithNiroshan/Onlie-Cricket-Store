const login=document.querySelector("#loginbutton");
const signup=document.querySelector("#signupbutton");
const signup2=document.querySelector("#notamember");
const login2=document.querySelector("#member");
const loginformcontainer=document.querySelector(".loginform");
const signupformcontainer=document.querySelector(".signupform");
console.log(loginformcontainer,signupformcontainer);

login.addEventListener('click',()=>{
    loginformcontainer.style.visibility='visible';
})

signup.addEventListener('click',()=>{
    signupformcontainer.style.visibility='visible';
})

signup2.addEventListener('click',()=>{
    signupformcontainer.style.visibility='visible';
    loginformcontainer.style.visibility='hidden';
})

login2.addEventListener('click',()=>{
    loginformcontainer.style.visibility='visible';
    signupformcontainer.style.visibility='hidden';
})