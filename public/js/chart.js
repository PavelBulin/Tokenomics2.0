; ((D, B, log = arg => console.log(arg)) => {

  let sColors = [
    "#999999",
    "#348af0",
    "#9a1599",
    "#ce000b",
    "#8c7fc1",
    "#308b1c",
    "#00afb2",
    "#fecd5b",
    "#f17a73",
    "#73c18a",
  ];

  let lables = [];
  let data = [];
  for (const [k, obj] of Object.entries(tokenomics)) {
    let arr = [];
    for (const [key, elem] of Object.entries(obj)) {
      if (k == 0) {
        lables.push(key);
      }
      arr.push(elem * 100);
    }
    data.push(arr);
  }

  let sPercents = D.querySelectorAll('.gPercents');

  let gPercents = [];
  let sumPers = 0;
  for (const gPerc of sPercents) {
    gPercents.push(+gPerc.value);
    sumPers += +gPerc.value;
  }
  gPercents.push(100 - sumPers);
  let colors = [];

  for (let i = 0; i < size; i++) {
    colors.push(sColors[i]);
  }

  var ctx = D.querySelector('#myChart').getContext('2d');

  let objs = [];
  for (let i = 0; i < size; i++) {

    objs.push({
      label: catNames[i],
      borderColor: colors[i],
      data: data[i],
    });
  }

  let chart = new Chart(ctx, {
    type: 'line',

    data: {
      labels: lables,
      datasets: objs,
    },

    options: {}
  });

  catNames.push("empty");
  colors.push(sColors[-1]);

  console.log(catNames);
  console.log(colors);
  var ctx2 = D.querySelector('#myChart2').getContext('2d');

  let objs2 = [];
  objs2.push({
    label: "Аллокация",
    backgroundColor: colors,
    borderColor: "#454545",
    data: gPercents,
  });

  let chart2 = new Chart(ctx2, {
    type: 'doughnut',

    data: {
      labels: catNames,
      datasets: objs2,
    },

    options: {}
  });
})(document, document.body)