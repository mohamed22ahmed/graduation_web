var body = document.querySelector('#ex');

var d = document.getElementById('delete');
d.addEventListener('click',()=>{
    const div = document.createElement('div');
    div.className='alert alert-danger text-center';
    div.innerHTML = '<strong> Delete......</strong> you are deleting the exam';
    console.log(div);
    body.appendChild(div);
    setTimeout(()=>{
        div.remove();
    },700)
})
var dm = document.getElementById('delmcq');
dm.addEventListener('click', ()=>{
    const div = document.createElement('div');
    div.className='alert alert-danger text-center';
    div.innerHTML = '<strong> Delete......</strong> you are deleting the  last MCQ';
    console.log(div);
    body.appendChild(div);
    setTimeout(()=>{
        div.remove();
    },700)
})
var dtf = document.getElementById('deltf');
dtf.addEventListener('click', ()=>{
    const div = document.createElement('div');
    div.className='alert alert-danger text-center';
    div.innerHTML = '<strong> Delete......</strong> you are deleting the  last Tue and False';
    console.log(div);
    body.appendChild(div);
    setTimeout(()=>{
        div.remove();
    },700)
})