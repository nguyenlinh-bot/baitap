//1. Lấy 3 thành phần: operation, result, button
const operation = document.querySelector('#operation');
const result = document.querySelector('#result');
const buttons = document.querySelectorAll('button');
//2. Duyệt mảng button: Bắt sự kiện click chuột cho item, và kiểm tra
//- Nếu giá trị button là "Enter" -> tính operation (eval(1+1)->2)
// - Nếu giá trị button là "C" -> xóa nội dung operation và result
// - Ngược lại thêm vào operation
buttons.forEach((item) => {
    item.addEventListener('click', () => {
        if (item.innerText == "Enter") {
            result.innerText = eval(operation.innerText);
        }
        else if (item.innerText == "C") {
            operation.innerText = "";
            result.innerText = "";
        }
        else {
            operation.innerText += item.innerText;
        }
    })
})
//Bai 2
let myTime = () => {
    const d = new Date();
    document.querySelector("#clock").innerHTML = d.getHours() + ":" + d.getMinutes()
        + ":" + d.getSeconds();
}
myTime();
setInterval(myTime, 1000);