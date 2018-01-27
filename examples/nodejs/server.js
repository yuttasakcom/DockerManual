const express = require("express");

const app = express();

app.set("port", process.env.PORT || "3000");

app.get("/healthz", (req, res) => {
  res.send("I am happy and healthy\n");
});

app.get("/", (req, res) => {
  res.end("Hello World!");
});

app.listen(app.get("port"), () => {
  console.log(`Server running at port:${app.get("port")}`);
});
