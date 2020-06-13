function reapply(){
    setTimeout("slideit()",2000)
    return true
    }
    window.onerror=reapply
    var image1=new Image()
    image1.src="images/m8.jpg"
    var image2=new Image()
    image2.src="images/m9.jpg"
    var image3=new Image()
    image3.src="images/m4.jpg";
    var number_of_images=3
//change speed below (in seconds)
var speed=3
var step=1
var whichimage=1
function slideit(){
if (!document.images)
return
if (document.all)
slide.filters.blendTrans.apply()
document.images.slide.src=eval("image"+step+".src")
if (document.all)
slide.filters.blendTrans.play()
whichimage=step
if (step<number_of_images)
step++
else
step=1
if (document.all)
setTimeout("slideit()",speed*1000+3000)
else
setTimeout("slideit()",speed*1000)
}
function slidelink(){
if (whichimage==1)
window.location="link1.htm"
else if (whichimage==2)
window.location="link2.htm"
else if (whichimage==3)
window.location="link3.htm"
}