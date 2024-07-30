let role=document.querySelector("#role1");
let ifartist=document.querySelector('.ifArtist')
role.addEventListener("change",()=>
{
    if(role.value=="viewer")
        ifartist.style.display="none"
    else
        ifartist.style.display="block"
}
);