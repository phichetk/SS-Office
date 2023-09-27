//บททวน Call back function
function calculate(x,y,callback){
    console.log("กำลังคำนวน")
    setTimeout(() => {
        const sum = x+y
        callback(sum)
    }, 3000);
}
/*
function display(result){
    console.log(`ผลบวก = ${result}`)
}
*/
//ฟังก์ชั้นแบบ callback

calculate(100,50,function(result){
    console.log(`ผลบวก = ${result}`)
})
