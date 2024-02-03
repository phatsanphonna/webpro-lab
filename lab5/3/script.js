window.onload = async () => {
  const response = await fetch('./questionAnswerData.json');
  const result = await response.json();

  const quizBox = document.getElementById('quiz');

  for (let quiz of result) {
    const answers = quiz.answers;
  
    const question = document.createElement('p');
    question.innerHTML = quiz.question;
    
    quizBox.appendChild(question);

    const inputA = document.createElement('input');
    inputA.setAttribute('type', 'radio');
    inputA.setAttribute('value', answers.a);
    
    const textA = document.createElement('label');
    textA.innerHTML = answers.a;
    quizBox.appendChild(inputA);
    quizBox.appendChild(textA);

    quizBox.appendChild(document.createElement('br'));
  
    const inputB = document.createElement('input');
    inputB.setAttribute('type', 'radio');
    inputB.setAttribute('value', answers.b);

    const textB = document.createElement('label');
    textB.innerHTML = answers.b;
    quizBox.appendChild(inputB);
    quizBox.appendChild(textB);

    quizBox.appendChild(document.createElement('br'));

    const inputC = document.createElement('input');
    inputC.setAttribute('type', 'radio');
    inputC.setAttribute('value', answers.c);

    const textC = document.createElement('label');
    textC.innerHTML = answers.c;
    quizBox.appendChild(inputC);
    quizBox.appendChild(textC);
  }
}