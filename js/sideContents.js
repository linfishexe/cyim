const side_ul = document.querySelector('aside>ul');
const side_contents_arrow = document.querySelector('#side_contents_arrow');
const side_items = document.querySelectorAll('#side_contents>ul>li');
side_contents_arrow.style = `top: ${getPosition(side_items[0]).y - getPosition(side_ul).y}px;`;

const scrollTop_target_value = [];

for(let i = 0; i < side_items.length; i++) {
    const element = side_items[i];
    element.addEventListener('click', function(){
        const nav_hegiht = getPosition(side_ul).y;
        const side_item_y = getPosition(this).y;
        side_contents_arrow.style = `top: ${side_item_y - nav_hegiht}px;`;
    });
    const elmName = element.querySelector('a').getAttribute('href');
    const elm = document.querySelector(elmName);
    const elmPosY = getPosition(elm).y - 50 >= 0 ? getPosition(elm).y - 50 : 0;
    
    if(i !== side_items.length - 1){
        scrollTop_target_value.push(elmPosY);
    }  else {
        scrollTop_target_value.push(elmPosY - window.innerHeight / 2);
    }
    
}

function getPosition (element) {
    let x = 0;
    let y = 0;
    while ( element ) {
        x += element.offsetLeft - element.scrollLeft + element.clientLeft;
        y += element.offsetTop - element.scrollLeft + element.clientTop;
        element = element.offsetParent;
    }
    return { x: x, y: y };
}

window.addEventListener('scroll', event => {
    

    const scTop = document.documentElement.scrollTop;

    for(let i = 0; i < scrollTop_target_value.length; i++){

        if( i !== scrollTop_target_value.length - 1 ){

            if( scTop >= scrollTop_target_value[i] && scTop < scrollTop_target_value[i+1]){

                const nav_hegiht = getPosition(side_ul).y;
                const side_item_y = getPosition(side_items[i]).y;
                side_contents_arrow.style = `top: ${side_item_y - nav_hegiht}px;`;

            }

        } else {

            if( scTop >= scrollTop_target_value[i] ){

                const nav_hegiht = getPosition(side_ul).y;
                const side_item_y = getPosition(side_items[i]).y;
                side_contents_arrow.style = `top: ${side_item_y - nav_hegiht}px;`;


            }

        }
        

    }

});