const quizDB = [
    {
        question : "Q1: Little interest or pleasure in doing things" ,
        a:"NOT AT ALL",
        b:"SEVERAL DAYS",
        c:"MORE THAN HALF THE DAYS",
        d:"NEARLY EVERY DAY",
        ans: "ans1  "

    },
    {
        question : "Q2: Feeling down, depressed, or hopeless" ,
        a:"NOT AT ALL",
        b:"SEVERAL DAYS",
        c:"MORE THAN HALF THE DAYS",
        d:"NEARLY EVERY DAY",
        ans: "ans1"

    },
    {
        question : "Q3: Trouble falling or staying asleep, or sleeping too much" ,
        a:"NOT AT ALL",
        b:"SEVERAL DAYS",
        c:"MORE THAN HALF THE DAYS",
        d:"NEARLY EVERY DAY",
        ans: "ans1"

    },
    {
        question : "Q4: Feeling tired or having little energy" ,
        a:"NOT AT ALL",
        b:"SEVERAL DAYS",
        c:"MORE THAN HALF THE DAYS",
        d:"NEARLY EVERY DAY",
        ans: "ans1"

    },
    {
        question : "Q5:  Poor appetite or overeating" ,
        a:"NOT AT ALL",
        b:"SEVERAL DAYS",
        c:"MORE THAN HALF THE DAYS",
        d:"NEARLY EVERY DAY",
        ans: "ans1"

    },
    {
        question : "Q6: Feeling bad about yourself - or that you are a failure or have let yourself or your family down" ,
        a:"NOT AT ALL",
        b:"SEVERAL DAYS",
        c:"MORE THAN HALF THE DAYS",
        d:"NEARLY EVERY DAY",
        ans: "ans1"

    }, 
    {
        question : "Q7: Trouble concentrating on things, such as reading the newspaper or watching television" ,
        a:"NOT AT ALL",
        b:"SEVERAL DAYS",
        c:"MORE THAN HALF THE DAYS",
        d:"NEARLY EVERY DAY",
        ans: "ans1"

    },
    {
        question : "Q8:  Moving or speaking so slowly lot more than usual that other people could have noticed" ,
        a:"NOT AT ALL",
        b:"SEVERAL DAYS",
        c:"MORE THAN HALF THE DAYS",
        d:"NEARLY EVERY DAY",
        ans: "ans1"

    },
    {
        question : "Q9: Thoughts that you would be better off dead, or of hurting yourself" ,
        a:"NOT AT ALL",
        b:"SEVERAL DAYS",
        c:"MORE THAN HALF THE DAYS",
        d:"NEARLY EVERY DAY",
        ans: "ans1"

    },
    {
        question : "Q10: If you checked off any problems, how difficult have these problems made it for you at work, home, or with other people?" ,
        a:"NOT AT ALL",
        b:"SEVERAL DAYS",
        c:"MORE THAN HALF THE DAYS",
        d:"NEARLY EVERY DAY",
        ans: "ans1"

    },

];

const question = document.querySelector('.question');
const option1 = document.querySelector ('#option1');
const option2 = document.querySelector ('#option2');
const option3 = document.querySelector ('#option3');
const option4 = document.querySelector ('#option4');
const submit = document.querySelector('#submit');


const answers = document.querySelectorAll('.answer');

const showScore = document.querySelector('#showScore');

let questionCount = 0;
let score = 0;

const loadQuestion = () => {

    const questionList = quizDB [ questionCount];

    question.innerText = questionList.question;

    option1.innerText = questionList.a;
    option2.innerText = questionList.b;
    option3.innerText = questionList.c;
    option4.innerText = questionList.d;

}

loadQuestion();

const getCheckAnswer = () => {
    let answer;

    answers.forEach ((curAnsElem) =>{
       if (curAnsElem.checked){
           answer = curAnsElem.id;
       }
      
    });
    return answer;
};

 const deselectAll = () => {

    answers.forEach((curAnsElem) => curAnsElem.checked = false );

 }

submit.addEventListener('click', () => {
    const checkedAnswer = getCheckAnswer();
    console.log(checkedAnswer);

    if(checkedAnswer === quizDB [ questionCount]. ans ){
        score ++;
    };

    questionCount++ ;


    deselectAll();

    if (questionCount < quizDB .length){
        loadQuestion();
    } else{

        showScore.innerHTML = '<h3> You have scored ${score}/${quizDB.length}  </h3>'
            '<button class ="btn" onclick = "location.reload()"> Take Mental Test Again</button>'
   ;

        showScore.classList.remove('scoreArea');
    }

});