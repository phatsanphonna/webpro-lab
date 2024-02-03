window.onload = async () => {
    const response = await fetch('./person.json')
    const result = await response.json()

    const data = document.getElementById('data')

    for (let r of result) {
        const display = document.createElement('li')

        display.innerText = `${r.firstName}  ${r.lastName} ${r.gender.type} ${r.age} years old.
${r.address.streetAddress} ${r.address.city} ${r.address.state}
${r.address.postalCode}
Home: ${r.phoneNumber[0].number}
Fax: ${r.phoneNumber[1].number}
        `

        data.appendChild(display)
    }
}