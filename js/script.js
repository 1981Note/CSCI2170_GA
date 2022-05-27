/*
Knowledge about change active
URL: https://www.youtube.com/watch?v=koDCLPmX3Cc
Accessed Date: 2021/12/1
*/

/* This part written by Siyuan Chen */
const currentLocation = location.href;
const navItem = document.querySelectorAll("li a");
const navLength = navItem.length;
for (i = 0; i < navLength; i++){
    if (navItem[i].href === currentLocation){
        navItem[i].className = "active";
    }
}




/*
Knowledge about create search bar
URL: https://www.geeksforgeeks.org/search-bar-using-html-css-and-javascript/
Accessed Date: 2021/11/8
 */


/* This part written by Siyuan Chen */
function search_key(){
    let input = document.getElementById('searchbar').value;
    let p = document.getElementsByTagName('p');

    if (input.length != 0){
        input = input.toLowerCase();
        //console.log(input);
        console.log(input);
        for (i = 0; i < p.length; i++){
            if (p[i].innerHTML.toLowerCase().includes(input)){
                p[i].style.display = "inline";
            }else{
                p[i].style.display = "none";
            }
        }
    }
}


/*Activity ajax like */
/* This part written by Siyuan Chen */
function like_update(id){
    
    let ajaxPostObj = new XMLHttpRequest();

    //find current count by get id
    var cur_count = document.getElementById("like_count" + id).value;
   
    //open the table get change
    ajaxPostObj.open("GET", "includes/processactivity.php?type=like&id=" + id, true);

    ajaxPostObj.onreadystatechange = function(){
        if(ajaxPostObj.readyState == 4 && ajaxPostObj.status == 200) {
            cur_count++;
            //inner html number plus
            document.getElementById("like" + id).innerHTML = cur_count;
        }
    }
    ajaxPostObj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajaxPostObj.send()
}

/* This part written by Siyuan Chen */
function dislike_update(id){
    
    let ajaxPostObj = new XMLHttpRequest();

    //find current count by get id
    var cur_count = document.getElementById("dislike_count" + id).value;
    
    //open the table get change
    ajaxPostObj.open("GET", "includes/processactivity.php?type=dislike&id=" + id, true);

    ajaxPostObj.onreadystatechange = function(){
        if(ajaxPostObj.readyState == 4 && ajaxPostObj.status == 200) {
            cur_count++;
            //inner html number plus
            document.getElementById("dislike" + id).innerHTML = cur_count;
        }
    }
    ajaxPostObj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajaxPostObj.send()
}

/* This part written by Chenwen Wang */
/*Both popwin& closewin are work in games.php*/
function popwin() {
    const scrollTop = $(window).scrollTop(); //get scroll top
    const clientHeight = $(window).height(); //get client windows height
    const bodyH = document.body.clientHeight; //get client windows height
    const h = clientHeight * 0.75 + scrollTop;//calculate the final height
    document.getElementById("thank").style.display = "block";
    document.getElementById("thank").style.top = h + "px";
    document.getElementById("filter").style.display = "block";
    document.getElementById("filter").style.height = bodyH + "px";
}

function closewin() {
    document.getElementById('thank').style.display = 'none';
    document.getElementById('filter').style.display = 'none';
}