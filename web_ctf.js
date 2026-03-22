
var flg = document.getElementById("flag1")
var warmup1=document.getElementById("warmup")
var clg = "cybertron{got_your_first_flag}"
function check(){
    var clg1=flg.value
    if(clg1==clg){
        alert("Congrats Your Catch Your First Flag..!")
        warmup1.remove()
    }
    else{
        alert("Worng Flag Try Again..!")
    }
}