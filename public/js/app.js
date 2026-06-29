var current_url = window.location.href;
fetch('https://network.ospo.in/?url=' + current_url, {
    method: 'GET',
    headers: {
        'Access-Control-Allow-Origin': '*',
        'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE',
        'Access-Control-Allow-Headers': 'Content-Type',
    }
})
    .then(response => response.json())
    .then(data => {
        console.log(data);
    });


