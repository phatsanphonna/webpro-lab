function register() {
    const studentId = document.getElementById('studentId').value
    const name = document.getElementById('name').value
    const surname = document.getElementById('surname').value

    const data = document.getElementById('data')
    const newrow = document.createElement('tr')

    const sidrow = document.createElement('td')
    sidrow.innerText = studentId
    const namerow = document.createElement('td')
    namerow.innerText = name
    const snamerow = document.createElement('td')
    snamerow.innerText = surname

    newrow.appendChild(sidrow)
    newrow.appendChild(namerow)
    newrow.appendChild(snamerow)

    data.appendChild(newrow)
}