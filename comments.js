var btn = document.getElementById('com');
var list = document.getElementsByClassName('list');
var array = [].slice.call(list);
btn.addEventListener('click',function(){
    array.forEach(function(value){
        if(value.style.display == 'block'){
            value.style.display = 'none';
            btn.innerHTML = "Show comments";
        } else {
            value.style.display = 'block';
            btn.innerHTML = "Hide comments";
        }
    });
});