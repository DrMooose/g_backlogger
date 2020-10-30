$.getJSON("https://www.giantbomb.com/api/search/?api_key=dd56b198a8546bc3dc5772f8389f9edd0f4acd44&format=json&query=%22metroid%20prime%22&resources=game",function(api) {
    console.log(api);
})


/*var request = new XMLHttpRequest();


// Open a new connection, using the GET request on the URL endpoint
request.open('GET', 'http://www.giantbomb.com/api/game', true)

request.onload = function () {
  // Begin accessing JSON data here
}

// Send request
request.send()

// Begin accessing JSON data here
var data = JSON.parse(this.response)

data.forEach((game) => {
  // Log each movie's title
  console.log(game.title)
})*/

var request = new XMLHttpRequest()

request.open('GET', 'http://www.giantbomb.com/api/game', true)
request.onload = function () {
  // Begin accessing JSON data here
  var data = JSON.parse(this.response)

  if (request.status >= 200 && request.status < 400) {
    data.forEach((game) => {
      console.log(game.name)
    })
  } else {
    console.log('error')
  }
}

request.send()

console.log("s");
alert("wa");
