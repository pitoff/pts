
function errMsg() {

    setTimeout(() => document.querySelector('.errMsg').remove(), 3500);

}

errMsg();

function successMsg(){
    setTimeout(()=> document.querySelector('.successMsg').remove(), 3000);
}
successMsg();