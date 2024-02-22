async function loadsus(element, scoreCounter){

    const suspicious = element.querySelectorAll(".sus");
    let imposterIndex;
    let score = 0;
    scoreCounter.innerHTML = score;
    
    let data;
    data = await fetchImposter(score)
    imposterIndex = data.randomNumber;
    // Load Event Listeners for each sus


    suspicious.forEach((sus, index) => {
        sus.addEventListener("click", async (event) => {

            if (index == imposterIndex){
                alert("You found the imposter!")
                score += 1;
            } else {
                alert("You found a crewmate!")
                score = 0;
            }
            scoreCounter.innerHTML = score;
            data = await fetchImposter(score)
            imposterIndex = data.randomNumber;

            if (data.message != null) {
                alert(data.message);
                return;
            }

        });
    });

}

async function fetchImposter(score) {
    let data;

    await fetch(`findthesus.php?score=${score}`)
    .then(response => response.json())
    .then(result => {
        data = result;
    })
    // .catch(error => {
    //     console.error('Error:', error);
    // });

    return data
}
export default loadsus;
