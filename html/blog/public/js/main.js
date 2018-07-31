function sendForm(){

    let formData = JSON.stringify({
        name: document.getElementById('user_name').value, 
        email: document.getElementById('user_email').value
    });

    fetch("saveorder",
    {
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        method: "POST",
        body: formData
    })
    .then(function(res){ console.log(res) })
    .catch(function(res){ console.log(res) })
};
