$.ajax({
    type: "get",
    url: "https://github.com/pcm-dpc/COVID-19/blob/master/dati-json/dpc-covid19-ita-andamento-nazionale-latest.json",
    dataType: "json",
    success: function (response) {
        console.log(response);
        
    }
});