const calculate = () => {
    const number1 = parseInt(document.getElementById('number1').value)
    const number2 = parseInt(document.getElementById('number2').value)

    const history = document.getElementById('history')
    const newChild = document.createElement('li')

    newChild.innerText = number1 + ' + ' + number2 + ' = ' + (number1 + number2)
    history.appendChild(newChild)
}