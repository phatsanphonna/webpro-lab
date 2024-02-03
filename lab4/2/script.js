function toEnglish() {
    const display = document.getElementById('display')
    display.innerHTML = `
    <div>
    <label for="name">Name: </label>
    <input type="text" id="name">
</div>
<div>
    <label for="surname">Surname: </label>
    <input type="text" id="surname">
</div>
<div>
    <label>Country: </label>
    <input type="text" id="country">
</div>
<button onclick="toThai()">เปลี่ยนเป็นภาษาไทย</button>
`
}

function toThai() {
    const display = document.getElementById('display')
    display.innerHTML = `
    <div>
    <label for="name">ชื่อ: </label>
    <input type="text" id="name">
</div>
<div>
    <label for="surname">นามสกุล: </label>
    <input type="text" id="surname">
</div>
<div>
    <label>ประเทศ: </label>
    <input type="text" id="country">
</div>
<button onclick="toEnglish()">To English</button>
`
}