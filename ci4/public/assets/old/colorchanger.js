function loadColorChanger(element) {
    
    const colorsDict = {
        'Yellow': '#fff01f',
        'Lime': '#39FF14',
        'Cyan': 'cyan'
    }
    // Javascript Arrays
    const keys = Object.keys(colorsDict)
    // Javascript Variables, Let, Const & Data Types
    let index = 0

    // Javascript Events
    element.addEventListener('click', function(event) {
        // Javascript Operators, Assignment, Arithmetic & Math
        let new_index = Math.floor(Math.random() * keys.length);

        if (new_index == index) {
            new_index = (new_index + 1) % keys.length;
        }
        index = new_index

        // Change Webpage Title
        const title = document.querySelector('title');
        title.innerHTML = keys[index] + ' Potato' // Javascript Strings

        // Change Title Name
        element.innerHTML = keys[index]

        // Change Website Color
        document.documentElement.style.setProperty('--highlight', colorsDict[keys[index]]);

        //
        const amogus = document.querySelector('#img-amogus');
        amogus.src = './media/sus-' + keys[index] + '.webp';
    });

};

export default loadColorChanger;