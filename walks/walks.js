// Set focus on first visible input element and select all text in it
function setFormFocus() {
    var inputs = document.querySelectorAll("input:not(input[type='hidden'])");

    if(inputs.length > 0)
    {
        inputs[0].focus();
        inputs[0].select();
    }
}

// Add call to back() on cancel button
function setupCancelButtons() {
    document.querySelectorAll(".button-cancel")
        .forEach(elem => elem.addEventListener('click', () => history.back()));
}


// Set up counters for text fields
function setupCounters() {
    document.querySelectorAll("input[type='text']")
        .forEach(elem => {
            // Get reference to counter and set to length of data field
            var counter = document.querySelector("#" + elem.name + "counter");

            if(counter != null && counter.innerHTML)
            {
                counter.innerHTML = elem.value.length;
            }

            // Add listener to change counter when key released
            elem.addEventListener('keyup', (e) => {
                var counter = document.querySelector("#" + e.target.name + "counter");
                
                if(counter != null && counter.innerHTML)
                {
                    counter.innerHTML = e.target.value.length;
                }
            })
        });
}