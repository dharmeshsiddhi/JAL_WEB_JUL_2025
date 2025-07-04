var courtData = [
        {
            "url": "/", 
            "title_en": "Home",
            "title_mr": "मुख्यपृष्ठ"
        },
        {
            "url": "/about-district", 
            "title_en": "About District",
            "title_mr": "जिल्ह्याविषयी"
        },
        {
            "url": "/hall-of-fame", 
            "title_en": "Hall Of Fame",
            "title_mr": "हॉल ऑफ फेम"
        },
        {
            "url": "/organization-structure", 
            "title_en": "Orga",
            "title_mr": "प्रशासकीय रचना"
        }
    ];

    $('#search_box_main').autocomplete({
        source: function (request, response) {
            var courtdatamap = courtData.map(function(i) {
                return {
                    label: i.title_en,
                    value: i.title_en,
                    url: i.url
                }
            });
            var key = request.term;
            courtdatamap = courtdatamap.filter(function(i) {
            return i.label.toLowerCase().indexOf(key.toLowerCase()) >= 0;
            });
            response(courtdatamap);
        },
        autoFocus: true,
        minLength: 1,
        select: function (event, ui) {
            // console.log(ui.item.url);
            window.location.href = ui.item.url;
        }
    });