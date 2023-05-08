var hoTen = document.getElementById('username');
var Email = document.getElementById('email');
var passW1 = document.getElementById('password');
var passW2 = document.getElementById('retype-password');
var submit = document.getElementById('register');
var ShowErr = document.getElementById('showErr');
const reg = /([\w]+)(@)([\w\.]+)/;

submit.onclick = function(event) {
    event.preventDefault();
    checkmit();

    function checkmit() {
        if (hoTen.value == "") {
            ShowErr.innerHTML = "Bạn chưa nhập dữ liệu"
        }
    }
}