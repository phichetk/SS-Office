//เขียนโปรแกรมดาวโหลด file

const url1="xxxx.com"
function downloading(url,callback){
    console.log(`กำลังโหลด ${url}`)
    setTimeout(() => {
        callback(url)
    }, 3000);

} 
/*
function complete(result){
    console.log(`Download ${result} complated`)
}
*/
downloading(url1,function(result){

    console.log(`Download ${result} เรียบร้อย`)
})
