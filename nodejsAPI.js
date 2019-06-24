const http = require("http");
const server = http.createServer((req, res) => {
  if (req.url === "/") {
    res.write("Welcpome to musicMart");
    res.end();
  }

  if (req.url === "/api/genres") {
    res.write(JSON.stringify([1, 2, 3]));
    res.end();
  }
  if (req.url === "/api/albums") {
  }

  if (req.url === "/api/artists") {
  }

  if (req.url === "/api/songs") {
  }
  if (req.url === "/api/orders") {
  }
});

server.listen(8000);

console.log("listening on port 8000...");
