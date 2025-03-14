const button1=document.getElementById("slide1"),
button2=document.getElementById("slide2"),
button3=document.getElementById("slide3"),
button4=document.getElementById("slide4"),
button5=document.getElementById("slide5"),
button6=document.getElementById("slide6"),
button7=document.getElementById("slide7"),
button8=document.getElementById("slide8");
button1.onclick=()=>{document.getElementById("containerr1").scrollLeft+=300}
,button2.onclick=()=>{document.getElementById("containerr1").scrollLeft-=300}
,button3.onclick=()=>{document.getElementById("containerr2").scrollLeft+=300},button4.onclick=()=>{document.getElementById("containerr2").scrollLeft-=300},button5.onclick=()=>{document.getElementById("containerr3").scrollLeft+=300},button6.onclick=()=>{document.getElementById("containerr3").scrollLeft-=300},button7.onclick=()=>{document.getElementById("containerr4").scrollLeft+=300},button8.onclick=()=>{document.getElementById("containerr4").scrollLeft-=300};