function validateForm() {
    const form = document.forms.form
    const id = document.getElementById('id').value
    const prefix = document.getElementById('prefix').value;
    const firstname = document.getElementById('firstname').value;
    const lastname = document.getElementById('lastname').value;
    const address = document.getElementById('address').value;
    const subdistrict = document.getElementById('subdistrict').value;
    const district = document.getElementById('district').value;
    const postalcode = document.getElementById('postalcode').value;

    console.log(id)
    let error = [];

    if (id.length !== 13) {
        error.push('หมายเลขบัตรประชาชนต้องเป็น 13 หลัก')
    }
    if (!(firstname.length >= 2 && firstname.length <= 20)) {
        error.push('ชื่อต้องมีความยาวระหว่าง 2-20 ตัวอักษร')
    }
    if (!(lastname.length >= 2 && lastname.length <= 20)) {
        error.push('นามสกุลต้องมีคตวามยาวระหว่าง 2-20 ตัวอักษร')
    }
    if (!(address.length >= 15)) {
        error.push('ที่อยู่ความยาวต้องไม่ต่ำกว่า 15 ตัวอักษร')
    }
    if (postalcode.length !== 5 && isNaN(postalcode)) {
        error.push('รหัสไปรษณีย์ต้องมีความยาว 5 ตัวอักษรเท่านั้น')
    }

    if (error.length !== 0) {
        alert(error.join('\n'))
        return false;
    } else {
        alert('กรอกข้อมูลสำเร็จ')
        return true;
    }
}