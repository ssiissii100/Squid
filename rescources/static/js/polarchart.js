function diagram(){
    const data = {
        labels: [
          'Interpersonal',
          'Logical',
          'Linguistic',
          'Musical',
          'Intrapersonal',
          'Visual',
          'Naturalistic',
          'Kinesthetic'

        ],
        datasets: [{
          label: 'My First Dataset',
          data: sqldata,
          backgroundColor: [
            'rgb(252, 218, 124)',
            'rgb(124, 248, 252)',
            'rgb(184, 124, 252)',
            'rgb(201, 203, 207)',
            'rgb(147, 252, 124)',
            'rgb(171, 54, 31)',
            'rgb(20, 50, 145)',
            'rgb(186, 34, 61)',
          ]
        }]
    };
    const config = {
        type: 'polarArea',
        data: data,
        options: {}
    };
    const myChart = new Chart(
        document.getElementById('polarchart'),
        config
    );

}
