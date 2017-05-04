var ctx = document.getElementById("myChart").getContext("2d");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels :['fee','fly','foo','see','sly','soo'],
        datasets:[{
                data:[3,7,10,17,27,44],
                label:'rouge',
                backgroundColor: [
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)'
                ]
            },{
                data:[64,32,16,8,4,2],
                type: 'line',
                fill: false,
                label:'bleu',
                backgroundColor: [
                    'rgba(255,135,72,1)',
                    'rgba(255,135,72,1)',
                    'rgba(255,135,72,1)',
                    'rgba(255,135,72,1)',
                    'rgba(255,135,72,1)',
                    'rgba(255,135,72,1)'
                    
                ]
            }
        ]
    }
});