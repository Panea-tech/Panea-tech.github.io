//document.getElementById("change-profil").addEventListener('click',function(){
//    var input=document.getElementById('input-image');
//    input.onchange=function(e){
//        var file=e.target.files[0];
//        var reader= new FileReader();
//        reader.onload=function(e){
//            document.getElementById('user-profil').src=e.target.result;
//        }
//        reader.readAsDataURL(file);
//    }
//    input.click();
//});

// progresse bar
//var text = document.querySelector('.text');
//var percent = document.querySelector('.percent');
//var progress = document.querySelector('.progress');
//var count = 4;
//var per = 16;
//var loading = setInterval(animate, 50);
//function animate(){
//  if(count == 100 && per == 400){
//    text.textContent = "Completed";
//    text.style.fontSize = "70px";
//    text.classList.add("add");
//    clearInterval(loading);
//  }else{
//    per = per + 2;
//    count = count + 1;
//    progress.style.width = per + 'px';
//    percent.textContent = count + '%';
//  }
//}
var add_person = document.getElementById("add-person");
add_person.addEventListener('click',function() {
window.location.href="add-person.php";
    
});

var add_person = document.getElementById("search-person");
add_person.addEventListener('click',function() {
window.location.href="search-person.php";
    
});

