new Chart(document.getElementById("chart"), {

type: "line",

data: {
labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],

datasets: [{
label: "Medicine Taken",
data: [2, 5, 3, 6, 4, 7, 5],
borderWidth: 4,
tension: 0.4,
fill: true
}]
},

options: {
responsive: true,
plugins: {
legend: {
display: true
}
}
}

});
