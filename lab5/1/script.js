window.onload = async () => {
    const response = await fetch('./employees.csv')
    const result = (await response.text()).split('\n')
    const parsedResult = result.map((result) => result.split(',').map((r) => r.trimStart().trimEnd()))

    const data = document.getElementById('data')

    for (let r of parsedResult) {
        const li = document.createElement('li')

        li.innerHTML = `${r[0]} <b>${r[2]} ${r[3]}</b> (${r[1]}) is a ${r[4]}, ${r[5]}`

        data.append(li)
    }
}