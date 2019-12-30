$(document).ready(function () {
    // Get country list
    // Append country options <option> to the country list dropdown.
    $.ajax({
        url: "http://127.0.0.1:8000/country",
        type: "GET",
        success: function(result) {
            let countries = result;
            let countryOptions = '';
            let countryDropDown = document.getElementById("country");
            countries.forEach(country => {
                // countryOptions += '<option value="'+country.country_id+'">'+country['country_name']+'</option>';
                var opt = document.createElement('option');
                opt.value = country.id;
                opt.innerHTML = country.name;
                countryDropDown.appendChild(opt);
            });
            // console.log();

            // console.log(countryDropDown)
            // countryDropDown.appendChild(countryDropDown);

        },
        error: function (err) {
            console.log(err)
        }
    })
});


function getAfghanistanProvinces() {
    let countryID = event.target.value;
    let afghanistanID = 1;
    let cityInput = document.getElementById('city');
    let provinceDropdown = document.getElementById('province');
    if(countryID == afghanistanID) {
        getProvinces(provinceDropdown);
        cityInput.style.display = 'none';
        provinceDropdown.style.display = 'block';
    } else {
        cityInput.style.display = 'block';
        provinceDropdown.style.display = 'none';
    }

}

let getProvinces = function (provinceDropdown) {
    $.ajax({
        url: "http://127.0.0.1:8000/province",
        type: "GET",
        success: function(provinces) {
            provinces.forEach(province => {
                let opt = document.createElement('option');
                opt.value = province.id;
                opt.innerHTML = province.name;
                provinceDropdown.appendChild(opt);
            });

        },
        error: function (err) {
            console.log(err)
        }
    });
};

function test() {
    console.log("Heyyyyyyyyyy")
}

