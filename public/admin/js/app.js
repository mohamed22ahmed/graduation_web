let num = document.getElementById('num').textContent;
let input = [...document.querySelectorAll('input')];
input.pop();

input.forEach((item)=>{
   console.log(item)
   if(item.value === ""){
      document.getElementById('submit').disabled=true
}
item.addEventListener('keyup',()=>{
   document.getElementById('submit').disabled = false;
})
})
document.getElementById('submit').addEventListener('click', (e)=>{
   num++
    document.getElementById('num').textContent = num;
    input.forEach((item)=>{
            item.value = "";
       })
});

