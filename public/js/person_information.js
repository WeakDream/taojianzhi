/**
 * Created by syswing on 17/4/22.
 */
function dtLeft() {
    var dts = document.getElementsByClassName('p');
    for(var i=0;i<dts.length;i++){
        dts[i].setAttribute("class","text-left");
    }
}
addLoadEvent(dtLeft);