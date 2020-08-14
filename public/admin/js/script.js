
let rem = document.querySelectorAll('.remove');
console.log(rem);
rem.forEach((item)=>{
    item.addEventListener('click', (e)=>{
            let val = e.target.parentElement.parentElement;
            val.remove();
    })
})
/*let rem2 = document.getElementById('remove');
rem2.addEventListener('click', (e)=>{
let val =e.target.parentElement.parentElement;
val.remove();    
})*/












