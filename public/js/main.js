const xValues = ["senin", "selasa", "rabu", "kamis", "jumat", "sabtu", "minggu"];
const yValues = [12, 10, 8, 11, 8, 12, 7];

new Chart("myChart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
            fill: false,
            pointRadius: 1,
            borderColor: "rgb(226, 61, 99)",
            data: yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            fontSize: 16
        }
    }
});

function generateData(value, i1, i2, step = 1) {
    for (let x = i1; x <= i2; x += step) {
        yValues.push(eval(value));
        xValues.push(x);
    }
}

fetch("/assets/json/data.json")
    .then(res => res.json())
    .then(data => {

        data.forEach(row => {

            const tbody = document.getElementById('tbody');
            const tr = document.createElement('tr');
            const td1 = document.createElement('td');
            const td2 = document.createElement('td');
            const td3 = document.createElement('td');

            const img = document.createElement('img');


            tbody.appendChild(tr);
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            td1.appendChild(img)

            img.setAttribute('src', row.img_path);
            td2.innerHTML = row.name
            td3.innerHTML = row.book

        })
    });


var xValue = ["Good", "Dirty", "Damaged"];
var yValue = [55, 49, 44];
var barColors = [
    "#1e7145",
    "#e8c3b9",
    "#b91d47"
];

new Chart("qualityChart", {
    type: "doughnut",
    data: {
        labels: xValue,
        datasets: [{
            backgroundColor: barColors,
            data: yValue
        }]
    }
});


